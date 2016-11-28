@extends('layouts.main')

@section('content')
<!-- Content section -->
<section class="main">

    <!-- Home content -->
    <section class="home">


        <!-- Slider -->
        <section class="flexslider">
            <ul class="slides">
                @foreach($frontGallery as $one)
                    <li>
                        <img src="{{ Image::load('gallery/' . $one->main_image, ['h' => 10]) }}" alt="" />
                        <span class="prof-name">{{$one->name}}</span>
                    </li>
                @endforeach
            </ul>
        </section>
        <!-- End class="flexslider" -->
        <!-- Promos -->
        <section class="promos" id="scroll_to">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <img src="{{asset('assets/img/big-foton.png')}}" alt="Big Foton">
                    </div>
                    <div class="span12">
                        <p>
                            {!! $front->Text1 !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End class="promos" -->

        <section class="featured">
            <div class="container">

                <div class="row">
                    <div class="span6">
                        <div class="nivo-img">
                            <img src="{{asset('assets/img/pocetni-icon.png')}}" alt="Pocetni Nivo">
                        </div>
                        <div class="nivo-title">
                            <h2>POČETNI NIVO</h2>
                        </div>
                        <div class="nivo-opis">
                            <p>
                                je namenjan svakome ko voli fotografiju, želi da se bavi iz hobija ili za kasnije profesionalno napredovanje...
                            </p>
                        </div>
                        <div class="nivo-video">
                            <iframe width="440" height="270" src="{{ $front->Text4 }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="nivo-info">
                            <a href="/pocetni-nivo">
                                <span>SAZNAJ VIŠE</span>
                            </a>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="nivo-img">
                            <img src="{{asset('assets/img/napredni-icon.png')}}" alt="Napredni Nivo">
                        </div>
                        <div class="nivo-title">
                            <h2>NAPREDNI NIVO</h2>
                        </div>
                        <div class="nivo-opis">
                            <p>
                                je namenjan svakome ko voli fotografiju, želi da se bavi iz <br/>hobija ili za kasnije profesionalno napredovanje...
                            </p>
                        </div>
                        <div class="nivo-video">
                            <iframe src="{{ $front->Text5 }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="nivo-info">
                            <a href="/napredni-nivo">
                                <span>SAZNAJ VIŠE</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="featured profesori">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="prof-title">
                            <h3>SAZNAJTE KO SU<br/>PROFESORI NAŠE ŠKOLE</h3>
                        </div>
                    </div>
                    <div class="span12">
                        <ul class="bxslider">
                            @foreach($prof as $item)
                            <li>
                                <div class="row">
                                    <div class="span1"></div>
                                    <div class="span4">
                                        <div class="prof-img">
                                            <img src="{{ Image::load('gallery/' . $item->main_image, ['h' => 10]) }}" alt="profa1">
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="prof-info">
                                            <h4>{!! $item->name !!}</h4>
                                            <p>
                                                {!! substr($item->desc,0,180) !!}...
                                            </p>
                                            <a href="#">
                                                <span class="vise">VIŠE</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="span3"></div>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </section>

        <!-- Promos -->
        <section class="promos klub">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <img src="{{asset('assets//img/klub-foton.png')}}" alt="BKlub Foton">
                    </div>
                    <div class="span12">
                        <p>
                            {!! $front->Text1 !!}
                        </p>
                        <div id="hid" style="display: none">{!! $front->Text3 !!}</div>
                        <div class="klub-info">
                            <a href="#" onclick="show();return false;">
                                <span id="more">SAZNAJ VIŠE</span>

                            </a>
                            <a href="#" onclick="hide();return false;">
                                <span id="less" style="display: none">Manje</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End class="promos" -->

    </section>
    <!-- End class="home" -->

</section>
<!-- End class="main" -->
@stop