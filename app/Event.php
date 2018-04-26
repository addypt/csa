<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['lh', 'title', 'description', 'start', 'end', 'date'];
}
