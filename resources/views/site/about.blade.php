
@include('site.header')
<script src="{{asset('js/TweenMax.min.js')}}"></script>

<!--==========================
  Header
  ============================-->

<header id="header" class="bg-dark">
    <div class="container">

        <div id="logo"  >
            <a href="#hero"><img src="{{ asset('Regna/img/domina.png') }}" class="pull-left " style="max-width: 100px; margin-top: -10px" alt="" title="" ></a>
            <!--<h1><a href="#hero">Regna</a></h1>-->
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="home">{{__('app.nav_home')}}</a></li>
                <li><a href="service">{{__('app.nav_services')}}</a></li>
                <li><a href="training">{{__('app.nav_training')}}</a></li>
                <li class="menu-active"><a href="about">{{__('app.nav_about')}}</a></li>
                <li><a href="#contact">{{__('app.nav_contact')}}</a></li>
                <li><a href="#contact">{{__('app.nav_blog')}}</a></li>
                <li class="menu-has-children"><a href="">{{__('app.language')}}</a>
                    <ul>
                        <li><a href="lang/fr">{{__('app.language_fr')}}</a></li>
                        <li><a href="lang/en">{{__('app.language_en')}}</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->


<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <!--==========================
     description Section
   ============================-->

    <section id="description">
        <div class="section-header">
            <h3 class="section-title">{{__('app.nav_about')}}</h3>
        </div>
        <div class="container wow fadeInUp text-justify mt-5">
          {!!trans('app.description_content')!!}
        </div>
    </section><!-- #contact -->

    <section id="services">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">{{__('app.about.about')}}</h3>
            </div>
            <p>&nbsp;</p>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="icon"><i class="fa  fa-heartbeat "></i></div>
                        <h4 class="title"><a href="">{{__('app.about.values')}}</a></h4>
                        <p class="description">{{__('app.about.values.text')}}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box">
                        <div class="icon"><i class="fa fa-line-chart"></i></div>
                        <h4 class="title"><a href="">{{__('app.about.innovation')}}</a></h4>
                        <p class="description">{{__('app.about.innovation.text')}}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box">
                        <div class="icon"><i class="fa fa-thumb-tack"></i></div>
                        <h4 class="title"><a href="">{{__('app.about.modesty')}}</a></h4>
                        <p class="description">{{__('app.about.modesty.text')}}</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="icon"><i class="fa fa-magic"></i></div>
                        <h4 class="title"><a href="">{{__('app.about.confidence')}}</a></h4>
                        <p class="description">{{__('app.about.confidence.text')}}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-road"></i></a></div>
                        <h4 class="title"><a href="">{{__('app.about.fight')}}</a></h4>
                        <p class="description">{{__('app.about.fight.text')}}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--==========================
      Contact Section
    ============================-->

    <section id="team">
        <div class="section-header">
            <h3 class="section-title">{{__('app.nav_team')}}</h3>
        </div>
        <div class="container wow fadeInUp text-justify">
            <div>
                {{__('app.nav_team_content')}}
            </div>
        </div>


        <div class="mt-5">
            <div class="container wow fadeInUp text-justify">
                <div class="text-danger">
                    <h4>{{__('app.nav_team_director')}}</h4>
                </div>
                <div class="mt-3">
                    {!!trans('app.nav_team_director_message')!!}
                </div>
            </div>
        </div>

    </section><!-- #contact -->


    <!--==========================
    Testimony Section
  ============================-->

{{--
    <section id="testimony">
        <div class="section-header">
            <h3 class="section-title">{{__('app.nav_testimony')}}</h3>
        </div>

        <div class="container wow fadeInUp text-justify">

        </div>

    </section><!-- #contact -->
--}}




    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container wow fadeInUp">

        </div>
    </section><!-- #contact -->

</main>

@include('site.footer')



