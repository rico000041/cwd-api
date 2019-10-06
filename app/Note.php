<?php

namespace App;
use App\Todo;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //

    protected $table = 'notes';
    public $timestamps = false;

    protected $fillable = [
    	'title',
    	'description'
    ];

    public function todos(){
   		return $this->hasMany(Todo::class);
    }
}
