<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    protected $fillable = ['number', 'text', 'code'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'discoveries');
    }
}
