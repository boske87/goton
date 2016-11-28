@extends('layouts.main')

@section('content')
<!-- Content section -->
<section class="main">

    <!-- Home content -->
    <section class="home">


        <!-- Promos -->
        <section class="promos pocetni">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <img src="{{asset('assets/img/big-napredni-nivo.png')}}" alt="Big Foton">
                    </div>
                    <div class="span12">
                        <p>
                            {!! $advanceText->Text1 !!}<br/><br/>
                        </p>
                    </div>
                    <div class="span12">
                        <div class="nivo-video">
                            <iframe width="440" height="270" frameborder="0" allowfullscreen="" src="{!! $advanceText->Text7 !!}"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End class="promos" -->

        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div id="galleria">
                            @foreach($advanceGallery as $one)
                                <img src="{{ Image::load('gallery/' . $one->main_image, ['h' => 10]) }}" alt="" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <sectio class="featured ">
            <div class="container">
                <div class="row">
                    <div class="span12 pocetni-info">
                        <br/><br/>
                        <h3>OVAJ KURS SE PREPORUČUJE</h3>
                        <p>{!! $advanceText->Text2 !!}</p>
                    </div>
                    <div class="span12 pocetni-info">
                        <br/>
                        <h3>CILJ OVOG KURSA</h3>
                        <p>{!! $advanceText->Text4!!}</p>
                    </div>
                    <div class="span12 pocetni-info">
                        <br/>
                        <h3>NASTAVNI PROGRAM</h3>
                        <p>{!! $advanceText->Text5!!}</p>
                        <p id="hid" style="display: none">{!! $advanceText->Text6 !!}</p>
                        <hr>
                    </div>
                    <div class="span12 pocetni-info">
                        <p>{!! $advanceText->Text3 !!}</p>
                        <p id="hid" style="display: none">{!! $advanceText->Text6 !!}</p>
                        <div class="nivo-info">
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
        </sectio>

    </section>
    <!-- End class="home" -->

</section>
<!-- End class="main" -->

<script>Galleria.loadTheme("{{ asset('assets/js/galleria.classic.min.js')}}");
    Galleria.run("#galleria");</script>
@stop