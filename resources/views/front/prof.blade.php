@extends('layouts.main')

@section('content')
<!-- Content section -->
<section class="main silver-bg">

    <!-- Home content -->
    <section class="home">

        <!-- Promos -->
        <section class="promos galerija-top">
            <img src="{{asset('assets/img/big-profesori.png')}}" alt="Profesori">
        </section>
        <!-- End class="promos" -->

        <section class="featured profesori">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="prof-title">
                            <h3>NASTAVNI KADAR</h3>
                            <p class="white-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Promos -->
        <section class="profesori-content">
            <div class="container">
                <div class="row">
                    @foreach($prof as $one)
                    <div class="span6">
                        <div class="profesori-box">
                            <img src="{{ Image::load('gallery/' . $one->main_image, ['h' => 10]) }}">
                            <h2>{{ $one->name }}</h2>
                            <hr/>
                            <a href="/profesor/{{ $one->id }}">&rsaquo; Saznaj više</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- End class="promos" -->

    </section>
    <!-- End class="home" -->

</section>
<!-- End class="main" -->

@stop