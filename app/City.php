<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

/**
* @var  string
*/
protected $table = 'cities';

protected $casts = [
'created_at' => 'datetime',
'updated_at' => 'datetime',
];

}