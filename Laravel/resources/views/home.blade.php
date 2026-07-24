
@extends('layouts.app')

@section('title', 'King Of Pasta')

@section('content')

<div class="sliderwrapper">
    <div id="slider" class="container">
        <div class="slider">
            <ul class="slides">
                <li class="slide">
                    <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ?</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>

                    <img src="{{ asset('images/slideimg.png') }}" width="317" height="256"
                        class="wow fadeInRight" data-wow-delay="0.8s" alt="slide1img">
                </li>

                <li class="slide">
                    <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ?</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>

                    <img src="{{ asset('images/slideimg.png') }}" width="317" height="256"
                        class="wow fadeInRight" data-wow-delay="0.8s" alt="slide2img">
                </li>

                <li class="slide">
                    <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ?</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>

                    <img src="{{ asset('images/slideimg.png') }}" width="317" height="256"
                        class="wow fadeInRight" data-wow-delay="0.8s" alt="slide3img">
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="bestdisheswrapper">
    <div id="bestdishes" class="container">

        <h2 class="wow fadeInUp" data-wow-delay="0.3s">BEST DISHES</h2>

        <div class="slider">
            <ul class="slides">

                <li class="slide">

                    <div class="item">
                        <img src="{{ asset('images/thumb1.png') }}" width="226" height="225"
                            class="wow flipInX" data-wow-delay=".8s">

                        <h3>Pasta Capellini</h3>
                    </div>

                    <div class="item2">
                        <img src="{{ asset('images/thumb2.jpg') }}" width="226" height="225"
                            class="wow flipInX" data-wow-delay=".8s">

                        <h3>Pasta Pillus</h3>
                    </div>

                    <div class="item3">
                        <img src="{{ asset('images/thumb3.png') }}" width="226" height="225"
                            class="wow flipInX" data-wow-delay=".8s">

                        <h3>Pasta Fusilli</h3>
                    </div>

                </li>

            </ul>
        </div>

    </div>
</div>

<div class="bookonlinewrapper">
    <div class="container" id="bookonline">

        <h3 class="wow fadeInUp" data-wow-delay="0.3s">BOOK ONLINE</h3>

        <form>

            <input type="text" class="name wow zoomIn" placeholder="Your Name">

            <input type="text" class="email wow zoomIn" placeholder="Your E-MAIL">

            <input type="text" class="from wow zoomIn" placeholder="09-06-2014">

            <input type="text" class="to wow zoomIn" placeholder="09-06-2014">

            <input type="text" class="persons wow zoomIn" placeholder="Number of persons">

            <button class="booknow wow fadeInUp">BOOK NOW</button>

        </form>

    </div>
</div>

<div class="mapwrapper">
    <div id="map" class="container">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3453.66325428613!2d31.24094885319519!3d30.046517359733745!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1403554513536"
            class="googlemap"></iframe>

    </div>
</div>

<div class="contactwrapper">
    <div id="contactus" class="container">

        <h3 class="wow fadeInUp" data-wow-delay="0.3s">CONTACT US</h3>

        <div class="staff">

            <ul>

                <li><img src="{{ asset('images/char3.png') }}" class="myimage"></li>

                <li><img src="{{ asset('images/char4.png') }}" class="myimage2"></li>

                <li><img src="{{ asset('images/char5.png') }}" class="myimage3"></li>

                <li><img src="{{ asset('images/char6.png') }}" class="myimage4"></li>

                <li><img src="{{ asset('images/char1.png') }}" class="myimage5"></li>

                <li><img src="{{ asset('images/char2.png') }}" class="myimage6"></li>

            </ul>

        </div>

        <img src="{{ asset('images/pop1.png') }}" class="firstpop">

        <img src="{{ asset('images/popup2.png') }}" class="secondpop">

        <img src="{{ asset('images/popup3.png') }}" class="thirdpop">

        <img src="{{ asset('images/popup4.png') }}" class="fourthpop">

        <img src="{{ asset('images/popup6.png') }}" class="fifthpop">

        <img src="{{ asset('images/popup7.png') }}" class="sixthpop">

    </div>
</div>

@endsection