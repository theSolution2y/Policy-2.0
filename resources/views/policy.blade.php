@extends('layout.layout')

@section('title')
Home
@endsection

@section('css_script')
<link rel="stylesheet" href="{{asset('frontend')}}/contact.css">
@endsection

@section('js_script')
<script src="{{asset('frontend')}}/home.js" defer></script>
@endsection

@section('content')

    <div class="container">
        <div class="content">
            <div class="left-side">
                
                    @foreach ($cat as $data)
                        <p>{{$data->detail}}</p>
                    @endforeach 
                    
            </div>
            <div class="right-side">

            </div>
        </div>
    </div>
                    
@endsection

