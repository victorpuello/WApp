<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{

/**
* @var  string
*/
protected $table = 'experiences';

protected $casts = [
'created_at' => 'datetime',
'updated_at' => 'datetime',
];

public function employee()
{
return $this->belongsTo('App\Employee', 'employee_id', 'id');
}
}