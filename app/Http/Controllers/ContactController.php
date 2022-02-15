<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function contact($id){
        $cat = Category::where('id',$id)->get();
        return view('contact',['cat'=>$cat]);
    }
    function send(Request $req){
        $contact=new contact;
        $contact->name=$req->name;
        $contact->dob=$req->dob;
        $contact->email=$req->email;
        $contact->phone=$req->phone;
        $contact->country=$req->country;
        $contact->state=$req->state;
        
        
        $contact->save();
        return back()->with('Success');
    }

    
}
