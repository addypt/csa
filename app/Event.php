<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['lh', 'userid', 'title', 'type', 'description', 'start', 'end', 'date'];
}

