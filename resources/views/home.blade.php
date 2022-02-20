@extends('layout.layout')

@section('title')
Home
@endsection

@section('css_script')
<link rel="stylesheet" href="{{asset('frontend')}}/home.css">
@endsection

@section('js_script')
<script src="{{asset('frontend')}}/home.js" defer></script>
@endsection

@section('content')
<!-- section container  -->
<div class="secCont">

    <!-- home page container  -->
    <div id="home" class="homeCont">
        <!-- text about website  -->
        <div class="text"></div>
        <!-- website related image -->
        <div class="img">
            <img src="" alt="">
        </div>
    </div>

    <!-- LIC Plans & feature page container  -->
    <div id="plans" class="plansCont">
        <!-- card container  -->
        @foreach ($cat as $data)

            <div class="cardCont">
                <a href="{{url('contactus/'.$data->id)}}" target="_blank">
                <!-- #card -->
                <div class="card">
                    <!-- card image  -->
                        <img src="{{asset('imgs/')}}/{{$data['image']}}" width="10%" alt="">
                    <!-- card title  -->
                    <div class="card-title">{{$data->title}}</div>
                    <!-- card body  -->
                    <div class="card-body"></div>
                </div>
                </a>
            </div>

        @endforeach
        
        <div class="discountCardCont">
            <!-- carousel  -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <!-- # carosel slide card  -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="..." alt="First slide">
                        <div class="discountTitle">
                            <!-- discount title      -->
                            <div>
                                <h3>Discount</h3>
                            </div>
                        </div>
                        <!-- <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Third slide">
                    </div> -->
                    </div>

                    <!-- next prev buttton  -->
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- about page container  -->
        <div id="about" class="aboutCont">
            <div id="advantageCont">
                <div class="advantageTitle">
                    <h3>Advantage</h3>
                </div>
                <!-- text about advantages  -->
                <div class="advantageText">
                    <p></p>
                </div>
                <div class="advantageCard">
                    <div class="card">
                        <div class="card-header">
                            <img src="" alt="">
                            <div class="card-title"></div>
                        </div>
                        <div class="card-body">
                            <div class="advantageText">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
<div class="ratings bd-container" id="review">
    <span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
<div class="side">
<div>5 star</div>
</div>
<div class="middle">
<div class="bar-container">
<div class="bar-5"></div>
</div>
</div>
<div class="side right">
<div>150</div>
</div>
<div class="side">
<div>4 star</div>
</div>
<div class="middle">
<div class="bar-container">
<div class="bar-4"></div>
</div>
</div>
<div class="side right">
<div>63</div>
</div>
<div class="side">
<div>3 star</div>
</div>
<div class="middle">
<div class="bar-container">
<div class="bar-3"></div>
</div>
</div>
<div class="side right">
<div>15</div>
</div>
<div class="side">
<div>2 star</div>
</div>
<div class="middle">
<div class="bar-container">
<div class="bar-2"></div>
</div>
</div>
<div class="side right">
<div>6</div>
</div>
<div class="side">
<div>1 star</div>
</div>
<div class="middle">
<div class="bar-container">
<div class="bar-1"></div>
</div>
</div>
<div class="side right">
<div>20</div>
</div>
</div>

</div>







            <!-- customer feedback   -->
            <div class="customerFeedbackCont">
                <div class="feedbackTitle">
                    <h3></h3>
                </div>
                <!-- carousel  -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                    <!-- # carosel slide card  -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="..." alt="First slide">
                            <div class="discountTitle">
                                <!-- discount title      -->
                                <div>
                                    <h3>Discount</h3>
                                </div>
                            </div>
                            <!-- <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Third slide">
                    </div> -->
                        </div>

                        <!-- next prev buttton  -->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="aboutInfo">
                <!-- banner image  -->
                <div class="bannerImg">
                    <img src="" alt="">
                </div>
                <!-- about us info  -->
                <article>
                    <!-- website aim and about services  -->
                    <div class="aim">
                        <div class="aimHeading">
                            <h3>Aim</h3>
                        </div>
                        <div class="aimText feature">
                            <p></p>
                        </div>
                    </div>
                    <!-- heading  -->
                    <div class="aboutTitle">
                        <h3>Title</h3>
                    </div>
                    <!-- about owner info -->
                    <div class="aboutText">
                        <p></p>
                    </div>
                </article>
            </div>
        </div>

        <!-- Contact Us container  -->
        <div id="contact" class="contactCont">
            <!-- address info Container  -->
            <div class="addressCont">
                
            </div>
        </div>

        <!-- Help page container  -->
        <div id="help" class="helpCont">
            <!-- help page content  -->
            <div class="helpContentCont">
                <div class="helpTitle">
                    <h3></h3>
                </div>
                <div class="helpContent">
                    <p></p>
                    <div class="emailBox">
                        <div class="emailTitle"></div>
                        <div class="email"></div>
                    </div>
                    <div class="phoneBox">
                        <div class="phoneTitle"></div>
                        <div class="phone"></div>
                    </div>
                </div>
            </div>
            <!-- help image  -->
            <div class="helpImg">
                <img src="" alt="">
            </div>
        </div>
    </div>
    @endsection