<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez Nous</title>

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

    <!-- Some Style -->
    <style>
        .form-error{
            color : red;
            font-family: Helvetica, sans-serif;
            font-size: 17px
        }

        .form-success{
            color: green;
            font-family: Helvetica, sans-serif;
            font-size: 17px
        }

        .input-error{
            box-shadow: 0 0 5px red;
        }
    </style>
</head>
<body>
    <!-- Main Wrapper -->
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
                                <li class="menu_links active"><a href="index.php" class="menu_items">Accueil</a></li>                                
                                <li class="menu_links"><a href="prestations.php" class="menu_items">Prestations</a></li>                                
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
        <section class="showcase_blog contact_sh">
            <div class="container">
                <h1>
                   Contact
                </h1>
            </div>
        </section>
        <!-- /Showcase Section -->


        <!-- Form Section -->
        <section class="contactus">
            <div class="cabinet_head wow animate__animated animate__fadeIn mb-5 pb-5">
                <h2 class="cabinet_title">Dr Tataï Naouel</h2>
                <img src="img/line.png" alt="Divider">
                <p class="lead pt-2">Docteur expérimenté a l'écoute de vos besoins.</p>
            </div>
            <div class="container"> 
                <div class="adress">
                    <div class="address_intro">
                        <div class="intro">
                            <h1>Contacter Notre Cabinet Dentaire</h1>
                            <h3>4 Moyens à votre Disposition</h3>

                            <p>
                                Vous avez besoin d'une consultation Dentaire? 4 moyens pour <br>
                                nous contacter : Une adresse email, une telephone, les reseaux sociaux <br>
                                et Un formulaire de contact. A bientot!
                            </p>
                        </div>
                    </div>
                    <div class="address_contents">
                        <div>
                            <h3><i class="fas fa-envelope-open-text"></i> Adresse E-mail</h3>
                            <p>merveille@gmail.com</p>
                        </div>

                        <div>
                            <h3><i class="fas fa-phone-alt"></i> Téléphone</h3>
                            <p>  +216 71 873 678</p>
                            <p>  +216 20 418 333</p>
                        </div>

                        <div>
                            <h3 class="pb-5"><i class="fas fa-globe"></i>  Social Media</h3>
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>               
                <div class="form">
                    <div class="intro">
                        <h1>Formulaire de Contact</h1>
                        <h3>Faites le premier pas</h3>                        
                    </div>
                    <!-- Message Container -->
                    <div class="message_container">
                        <p class="msg_container"></p>
                    </div>
                    <!-- /Message Container -->
                    <form action="private/mail.php" method="post" id="email-form">
                        <div>
                           <input id="mail_name" type="text" name="name" placeholder="Votre Nom"> 
                        </div>
                        <div>
                            <input id="mail_email" type="email" name="email" placeholder="Votre Email"> 
                         </div>
                         <div>
                            <input id="mail_telephone" type="text" name="telephone" placeholder="Votre Télephone"> 
                         </div>
                         <div>
                            <input id="mail_company" type="text" name="company" placeholder="Votre Société"> 
                         </div>
                         <div class="full">
                            <textarea id="mail_message" name="message" cols="30" rows="10" placeholder="Votre Message"></textarea> 
                         </div>

                         <div class="full">
                             <button id="mail_submit" type="submit" name="submit">Envoyer</button>
                         </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Form Secrion -->



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
        // Form Validation With Jquery/ Ajax

        $(function(){
            $("form").click(function(event){

                event.preventDefault();

                // Getting All The inputs' Datas
                var name = $("#mail_name").val();
                var email = $("#mail_email").val();
                var telephone = $("#mail_telephone").val();
                var company = $("#mail_company").val();
                var message = $("#mail_message").val();
                var submit = $("#mail_submit").val();

                // Load Data into mail.php with Ajax
                $(".msg_container").load('private/mail.php', {

                    name : name,
                    email : email,
                    telephone : telephone,
                    company : company,
                    message : message,
                    submit : submit

                });
                
            });   
            
            // $("#email-form").on("submit", function(e){                
            //     e.preventDefault();

            //     $.ajax({
            //         url: 'private/mail.php',
            //         type: 'post',
            //         data: $("#email-form").serialize(),
            //         success: function (result) { 
            //             // response(result);
            //             alert(result);
            //          } 

            //     });
            // });
        });
    </script>


    <script src="js/main.js"></script>
</body>
</html>