<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{

/**
* @var  string
*/
protected $table = 'references';

protected $casts = [
'created_at' => 'datetime',
'updated_at' => 'datetime',
];

public function city()
{
return $this->belongsTo('App\City', 'citie_id', 'id');
}
}