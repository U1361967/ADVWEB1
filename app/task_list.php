<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task_list extends Model
{
    //
	protected $table = 'TaskList';
	protected $fillable = ['task','user_id'];


	public function user(){
		$this->belongsTo(User::class);
	}


}
