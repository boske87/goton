@extends('layouts.main')

@section('content')
<!-- Content section -->
<section class="main">

    <!-- Home content -->
    <section class="home">

        <!-- Promos -->
        <section class="galerija-top">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <img src="{{ asset('assets/img/linkovi-big.png')}}" alt="Linkovi">
                    </div>
                </div>
            </div>
        </section>
        <!-- End class="promos" -->

        <!-- Promos -->
        <section class="galerija-content">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <a href="#">
                                    <img src="{{ asset('assets/img/linkovi/nikon.png')}}">
                                </a>
                            </div>
                            <div class="linkovi-info">
                                <h2><a href="#">Nikon</a></h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.
                                </p>
                                <a href="#">LINK &rarr;</a><br/>
                                <hr/>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <a href="#">
                                    <img src="{{ asset('assets/img/linkovi/canon.png')}}">
                                </a>
                            </div>
                            <div class="linkovi-info">
                                <h2><a href="#">Canon</a></h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.
                                </p>
                                <a href="#">LINK &rarr;</a><br/>
                                <hr/>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <a href="#">
                                    <img src="{{ asset('assets/img/linkovi/foto-blog-red.png')}}">
                                </a>
                            </div>
                            <div class="linkovi-info">
                                <h2><a href="#">Foto Blog</a></h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.
                                </p>
                                <a href="#">LINK &rarr;</a><br/>
                                <hr/>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <a href="#">
                                    <img src="{{ asset('assets/img/linkovi/foto-blog-blue.png')}}">
                                </a>
                            </div>
                            <div class="linkovi-info">
                                <h2><a href="#">Foto Blog</a></h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.
                                </p>
                                <a href="#">LINK &rarr;</a><br/>
                                <hr/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span3">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <a href="#">
                                    <img src="{{ asset('assets/img/linkovi/canon.png')}}">
                                </a>
                            </div>
                            <div class="linkovi-info">
                                <h2><a href="#">Canon</a></h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.
                                </p>
                                <a href="#">LINK &rarr;</a><br/>
                                <hr/>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <a href="#">
                                    <img src="{{ asset('assets/img/linkovi/nikon.png')}}">
                                </a>
                            </div>
                            <div class="linkovi-info">
                                <h2><a href="#">Nikon</a></h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.
                                </p>
                                <a href="#">LINK &rarr;</a><br/>
                                <hr/>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <a href="#">
                                    <img src="{{ asset('assets/img/linkovi/foto-blog-blue.png')}}">
                                </a>
                            </div>
                            <div class="linkovi-info">
                                <h2><a href="#">Foto Blog</a></h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.
                                </p>
                                <a href="#">LINK &rarr;</a><br/>
                                <hr/>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <a href="#">
                                    <img src="{{ asset('assets/img/linkovi/foto-blog-red.png')}}">
                                </a>
                            </div>
                            <div class="linkovi-info">
                                <h2><a href="#">Foto Blog</a></h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.
                                </p>
                                <a href="#">LINK &rarr;</a><br/>
                                <hr/>
                            </div>
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