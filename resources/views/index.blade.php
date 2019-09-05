<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Tinker Template
http://www.templatemo.com/tm-506-tinker
-->

        <title>BinarioSoft</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php 
        //asset(public/) -> me devuelve el direcctorio donde estan los archivos
        //los valores de estado son local para localhost y nada para el hosting
         ?>
        
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

                
        <link rel="stylesheet" href=" {{$directorio}}css/bootstrap.min.css">
        <link rel="stylesheet" href=" {{$directorio}}css/solid.min.js">
        <link rel="stylesheet" href="{{$directorio}}css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{$directorio}}css/fontAwesome.css">
        <link rel="stylesheet" href="{{$directorio}}css/hero-slider.css">
        <link rel="stylesheet" href="{{$directorio}}css/templatemo-style.css">
        <link rel="stylesheet" href="{{$directorio}}css/lightbox.css">
        <script src="{{$directorio}}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{$directorio}}js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="{{$directorio}}js/vendor/bootstrap.min.js"></script>
        <script src="{{$directorio}}js/plugins.js"></script>
        <script src="{{$directorio}}js/main.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        

    </head>

<body>

           


    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand scroll-top">.<em>B</em>inario<em>S</em>oft</a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="scroll-top">Inicio</a></li>
                        <li><a href="#" class="scroll-link" data-id="about">Nosotros</a></li>
                        <li><a href="#" class="scroll-link" data-id="portfolio">Portfolio</a></li>
                       <!-- <li><a href="#" class="scroll-link" data-id="blog">Blog</a></li>-->
                        <li><a href="#" class="scroll-link" data-id="contact-us">Contáctanos</a></li>
                        <li><a href="{{ route('inicio_mail') }}" class="fas fa-atom" data-id="contact-us">Ingreso</a></li>
                        
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->

    @if(session('message'))
             <div class="alert alert-success">{{session('message')}}</div>
             
            @endif
    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="text-content">
                <h2><span><em>BinarioSoft</em> </span></h2>
                <p>Transformamos ideas en proyectos rentables y sustentables en el tiempo.</p>
<p>Combinamos lo último en tecnologías con nuestro equipo interdisciplinario, para ayudarte a crear soluciones con software.
</p>
                <div class="primary-white-button">
                    <a href="#" class="scroll-link" data-id="about">Comencemos</a>
                </div>
            </div>
        </div>
    </div>


    <section id="about" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{$directorio}}img/service_icon_01.png" alt="">
                        </div>
                        <h4>Desarrollo a Medida</h4>
                        <div class="line-dec"></div>
                        <p>Desarrollamos sistemas 100% personalizados, teniendo como prioridad sus objetivos</p>
                        <div class="primary-blue-button">
                            <a href="#" class="scroll-link" data-id="portfolio">Continua Leyendo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{$directorio}}img/service_icon_02.png" alt="">
                        </div>
                        <h4>Sistemas WEB</h4>
                        <div class="line-dec"></div>
                        <p>Especialistas en programación de plataformas y aplicaciones web autoadministrables, estables y escalables</p>
                        <div class="primary-blue-button">
                            <a href="#" class="scroll-link" data-id="portfolio">Continua Leyendo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{$directorio}}img/service_icon_03.png" alt="">
                        </div>
                        <h4>IT Outsourcing</h4>
                        <div class="line-dec"></div>
                        <p>Equipos de analistas, diseñadores y programadores On-Site / Off-Site a disposición de su empresa</p>
                        <div class="primary-blue-button">
                            <a href="#" class="scroll-link" data-id="portfolio">Continua Leyendo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{$directorio}}img/service_icon_04.png" alt="">
                        </div>
                        <h4>Mobile APPs</h4>
                        <div class="line-dec"></div>
                        <p>Diseño, Programación y Publicación, la aplicación compatible para móviles de Apple y con sistema Android de Google.</p>
                        <div class="primary-blue-button">
                            <a href="#" class="scroll-link" data-id="portfolio">Continua Leyendo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="section-heading">
                            <h4>Nuestros Proyectos</h4>
                            <div class="line-dec"></div>
                            <p>Cada proyecto es un nuevo desafío que invita a crecer, para ofrecer un mejor servicio</p>
                            <div class="filter-categories">
                                <ul class="project-filter">
                                    <li class="filter" data-filter="all"><span>Show All</span></li>
                                    <li class="filter" data-filter="branding"><span>Branding</span></li>
                                    <li class="filter" data-filter="graphic"><span>Graphic</span></li>
                                    <li class="filter" data-filter="nature"><span>Nature</span></li>
                                    <li class="filter" data-filter="animation"><span>Animation</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="projects-holder-3">
                            <div class="projects-holder">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 project-item mix nature">
                                      <div class="thumb">
                                            <div class="image">
                                                <a href="{{$directorio}}img/portfolio_big_item_01.jpg" data-lightbox="image-1"><img src="{{$directorio}}img/portfolio_item_01.jpg"></a>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 project-item mix animation">
                                      <div class="thumb">
                                        <div class="image">
                                                <a href="{{$directorio}}img/portfolio_big_item_02.jpg" data-lightbox="image-1"><img src="{{$directorio}}img/portfolio_item_02.jpg"></a>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 project-item mix branding">
                                      <div class="thumb">
                                            <div class="image">
                                                <a href="{{$directorio}}img/portfolio_big_item_03.jpg" data-lightbox="image-1"><img src="{{$directorio}}img/portfolio_item_03.jpg"></a>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 project-item mix graphic nature">
                                        <div class="thumb">
                                            <div class="image">
                                                <a href="{{$directorio}}img/portfolio_big_item_04.jpg" data-lightbox="image-1"><img src="{{$directorio}}img/portfolio_item_04.jpg"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 project-item mix branding">
                                      <div class="thumb">
                                            <div class="image">
                                                <a href="{{$directorio}}img/portfolio_big_item_05.jpg" data-lightbox="image-1"><img src="{{$directorio}}img/portfolio_item_05.jpg"></a>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 project-item mix graphic animation">
                                        <div class="thumb">
                                            <div class="image">
                                                <a href="{{$directorio}}img/portfolio_big_item_06.jpg" data-lightbox="image-1"><img src="{{$directorio}}img/portfolio_item_06.jpg"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
<!--
<section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="owl-testimonials" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonials-item">
                                <p>“ Quisque ullamcorper odio a nisl lacinia dictum. Vestibulum malesuada ipsum in turpis finibus, ut sagittis erat scelerisque. Curabitur non risus fringilla libero accumsan molestie et quis justo. ”</p>
                                <h4>George Rich</h4>
                                <span>Web Designer</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <p>“ Suspendisse magna mauris, convallis vel finibus eget, lobortis dictum neque. Nam tincidunt metus nec eros dignissim consectetur. ”</p>
                                <h4>John Henry</h4>
                                <span>New Manager</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <p>“ Aenean semper aliquam est ut maximus. Fusce id diam eget orci lobortis ultricies at ac velit. Curabitur laoreet massa et fringilla sagittis. ”</p>
                                <h4>Danny Cute</h4>
                                <span>CEO Founder</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <p>“ Maecenas eu odio pharetra, elementum lorem eget, efficitur erat. Duis eget justo non nisi iaculis vestibulum. Aliquam erat volutpat. ”</p>
                                <h4>Richard Beal</h4>
                                <span>CSS Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
   <!--
    <div class="tabs-content" id="blog">
        <div class="container">
            <div class="row">
                <div class="wrapper">
                    <div class="col-md-4">
                        <div class="section-heading">
                            <h4>Our Blog Posts</h4>
                            <div class="line-dec"></div>
                            <p>Nam vulputate elementum nulla, sit amet congue ipsum malesuada pretium. Vivamus vel gravida quam.</p>
                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                                <li><a href="#tab1" class="active">Nulla eget convallis augue</a></li>
                                <li><a href="#tab2">Quisque ultricies maximus</a></li>
                                <li><a href="#tab3">Sed vel elit et lorem</a></li>
                                <li><a href="#tab4">Vivamus purus neque</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <section id="first-tab-group" class="tabgroup">
                            <div id="tab1">
                                <img src="{{asset('temp')}}/img/blog_item_01.jpg" alt="">
                                <div class="text-content">
                                    <h4>Nulla eget convallis augue</h4>
                                    <span><a href="#">Digital Marketing</a> / <a href="#">Honey</a> / <a href="#">26 September 2017</a></span>
                                    <p>Donec interdum scelerisque auctor. Nulla id lorem auctor, bibendum lectus elementum, porta felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                </div>
                            </div>
                            <div id="tab2">
                                <img src="{{asset('temp')}}/img/blog_item_02.jpg" alt="">
                                <div class="text-content">
                                    <h4>Quisque ultricies maximus</h4>
                                    <span><a href="#">Branding</a> / <a href="#">David</a> / <a href="#">14 September 2017</a></span>
                                    <p>Etiam fringilla posuere pretium. Maecenas tempor pellentesque elit in dapibus. Curabitur viverra urna sem, ut sollicitudin sem congue vel. Donec fringilla augue in justo molestie fermentum quis ac mi.</p>
                                </div>
                            </div>
                            <div id="tab3">
                                <img src="{{asset('temp')}}/img/blog_item_03.jpg" alt="">
                                <div class="text-content">
                                    <h4>Sed vel elit et lorem</h4>
                                    <span><a href="#">Web Design</a> / <a href="#">William</a> / <a href="#">20 August 2017</a></span>
                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id ipsum porta, dictum sem sed, bibendum quam. Maecenas mattis risus eget orci rhoncus.</p>
                                </div>
                            </div>
                            <div id="tab4">
                                <img src="{{asset('temp')}}/img/blog_item_04.jpg" alt="">
                                <div class="text-content">
                                    <h4>Vivamus purus neque</h4>
                                    <span><a href="#">E-Commerce</a> / <a href="#">George</a> / <a href="#">14 August 2017</a></span>
                                    <p>Aliquam erat volutpat. Nulla at nunc nec ante rutrum congue id in diam. Nulla at lectus non turpis placerat volutpat lacinia ut mi. Quisque ultricies maximus justo a blandit. Donec sit amet commodo arcu. Sed sit amet iaculis mi, vel fermentum nisi. Morbi dui enim, vestibulum non accumsan ac, tempor non nisl.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <div id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Contáctanos</h4>
                        <div class="line-dec"></div>
                        <p>Todo camino, por largo que sea, comienza con un primer paso. Tomar la decisión de un cambio.</p>
                        <div class="pop-button">
                            <h4>Envíanos un mensaje</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="pop">
                        <span>✖</span>
                        <form id="contact" action="{{ route('envio_mail')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Nombre..." required>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email..." required>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mensage..." required></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="map">
    	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7895.485196115994!2d103.85995441789784!3d1.2880401763270322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fb4e58ad9cd826e!2sSingapore+Flyer!5e0!3m2!1sen!2sth!4v1505825620371" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            
        -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52574.79338742029!2d-58.485805538148774!3d-34.55546475068416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5d28526611d%3A0xbcb585a9ddc70069!2sBelgrano%2C%20CABA!5e0!3m2!1ses-419!2sar!4v1567430391632!5m2!1ses-419!2sar" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="logo">
                        <a class="logo-ft scroll-top" href="#">.<em>B</em>inario<em>S</em>oft</a>
                        <p>Copyright &copy; {{ date('Y') }} BinarioSoft
                       <br></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="location">
                        <h4>Lugar</h4>
                        <ul>
                            <li>Buenos Aires <br></li>
                            <li>Belgrano<br></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="contact-info">
                        <h4>Más información</h4>
                        <ul>
                            <li><em>Celular</em>: +54 3329 529116</li>
                            <li><em>Email</em>: bidabehere@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="connect-us">
                        <h4>Síguenos</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

  
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>