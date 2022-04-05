<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{

    protected $table = 'data';

    protected $fillable = [
        'page_uid',
        'to',
        'from',
        'message',
    ];

    public  static function findByPageuid($page_uid){

        return Data::where('page_uid', '=', $page_uid)->firstOrFail();
    }
}
