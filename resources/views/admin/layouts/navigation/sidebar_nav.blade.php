<div class="col-md-2 js-aside">
    <!-- <div class="col-md-2 col-md-pull-10 js-aside"> -->

    <h1 class="aside-heading">
        Sections
        <a class="js-aside-toggle js-aside-toggle-off pull-right" href="#d"><span class="caret"></span></a>
    </h1>

    <div id="aside-nav" class="panel-group">


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#aside-nav" href="#aside-nav-1">Pocetna strana</a>
                    </h3>
                </div>
                <div class="panel-collapse collapse in" id="aside-nav-1">
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">

							<li class=""><a href="{{route('admin.home','1')}}">Pocetna strana text</a></li>
                            <li class=""><a href="{{route('admin.home-gallery')}}">Pocetna strana gallery</a></li>

                        </ul>
                    </div>
                </div>
                <!-- =aside-nav-views -->
            </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#aside-nav" href="#aside-nav-2">Pocetni nivo</a>
                </h3>
            </div>
            <div class="panel-collapse collapse in" id="aside-nav-2">
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">

                        <li class=""><a href="{{route('admin.basic','1')}}">Pocetni nivo text</a></li>
                        <li class=""><a href="{{route('admin.basic-gallery')}}">Pocetni nivo gallery</a></li>

                    </ul>
                </div>
            </div>
            <!-- =aside-nav-views -->
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#aside-nav" href="#aside-nav-3">Napredni nivo</a>
                </h3>
            </div>
            <div class="panel-collapse collapse in" id="aside-nav-3">
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">

                        <li class=""><a href="{{route('admin.advance','1')}}">Napredni nivo text</a></li>
                        <li class=""><a href="{{route('admin.advance-gallery')}}">Napredni nivo gallery</a></li>

                    </ul>
                </div>
            </div>
            <!-- =aside-nav-views -->
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#aside-nav" href="#aside-nav-4">Profesori</a>
                </h3>
            </div>
            <div class="panel-collapse collapse in" id="aside-nav-4">
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">

                        <li class=""><a href="{{route('admin.prof')}}">Profesori</a></li>
                        <li class=""><a href="{{route('admin.prof.add')}}">Dodavanje</a></li>

                    </ul>
                </div>
            </div>
            <!-- =aside-nav-views -->
        </div>

    </div>
    <!-- =aside-nav -->

</div>
