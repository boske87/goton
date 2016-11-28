@extends('layouts.main')

@section('content')
<!-- Content section -->
<section class="main silver-bg">

    <!-- Home content -->
    <section class="home">

        <section>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <img src="{{ asset('assets/img/kontakt-big.png')}}" alt="Kontakt"/>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured kontakt">
            <div class="container">
                <div class="row">
                    <div class="span5">
                        <br/><br/><br/>
                        <p>
                            FOTON ŠKOLA FOTOGRAFIJE<br/>
                            tel: +381 64 11 59 800<br/>
                            e-mail: skolafotografije@gmail.com<br/>
                            Đure Daničića 17, 11000 Beograd
                        </p><br/>
                        <form role="form" action="" method="">
                            <div class="form-group">
                                <label for="exampleInputIme1">Unesite svoje ime</label>
                                <input type="text" class="form-control" id="exampleInputIme1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNaslov1">Naslov poruke</label>
                                <input type="text" class="form-control" id="exampleInputNaslov1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPoruka1">Poruka</label>
                                <textarea class="form-control" id="exampleInputPoruka1"></textarea>
                            </div>
                            <button type="submit" class="submit-contact">POŠALJI</button>
                        </form>
                    </div>
                    <div class="span7">
                        <img src="{{ asset('assets/img/kontakt-people.png')}}" alt="Kontakt People"/>
                    </div>
                </div>
            </div>
        </section>

        <section class="gmap">
            <img src="{{ asset('assets/img/gmap.png')}}" alt="Google map"/>
        </section>

    </section>
    <!-- End class="home" -->

</section>
<!-- End class="main" -->

@stop