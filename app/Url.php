<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'urls';
    
    protected $fillable  = ['url','short_url'];
}
