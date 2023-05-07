<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Banner;
use App\Models\Person;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function home(){

        if(Auth::id()){
          return redirect('redirects');
        }else{

$banners=Banner::all();
$contacts=Contact::all();
$categories=Category::all();
$persons=Person::all();
$services=Service::all();
          return view("home",compact('banners','contacts','categories','persons','services'));
        }
       }
        public function index(){

           return view('dashboard.index');

      }
      public function Profile(Request $request){
        $information =User::findorfail(auth()->user()->id);
        if (!empty($request->password)) {
            $information->name =$request->name;
            $information->email =$request->email;
            $information->password = Hash::make($request->password);
            $information->save();
        } else {
            $information->name =$request->name;
            $information->email =$request->email;
            $information->save();
        }
        session()->flash('Add','Updated Successfully');
        return redirect()->back();
      }
}
