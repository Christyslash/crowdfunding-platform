<?php

namespace App\Models;

use App\Enums\PaymentMethodEnum;
use App\Enums\ProjectPaymentStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectPayment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'project_contribution_id',
        'method',
        'external_id',
        'external_status',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'method' => PaymentMethodEnum::class,
        'status' => ProjectPaymentStatusEnum::class,
    ];

    /**
     * @return BelongsTo
     */
    public function contribution(): BelongsTo
    {
        return $this->belongsTo(ProjectContribution::class);
    }

    /**
     * @return BelongsTo
     */
    public function project(): BelongsTo
    {
        return $this->contribution()->first()->project();
    }
}
