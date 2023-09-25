<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //tablename
    protected $table = 'posts';
    //setting primary key 
    public $primaryKey = 'id';
    // setting timestmp
    public $timestmps = 'true';

    public function user(){
        return $this->belongsTo('App\User');
    }

}
