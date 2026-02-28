<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualifierSubmission extends Model
{
    /** @use HasFactory<\Database\Factories\QualifierSubmissionFactory> */
    use HasFactory;

    protected $fillable = [
        'role',
        'engagement_type',
        'stage',
        'buying_history',
        'bottleneck',
        'timing_driver',
        'email',
    ];
}
