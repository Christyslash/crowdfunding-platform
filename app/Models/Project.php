<?php

namespace App\Models;

use App\Enums\ProjectStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Collection;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'project_category_id',
        'slug',
        'title',
        'cover_image',
        'cover_video',
        'description',
        'details',
        'jackpot',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => ProjectStatusEnum::class,
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }

    /**
     * @return HasMany
     */
    public function contributions(): HasMany
    {
        return $this->hasMany(ProjectContribution::class, 'project_id');
    }

    /**
     * @return HasMany
     */
    public function news(): HasMany
    {
        return $this->hasMany(ProjectNew::class, 'project_id');
    }

    /**
     * @return HasManyThrough
     */
    public function comments(): HasManyThrough
    {
        return $this->hasManyThrough(ProjectComment::class, ProjectContribution::class, 'project_id', 'project_contribution_id');
    }

    /**
     * @return HasManyThrough
     */
    public function payments(): HasManyThrough
    {
        return $this->hasManyThrough(ProjectPayment::class, ProjectContribution::class, 'project_id', 'project_contribution_id');
    }

    /**
     * @return HasMany
     */
    public function payouts(): HasMany
    {
        return $this->hasMany(Payout::class);
    }
}
