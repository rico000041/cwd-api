<?php

namespace App;
use App\Note;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //

    protected $table = 'todos';
    public $timestamps = false;

    protected $fillable = [
    	'note_id',
    	'description',
    	'isCompleted'

    ];
    
    public function note(){
    	return $this->belongsTo(Note::class);
    }

}
