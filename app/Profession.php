<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{

/**
* @var  string
*/
protected $table = 'professions';

protected $casts = [
'created_at' => 'datetime',
'updated_at' => 'datetime',
];

}