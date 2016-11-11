<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use App\Topic;
class NewTopic extends Controller
{

       public function index(){
             return view("newtopic");
        }
        
        public function sendreply(Request $request){
              
              if(Auth::check()){
                 $this->validate($request, [
                    'reply' => 'required',
                ]);
                 if($this->validate($request, ['reply' => 'required',]) == null){
                      Topic::insert(
                        ['reply'=>$request['reply'],'user_id'=>Auth::user()->id]
                );
                 }
                 return redirect('newtopic');       
              }else{   
                     return redirect('newtopic')->with(array("error"=>'Please Register'));
              }
        }
}
