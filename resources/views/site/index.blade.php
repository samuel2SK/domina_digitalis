
@include('site.header')

<!--==========================
  Header
  ============================-->
<header id="header">
    <div class="container">

        <div id="logo"  >
            <a href="#hero"><img src="{{ asset('Regna/img/domina.png') }}" class="pull-left " style="max-width: 100px; margin-top: -10px" alt="" title="" ></a>
            <!--<h1><a href="#hero">Regna</a></h1>-->
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#hero">{{__('app.nav_home')}}</a></li>
                <li><a href="service">{{__('app.nav_services')}}</a></li>
                <li><a href="training">{{__('app.nav_training')}}</a></li>
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

<!--==========================
  Hero Section
============================-->
<section id="hero">
    <div class="hero-container ">
        <h1>{{__('app.welcome')}}</h1>
        <h2>{{__('app.object')}}</h2>
        <a href="#motivation" class="btn-get-started "><img src="{{asset('Regna/img/white-down.png')}}" style="max-height: 30px;max-width: 30px;"></a>
    </div>
</section><!-- #hero -->

<main id="main">

    <!--motivation-->
    <div id="motivation" class="text-center card-body text-justify mt-5 wow fadeInUp" data-wow-delay='0.4s' >
        <p>&nbsp;</p>
        <h4>{{__('app.object_action')}}</h4>
    </div>

    <!-- table -->
    <div class="container mt-lg-5 wow fadeInUp" data-wow-delay='1s'>
        {!! trans('app.table_content') !!}
    </div>
    <!-- table -->
    <p>&nbsp;</p>


    <!--==========================
      About Us Section
    ============================-->
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
    <!-- #about -->


    <!-- Speech bubble text-justify Slider -->

    <section class="quotes card container col-md-10">

        <div class="bubble text-justify">
            <blockquote>
                     {{ __('app.bloc1.1')  }}
                   <cite class="mt-5 d-block"> Domina digitalis</cite>
            </blockquote>
        </div>

        <div class="bubble text-justify">
            <blockquote>
                {{ __('app.bloc1.2')  }}
                <cite class="mt-5 d-block">Mark Twain</cite>
            </blockquote>
        </div>

        <div class="bubble text-justify">
            <blockquote>
                {{ __('app.bloc1.3')  }}
                <cite class="mt-5 d-block">Jeff Richards </cite>
            </blockquote>
        </div>

        <div class="bubble text-justify">
            <blockquote>
                {{ __('app.bloc1.4')  }}
            </blockquote>
        </div>

        <div class="bubble text-justify">
            <blockquote>
                {{ __('app.bloc1.5')  }}
            </blockquote>
        </div>

        <div class="bubble text-justify">
            <blockquote>
                {{ __('app.bloc1.6')  }}
                <cite class="mt-5 d-block">Morris Hite</cite>
            </blockquote>
        </div>

        <div class="bubble text-justify">
            <blockquote>
                {{ __('app.bloc2.1')  }}
                <cite class="mt-5 d-block">Dave Ogilvy</cite>
            </blockquote>
        </div>

        <div class="bubble text-justify">
            <blockquote>
                {{ __('app.bloc2.2')  }}
                <cite class="mt-5 d-block"> Jef Richards</cite>
            </blockquote>
        </div>

        <div class="bubble text-justify">
            <blockquote>
                {{ __('app.bloc2.3')  }}
                <cite class="mt-5 d-block">Morris Hite</cite>
            </blockquote>
        </div>

        <div class="bubble text-justify">
            <blockquote>
                {{ __('app.bloc2.4')  }}
                <cite class="mt-5 d-block">Dave Ogilvy</cite>
            </blockquote>
        </div>

        <div class="bubble text-justify">
            <blockquote>
                {{ __('app.bloc2.5')  }}
                <cite class="mt-5 d-block"> Edwin Stuart</cite>
            </blockquote>
        </div>
        <div class="bubble text-justify">
            <blockquote>
                {{ __('app.bloc2.6')  }}
                <cite class="mt-5 d-block">Jerry Goodis</cite>
            </blockquote>
        </div>

    </section>

<p>&nbsp;</p>

    <section id="vision">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">{{__('app.about.vision')}}</h3>
            </div>
            <p>&nbsp;</p>
            <div class="row mt-5">
                <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="text-center">
                        <h4 class="title">{{__('app.about.vision_title')}}</h4>
                        <p class="description">{{__('app.about.vision_item_1')}}</p>
                        <p class="description">{{__('app.about.vision_item_2')}}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--==========================
      Team Section
    ============================-->
{{--
    <section id="team">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Team</h3>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{asset('Regna/img/user.jpg')}}" alt=""></div>
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{asset('Regna/img/user.jpg')}}" alt=""></div>
                        <h4>Sarah Jhinson</h4>
                        <span>Product Manager</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #team -->
--}}

    <!--==========================
    Call To Action Section
    ============================-->

    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <section id="call-to-action">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="cta-title">{{__('app.object_action2_title')}}</h3>
                    <div>
                        <div class="cta-text"> {{__('app.object_action2')}}</div>
                        <div><img src="{{asset('Regna/img/fleche.gif')}}" width="100px" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                </div>
            </div>

        </div>
    </section><!-- #call-to-action -->



    <!--==========================
      Team Section
    ============================-->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container wow fadeInUp">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="section-header">
                <h3 class="section-title">{{ __('app.contact') }}</h3>
                <p class="section-description">{{ __('app.contact_message') }}</p>
            </div>
        </div>


        <div class="container wow fadeInUp mt-5">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-4">

                    <div class="info">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>lomé <br>Lomé Togo</p>
                        </div>

                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>info@dominadigitalis.com</p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+228 93 23 47 21</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="http://twitter.com/DominaDigitalis" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="http://facebook.com/dominadigitalis.com" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="http://instagram.com/DominaDigitalis" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="http://linkedin.com/company/dominadigitalis" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-5 col-md-8">
                    <div class="form">
                        <div id="sendmessage">{{ __('app.contact_message') }}</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div id="try" class="text-center"><button id="btn-try" type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>
<style>
    .carousel-item {
        height: 70vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size:cover;
    }
</style>
@include('site.footer')

