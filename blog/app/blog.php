<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = [
        'title', 'description', 'start_date','end_date','status','image','user_id'
    ];
}
