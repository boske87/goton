@extends('layouts.main')

@section('content')
<!-- Content section -->
<section class="main">

    <!-- Home content -->
    <section class="home">


        <!-- Slider -->
        <section class="flexslider">
            <ul class="slides">
                <li>
                    <img src="http://admin.sasapreradovic.com/upload/" alt="" />
                    <span class="prof-name"></span>
                </li>
            </ul>
        </section>
        <!-- End class="flexslider" -->
        <!-- Promos -->
        <section class="promos" id="scroll_to">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <img src="/img/big-foton.png" alt="Big Foton">
                    </div>
                    <div class="span12">
                        <p>

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
                            <img src="/img/pocetni-icon.png" alt="Pocetni Nivo">
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
                            <iframe width="440" height="270" src="" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="nivo-info">
                            <a href="/pocetni-nivo">
                                <span>SAZNAJ VIŠE</span>
                            </a>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="nivo-img">
                            <img src="/img/napredni-icon.png" alt="Napredni Nivo">
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
                            <iframe src="" frameborder="0" allowfullscreen></iframe>
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
                            <?php foreach($prof as $one_p){ ?>
                            <li>
                                <div class="row">
                                    <div class="span1"></div>
                                    <div class="span4">
                                        <div class="prof-img">
                                            <img src="http://admin.sasapreradovic.com/upload/<?php echo $one_p['Img'];?>" alt="profa1">
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="prof-info">
                                            <h4><?php echo $one_p['Name'];?></h4>
                                            <p>
                                                <?php echo $one_p['Desc'];?>
                                            </p>
                                            <a href="#">
                                                <span class="vise">VIŠE</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="span3"></div>
                                </div>
                            </li>
                            <?php } ?>
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
                        <img src="/img/klub-foton.png" alt="BKlub Foton">
                    </div>
                    <div class="span12">
                        <p>
                            <?php echo $text[1]['Text'];?>
                        </p>
                        <p id="hid" style="display: none"><?php echo $text[2]['Text'];?></p>
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