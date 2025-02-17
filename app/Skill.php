<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'keywords' => 'array',
    ];

    //Skill belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
