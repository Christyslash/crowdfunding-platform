<?php

namespace App\Http\Controllers\Auth;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    /**
     * Redirect for OAuth with Socialite.
     *
     * @param $driver
     * @return RedirectResponse
     */
    public function redirect($driver): RedirectResponse
    {
        return Socialite::driver($driver)->stateless()->redirect();
    }

    /**
     * Redirect for OAuth with Socialite.
     *
     * @param $driver
     * @return RedirectResponse
     */
    public function callback($driver): RedirectResponse
    {
        $driver_id = $driver . '_id';
        $oauth_user = Socialite::driver($driver)->stateless()->user();

        $id = $oauth_user->getId();
        $email = $oauth_user->getEmail();

        $user = User::where("socialite.$driver_id", $id)
            ->orWhere('email', $email) // @todo: keep this ?
            ->first();

        if (!$user) {
            return redirect()
                ->route('login') // @todo: create login route
                ->withErrors([
                    'msg' => 'Unable to found an account linked to this email.'
                ]);
        }

        $user->socialite = [
            "$driver_id" => $id
        ];

        $user->save();

        $user->assignRole(RoleEnum::USER->value);

        Auth::login($user);

        return redirect()->route('dashboard'); // @todo: create dashboard route
    }
}
