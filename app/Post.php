<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // By default table name is "Posts"
    // But we can change it using
    // protected $table = 'posts';
    
    // Primaty Key
    public $primaryKey = 'id';

    public $timestamps = true; 
    // its true by default, only add when we want to use "false"


}
