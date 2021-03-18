<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'comments';
    protected $fillable = ['Id','Comment'];
    public $timestamps = false;
}
