<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testapi extends Model
{
    protected $table = 'testapis';
    protected $fillable = array('name','lastname');
}
