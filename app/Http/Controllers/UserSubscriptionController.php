<?php

namespace App\Http\Controllers;

use App\Models\Usersubscription;
use Illuminate\Http\Request;


class UserSubscriptionController extends Controller
{
    public function getSubscribe(){
        return view('site_web/exemple3');
        
    }
 
    public function subscribe(){
        return view('site_web/subscribe');
    }
   


    public function postSubscribe(Request $request){
        $subscribe = new Usersubscription();
        $subscribe->email = request('email');
        $subscribe->save();
        return response()->json($subscribe);
    
        }

    public function autoSubscribe(Request $request){
    $subscribe = new Usersubscription();
    $subscribe->email = request('email');
    $subscribe->save();
    return response()->json($subscribe);
        
      }


     public function santeSubscribe(Request $request){
     $subscribe = new Usersubscription();
     $subscribe->email = request('email');
     $subscribe->save();
    return response()->json($subscribe);
            
         }     
         
     public function proposSubscribe(Request $request){
        $subscribe = new Usersubscription();
        $subscribe->email = request('email');
        $subscribe->save();
       return response()->json($subscribe);
               
            }     
    

}
