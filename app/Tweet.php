<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Tweet extends Model
{
    protected $fillable = ['tweet'];

    protected $dates = ['created_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)->diffForHumans();
    }
}
