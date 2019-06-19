
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
                <li><a href="home#hero">{{__('app.nav_home')}}</a></li>
                <li><a href="service">{{__('app.nav_services')}}</a></li>
                <li class="menu-active"><a href="training">{{__('app.nav_training')}}</a></li>
                <li><a href="about">{{__('app.nav_about')}}</a></li>
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

    <p>&nbsp;</p>
    <p>&nbsp;</p>


    <!--==========================
   description Section
 ============================-->
    <p>&nbsp;</p>
    <section id="training">
        <div class="section-header">
            <h3 class="section-title">{{__('app.training')}}</h3>
        </div>
        <div class="container wow fadeInUp text-justify mt-5">
            {!!trans('app.training_content')!!}
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="section-header">
            <h3 class="section-title"><strong>{{__('app.training_top')}}</strong></h3>
        </div>

    </section><!-- #contact -->




    <!--==========================
    Accordion Section
    ============================-->
    <div class="accordion container">
        <ul class="accordion__list">
            <li class="accordion__item">
                <div class="accordion__itemTitleWrap">
                    <h5 class="accordion__itemTitle text-justify">{{__('app.training_accordion_title1')}}</h5>
                    <div class="accordion__itemIconWrap"><svg viewBox="0 0 24 24"><polyline fill="none" points="21,8.5 12,17.5 3,8.5 " stroke="#000" stroke-miterlimit="10" stroke-width="2"/></svg></div>
                </div>
                <div class="accordion__itemContent text-justify">
                    {!! trans('app.training_accordion_title1_content') !!}
                </div>
            </li>
            <li class="accordion__item">
                <div class="accordion__itemTitleWrap">
                    <h5 class="accordion__itemTitle text-justify">{{__('app.training_accordion_title2')}}</h5>
                    <div class="accordion__itemIconWrap"><svg viewBox="0 0 24 24"><polyline fill="none" points="21,8.5 12,17.5 3,8.5 " stroke="#000" stroke-miterlimit="10" stroke-width="2"/></svg></div>
                </div>
                <div class="accordion__itemContent text-justify">

                    {!! trans('app.training_accordion_title2_content') !!}

                </div>
            </li>
            <li class="accordion__item">
                <div class="accordion__itemTitleWrap">
                    <h5 class="accordion__itemTitle text-justify">{{__('app.training_accordion_title3')}}</h5>
                    <div class="accordion__itemIconWrap"><svg viewBox="0 0 24 24"><polyline fill="none" points="21,8.5 12,17.5 3,8.5 " stroke="#000" stroke-miterlimit="10" stroke-width="2"/></svg></div>
                </div>
                <div class="accordion__itemContent text-justify">

                    {!!trans('app.training_accordion_title3_content')!!}

                </div>
            </li>
            <li class="accordion__item">
                <div class="accordion__itemTitleWrap">
                    <h5 class="accordion__itemTitle text-justify">{{__('app.training_accordion_title4')}}</h5>
                    <div class="accordion__itemIconWrap"><svg viewBox="0 0 24 24"><polyline fill="none" points="21,8.5 12,17.5 3,8.5 " stroke="#000" stroke-miterlimit="10" stroke-width="2"/></svg></div>
                </div>
                <div class="accordion__itemContent text-justify">

                    {!! trans('app.training_accordion_title4_content') !!}

                </div>
            </li>
        </ul>
    </div>






    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container wow fadeInUp">

        </div>
    </section><!-- #contact -->

</main>
@include('site.footer')
@include('site.accordion')

