<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    //
    protected $table = 'good'; //表名
    protected $primaryKey = 'good_id';  //id
    public $timestamps=false;   //时间
    protected $guarded = [];   //黑名单
}
