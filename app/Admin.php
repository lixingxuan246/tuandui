<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected  $table = 'admin';
    protected $primaryKey='id';
    public $timestamps=false;
    //黑名单
    protected $guarded=[];
}
