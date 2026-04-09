<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'date_scheduled',
        'time_scheduled',
        'duration_hours',
        'market_value',
        'moderator',
        'expected_audience',
        'is_active',
    ];

    protected $casts = [
        'date_scheduled' => 'date',
        'time_scheduled' => 'time',
        'duration_hours' => 'integer',
        'market_value' => 'decimal:2',
        'expected_audience' => 'integer',
        'is_active' => 'boolean',
    ];

    public function starterKits()
    {
        return $this->hasMany(StarterKit::class);
    }

    public function assignmentSubmissions()
    {
        return $this->hasMany(AssignmentSubmission::class);
    }

    public function getFormattedDateAttribute()
    {
        try {
            return $this->date_scheduled ? $this->date_scheduled->format('M j, Y') : 'TBA';
        } catch (\Exception $e) {
            return 'TBA';
        }
    }

    public function getFormattedTimeAttribute()
    {
        try {
            return $this->time_scheduled ? $this->time_scheduled->format('g:i A') : 'TBA';
        } catch (\Exception $e) {
            return 'TBA';
        }
    }
}
