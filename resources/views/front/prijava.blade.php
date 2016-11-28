@extends('layouts.main')

@section('content')
<!-- Content section -->
<section class="main green-bg">

    <!-- Home content -->
    <section class="home">

        <section>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <img src="{{asset('assets/img/prijava-big.png')}}" alt="Prijava"/>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured prijava">
            <div class="container">
                <div class="row">
                    <div class="span5">
                        <br/><br/><br/>
                        <form role="form" action="" method="">
                            <div class="form-group">
                                <label for="exampleInputIme1">Unesite svoje ime</label>
                                <input type="text" class="form-control" id="exampleInputIme1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputGrad1">Grad</label>
                                <input type="text" class="form-control" id="exampleInputGrad1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTelefon1">Telefon</label>
                                <input type="text" class="form-control" id="exampleInputTelefon1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPoruka1">Molimo Vas upišite za koji se kurs prijavljujete</label>
                                <textarea class="form-control" id="exampleInputPoruka1"></textarea>
                            </div>
                            <button type="submit" class="prijavai-se-btn">PRIJAVI SE</button>
                        </form>
                    </div>
                    <div class="span7">
                        <img src="{{asset('assets/img/prijava-people.png')}}" alt="Kontakt People"/>
                    </div>
                </div>
            </div>
        </section>

    </section>
    <!-- End class="home" -->

</section>
<!-- End class="main" -->

@stop