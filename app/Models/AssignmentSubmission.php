<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignmentSubmission extends Model
{
    protected $fillable = [
        'workshop_id',
        'submitter_name',
        'submitter_email',
        'workshop_title',
        'assignment_title',
        'project_description',
        'notes',
        'file_path',
        'file_name_original',
        'github_url',
        'live_demo_url',
        'token_payment_status',
        'review_status',
        'feedback',
        'score',
        'reviewed_at',
    ];

    protected $casts = [
        'workshop_id' => 'integer',
        'score' => 'integer',
        'reviewed_at' => 'datetime',
    ];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}
