@extends('layout.layout')
@section('css_script')
<link rel="stylesheet" href="{{asset('frontend')}}/contact.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
@endsection

@section('js_script')
<script src="{{asset('frontend')}}/home.js" defer></script>
@endsection

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

    <section class="contact">
    <form action="/contactus" method="post">
                @csrf
        <div class="contact-head">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, veniam? Optio incidunt animi delectu</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>A-12/5,<br>Race Course Road,<br>Dharampur Chowk,<br>Dehradun</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+91-7622568142</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>licagent@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox"> 
                        <input type="text" value="{{$data->title}}" name="PolicyName" required="required">
                        <span>Policy Name</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="message" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
                    
                    
@endsection


@section('content')


@endsection



