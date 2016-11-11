<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function insertTopic(){
         DB::table('topics')->insert(
                            ['reply'=>$request['reply'],'user_id'=>Auth::user()->id]
                      );
    }
}
