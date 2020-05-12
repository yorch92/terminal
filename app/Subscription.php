<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'topic', 'url'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    // ];

    /**
     * A user can have many posts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function posts() 
    // {
    //     return $this->hasMany('App\Post');
    // }

}