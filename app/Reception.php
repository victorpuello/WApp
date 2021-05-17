<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{

/**
* @var  string
*/
protected $table = 'receptions';

protected $casts = [
'created_at' => 'datetime',
'updated_at' => 'datetime',
];

}