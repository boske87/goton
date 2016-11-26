@extends('admin2.header')

@section('content')
<!-- BEGIN PAGE -->

<div class="page-content">

    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    <div id="portlet-config" class="modal hide">

        <div class="modal-header">

            <button data-dismiss="modal" class="close" type="button"></button>

            <h3>Widget Settings</h3>

        </div>

        <div class="modal-body">


        </div>

    </div>

    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">

        <!-- BEGIN PAGE HEADER-->

        <div class="row-fluid">

            <div class="span12">

                <h3 class="page-title">

                    Pocetna strana

                </h3>

                <ul class="breadcrumb">

                    <li>

                        <i class="icon-home"></i>

                        <a href="index.html">Home</a>

                        <i class="icon-angle-right"></i>

                    </li>

                    <li><a href="#">Pocetna strana</a></li>


                </ul>

                <!-- END PAGE TITLE & BREADCRUMB-->

            </div>

        </div>

        <!-- END PAGE HEADER-->

        <div id="dashboard">

            <h3>Stavljanje nove slike u galeriju</h3>

            <label>Name: </label><input type="text" name="name_gal" required />
            <br />
            <br />
            <label>Image: </label><input type="file" name="userfile" size="20" required />
            <br />
            <br />
            <button type="submit" class="btn purple">Snimi</button>
            </form>
        </div>
        <div>
            {{--<?php if(isset($front_status)) { ?><h4><font color="red">Uspesno ste ubacili sliku u galeriju</font> <?php } ?></h4>--}}
        </div>

    </div>

    <!-- END PAGE CONTAINER-->

</div>

<!-- END PAGE -->
@stop

@extends('admin2.footer')