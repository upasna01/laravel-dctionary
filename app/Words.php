<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Words extends Model {

	 protected $table = 'entries';

	 protected $guarded = ['id','word', 'wordtype','definition'];

}
