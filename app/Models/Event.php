<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'venue_id',
        'start_time',
        'end_time'
    ];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'event_user')->withTimestamps(); // Many-to-many
    }
}
