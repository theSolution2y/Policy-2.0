<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function contact($id){
        $cat = Category::where('id',$id)->get();
        return view('policy',['cat'=>$cat]);
    }
    function send(Request $req){
        $contact=new contact;
        $contact->name=$req->name;
        $contact->PolicyName=$req->PolicyName;
        $contact->message=$req->message;
        $contact->save();
        return back()->with('Success');
    }
}
