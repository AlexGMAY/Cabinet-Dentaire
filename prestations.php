<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes prestations</title>

    <!-- CSS Interne -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Bootstrap Integeration Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- Fontawesome Integration Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

    <!-- Animate.css plugin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- <style>
        .container{
            max-width:  auto;
        }
    </style> -->
</head>
<body>
    <div class="wrapper">
        <!-- Header & navigation Menu Block -->
        <header class="main_header">
            <div class="container">
                <div class="row">
                    <!-- Main Logo -->
                    <div class="col-md-3 main_logo">
                        <a href="index.php">
                            <img src="img/logo-tatai-naouel.png" alt="Main Logo">
                        </a>
                    </div>
                    
                    <!-- Main Navigation -->
                    <div class="col-md-9 main_navigation">
                        <!-- Top nav contents -->
                        <div class="top_nav">
                            <ul>
                                <li>
                                    <img src="img/phone-fix.png" alt="telephone Fixe">
                                    +216 71 873 678
                                </li>
                                <li>
                                    <img src="img/phone-call.png" alt="Personal Phone Call">
                                    +216 20 418 333
                                </li>
                                <li><a href="#" class="btn">Rdv En Ligne</a></li>
                            </ul>
                        </div>
                        <!-- Main Menu Links -->
                        <div class="main_menu_bar">
                            <ul class="menu">                              
                                <li class="menu_links"><a href="#prestations" class="menu_items">Prestations</a></li>                                
                                <li class="menu_links"><a href="blog.php" class="menu_items">Actualités</a></li>
                                <li class="menu_links"><a href="contact.php" class="menu_items">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /End of Header Menu -->


        <!-- Showcase Section -->
        <section class="showcase_blog sh_prestations">
            <div class="container">
                <h1>
                    Prestations
                </h1>
            </div>
        </section>
        <!-- /Showcase Section -->

        <!-- About Section Layout: Dr Tataï Naouel -->
        <section class="about prevention_bloc" id="about">
            <div class="container">                                
                <div class="row">
                    <div class="col-md-6 about_user wow animate__animated animate__lightSpeedInRight">
                        <h3 class="about_experience">PRÉVENTION & Hygiène</h3>
                        <img src="img/line.png" alt="Divider" class="divider">                        
                    </div>
                    <div class="col-md-6 user_img service_img wow animate__animated animate__lightSpeedInLeft">                                               
                        <!-- <img src="img/photo.png" class="presta_user_profile" alt="Docteur Tatai Naouel"> -->
                    </div> 
                </div>                
                <div class="bottom_line-img presta_bloc wow animate__animated animate__rubberBand" id="btm_line"> 
                    <button id="learnmore">
                        <img src="img/learnmore.png" alt="learn more button">
                        en savoir plus
                    </button>                   
                    <div class="services" id="service">
                        <h3>Services Offerts</h3>
                        <ul>
                            <li>Exament et Néttoyage</li>
                            <li>Restauration (Plombage)</li>
                            <li>Traitement de Canal</li>
                            <li>Extraction des Dents</li>
                            <li>Scellant des Puits et Fissures</li>
                            <li>Bruxisme et Plaque Occlusale</li>
                        </ul>
                    </div>
                </div>

                <!-- Prestation Description -->
                <div id="desc" class="presta_description">
                    <p>
                        Il est démontré que des mesures préventives permettent de diminuer 
                        le risque de développer des maladies parodontales qui mèneraient à 
                        des traitements plus importants. Concernant la prévention et l’hygiène 
                        dentaire, il sera question des trois thèmes suivants:              

                        <ul class="ml-5">
                            <li>Le brossage des dents</li>
                            <li>Les outils indispensables pour une hygiène complète</li>
                            <li>La mauvaise haleine et l’hygiène buccodentaire</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="left_img_container">
                <img src="img/left_img_1.png" class="left_img " alt="left Image Cover">                    
            </div>
        </section>

        <section class="about parodontie-bloc" id="about">
            <div class="container">                                
                <div class="row">
                    <div class="col-md-6 user_img service_img wow animate__animated animate__lightSpeedInLeft">                                               
                        <!-- <img src="img/photo.png" class="presta_user_profile" alt="Docteur Tatai Naouel"> -->
                    </div>

                    <div class="col-md-6 about_user wow animate__animated animate__lightSpeedInRight">
                        <h3 class="about_experience">PARODONTIE ET <br> MALADIE DES GENSIVES</h3>
                        <img src="img/line.png" alt="Divider" class="divider">                        
                    </div>                     
                </div>
                <div class="right_img_container">
                    <img src="img/left_img_1.png" class="right_img " alt="Right Image Cover">                    
                </div>
                <div class="bottom_line-img presta_bloc wow animate__animated animate__rubberBand" id="btm_line"> 
                    <button id="learnmore-2">
                        <img src="img/learnmore.png" alt="learn more button">
                        en savoir plus
                    </button>                   
                    <div class="services" id="service-2">
                        <h3>Services Offerts</h3>
                        <ul>
                            <li>Greffes des gensives</li>
                            <li>Traitement de parodontie</li>                            
                        </ul>
                    </div>
                </div>

                <!-- Prestation Description -->
                <div id="desc-2" class="presta_description">
                    <p>
                        L’implantologie est la branche de la dentisterie qui se consacre aux implants dentaires. 
                        Un implant dentaire agit comme une racine artificielle d’une dent, car il est inséré dans 
                        l’os de la mâchoire, soit le maxillaire ou la mandibule. Il a très souvent la forme d’une 
                        vis et est composé de titane ou d’un alliage de titane.
                    </p>
                </div>
            </div>
        </section>

        <section class="about prevention_bloc implants" id="about">
            <div class="container">                                
                <div class="row">
                    <div class="col-md-6 about_user wow animate__animated animate__lightSpeedInRight">
                        <h3 class="about_experience">IMPLANTS DENTAIRES</h3>
                        <img src="img/line.png" alt="Divider" class="divider">                        
                    </div>
                    <div class="col-md-6 user_img service_img wow animate__animated animate__lightSpeedInLeft">                                               
                        <!-- <img src="img/photo.png" class="presta_user_profile" alt="Docteur Tatai Naouel"> -->
                    </div> 
                </div>
                <div class="left_img_container">
                    <img src="img/left_img_1.png" class="left_img " alt="left Image Cover">                    
                </div>
                <div class="bottom_line-img presta_bloc wow animate__animated animate__rubberBand" id="btm_line"> 
                    <button id="learnmore-3">
                        <img src="img/learnmore.png" alt="learn more button">
                        en savoir plus
                    </button>                   
                    <div class="services" id="service-3">
                        <h3>Services Offerts</h3>
                        <ul>
                            <li>Protheses sur implants</li>
                            <li>Ponts sur implants</li>
                            <li>Couronne sur implants</li>                            
                        </ul>
                    </div>
                </div>

                <!-- Prestation Description -->
                <div id="desc-3" class="presta_description">
                    <p>
                        Il est démontré que des mesures préventives permettent de diminuer 
                        le risque de développer des maladies parodontales qui mèneraient à 
                        des traitements plus importants. Concernant la prévention et l’hygiène 
                        dentaire, il sera question des trois thèmes suivants:              

                        <ul class="ml-5">
                            <li>Le brossage des dents</li>
                            <li>Les outils indispensables pour une hygiène complète</li>
                            <li>La mauvaise haleine et l’hygiène buccodentaire</li>
                        </ul>
                    </p>
                </div>
            </div>
        </section>

        <section class="about parodontie-bloc hygiene-bloc" id="about">
            <div class="container">                                
                <div class="row">
                    <div class="col-md-6 user_img service_img wow animate__animated animate__lightSpeedInLeft">                                               
                        <!-- <img src="img/photo.png" class="presta_user_profile" alt="Docteur Tatai Naouel"> -->
                    </div>

                    <div class="col-md-6 about_user wow animate__animated animate__lightSpeedInRight">
                        <h3 class="about_experience">PREVENTIONS & HYGIENE</h3>
                        <img src="img/line.png" alt="Divider" class="divider">                        
                    </div>                     
                </div>
                <div class="right_img_container">
                    <img src="img/left_img_1.png" class="right_img " alt="right Image Cover">                    
                </div>
                <div class="bottom_line-img presta_bloc wow animate__animated animate__rubberBand" id="btm_line"> 
                    <button id="learnmore-4">
                        <img src="img/learnmore.png" alt="learn more button">en savoir plus
                    </button>                   
                    <div class="services" id="service-4">
                        <h3>Services Offerts</h3>
                        <ul>
                            <li>Exament et Néttoyage</li>
                            <li>Restauration (Plombage)</li>
                            <li>Traitement de Canal</li>
                            <li>Extraction des Dents</li>
                            <li>Scellant des Puits et Fissures</li>
                            <li>Bruxisme et Plaque Occlusale</li>
                        </ul>
                    </div>
                </div>

                <!-- Prestation Description -->
                <div id="desc-4" class="presta_description">
                    <p>
                        L’implantologie est la branche de la dentisterie qui se consacre aux implants dentaires. 
                        Un implant dentaire agit comme une racine artificielle d’une dent, car il est inséré dans 
                        l’os de la mâchoire, soit le maxillaire ou la mandibule. Il a très souvent la forme d’une 
                        vis et est composé de titane ou d’un alliage de titane.
                    </p>
                </div>
            </div>
        </section>
        
        <!-- /About Section Layout: Dr Tataï Naouel -->



        <!-- Main Footer -->
        <Footer>
            <div class="footer_container">
                <div class="items_bloc">
                    <img src="img/femme.png" alt="femme">
                </div>
                <div class="items_bloc bg_color text-center">
                    <img src="img/logo-tatai-naouel.png" alt="logo">
                    <h3><img src="img/marker.png" alt=""> Emplacement</h3>
                    <p>
                        Rue habib chatti, résidence yamama,bloc A,appt 3.Manar 1 <br>
                        شارع حبيب الشطي إقامة اليمامة ،مدرج A ,شقة 3،الطابق السفلي،المنار 1 ,تونس. 2092 
                    </p>
                    <div class="disp_inline">
                        <div>
                            <img src="img/phone-fix.png" alt="">
                            +216 71 873 678
                        </div>
                        <div>
                            <img src="img/phone-call.png" alt="">
                            +216 20 418 333
                        </div>
                    </div>
                </div>
                <div class="items_bloc">
                    <img src="img/femme_2.png" alt="femme">
                </div>
                <div class="items_bloc bg_color text-center">
                    <h3 class="pb-4">Horraire</h3>
                    <ul class="">
                        <li>
                            <a href="#">Lundi 10h à 19h</a> 
                        </li>
                        <li>
                            <a href="#">Mardi 8h à 17h</a>
                        </li>
                        <li>
                            <a href="#">Mercredi 8h àn 17h</a>
                        </li>
                        <li>
                            <a href="#">Jeudi 8h à 17h</a>
                        </li>
                    </ul>
                </div>
                <div class="items_bloc">
                    <img src="img/nt-c.png" alt="cabinet">
                </div>
                <div class="items_bloc bg_color text-center">
                    <h3 class="pb-4">Liens Rapides</h3>
                    <ul class=" footer_nav">
                        <li>
                            <a href="#cabinet">Cabinet</a> 
                        </li>
                        <li>
                            <a href="#prestations">Prestations</a>
                        </li>
                        <li>
                            <a href="#worked_cases">Cas traités</a>
                        </li>
                        <li>
                            <a href="#">Prise de rendez-vous</a>
                        </li>
                    </ul>
                </div>
            </div>
        </Footer>
        <!-- /Main Footer -->
    </div>

    <!-- Jquery, Bootstrap, Popper -->       
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" ></script>    
    <script src="js/jquery.event.move.js"></script>
    <script src="js/jquery.twentytwenty.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function(){
            $("#learnmore").click(function(){
                
                $("#service").slideDown();
                $("#desc").slideDown("slow"); 
                $("#learnmore").hide();  
                
                $("#service-2").slideUp();
                $("#desc-2").fadeOut("slow");
                $("#learnmore-2").show();
            });

            $("#learnmore-2").click(function(){
                
                $("#service-2").slideDown();
                $("#desc-2").slideDown("slow"); 
                $("#learnmore-2").hide();
                
                $("#service").slideUp();
                $("#desc").fadeOut("slow");
                $("#learnmore").show();
            });

            $("#learnmore-3").click(function(){
                
                $("#service-3").slideDown();
                $("#desc-3").slideDown("slow");
                $("#learnmore-3").hide(); 
                
                $("#service-2").slideUp();
                $("#desc-2").fadeOut("slow");
                $("#learnmore-2").show();
            });

            $("#learnmore-4").click(function(){
                
                $("#service-4").slideToggle();
                $("#desc-4").slideToggle(); 
                // $("#learnmore-4").hide();
                
                $("#service-3").slideUp();
                $("#desc-3").fadeOut("slow");
                $("#learnmore-3").show();
            });
        });
    </script>
    <script src="js/main.js"></script>
    
</body>
</html>