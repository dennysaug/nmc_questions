<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title',
        'alternative_a',
        'alternative_b',
        'alternative_c',
        'alternative_d',
        'alternative_e',
        'correct'
    ];
}
