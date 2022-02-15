<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact; // because we want to store posts with category


class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contact::all();
        return view('backend.submission', ['data'=>$data]);
    }
}
