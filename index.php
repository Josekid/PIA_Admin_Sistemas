<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    !<!--BOX ICONS-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link  rel="icon"   href="assets/img/favicon-16x16.png" type="image/png" />


    <!--CSS-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Petcoop | Articulos para tus mascotas</title>
</head>
<body>

    <!--HEADER-->
    <header class="l-header ">
        <nav class="nav bd-grid">
            <div>
                <a href="#home" class="nav__logo">Petcoop</a>
            </div>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#new" class="nav__link">Catalogo</a></li>
                    <li class="nav__item"><a href="#subs" class="nav__link">Contacto</a></li>
                   
                   
                </ul>
            </div>
            <div>
                <i class='bx bx-menu nav__toggle' id="nav-toggle"></i>
            </div>
        </nav>

    </header>

   

    <main class="l-main">
        
        <!--HOME-->
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <div class="home__data">
                    <h1 class="home__title">ARTICULOS <br><span>PARA LOS AMIGOS LEALES</span></h1>
                    <a href="#new" class="button">Catalogo</a>
                </div>
                <img src="assets/img/perrocool1.png" alt="" class="home__img">
            </div>
        </section>

        <!--Collection-->
        <section class="collection section">
            <div class="collection__container bd-grid">
                <div class="collection__box">
                    <img src="assets/img/perro1.png" alt="" class="collection__img">

                    <div class="collection__data">
                        <h2 class="collection__title"><span class="collection_subtitle"></span><br>Para los pequeñines</h2>
                        
                    </div>
                </div>
                <div class="collection__box">
                    

                    <div class="collection__data">
                        <h2 class="collection__title"><span class="collection_subtitle"></span><br>Para las mas divas</h2>
                        
                        <img src="assets/img/perrocool2.png" alt="" class="collection__img">

                    </div>
                </div>
            </div>
        </section>

        
            <!--Productos-->

            <section class="new__section" id="new">
                <h2 class="section-title">Catalogo de productos</h2>
                <p class="section-title">Este es nuestro catalogo de productos, puedes ver los productos que tenemos y si alguno te interesa mandanos un mensaje en la sección de contacto y especifica que producto fue el que te llamo la atención, nosotros te atenderemos.</p>
                        
                

                <div class="new__container bd-grid">
                    <div class="new__box" >
                        <img src="assets/img/cama.jfif" id ="2" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#subs" class="button">Cama para perro</a>
                        </div>
                    </div>
                    <div class="new__box">
                        <img src="assets/img/ropa1.jfif" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#subs" class="button">Atuendo para perras</a>
                        </div>
                    </div>
                    <div class="new__box">
                        <img src="assets/img/ropa2.jfif" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#subs" class="button">Disfras para perro</a>
                        </div>
                    </div>
                    <div class="new__box">
                        <img src="assets/img/perchero.jfif" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#subs" class="button">Perchero unisex</a>
                        </div>
                    </div>
                    <div class="new__box">
                        <img src="assets/img/guante.jfif" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#subs" class="button">Guante para retirar pelo</a>
                        </div>
                    </div>
                    <div class="new__box">
                        <img src="assets/img/collar1.jfif" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#subs" class="button">Collares elegantes</a>
                        </div>
                    </div>
                     <div class="new__box">
                        <img src="assets/img/bolsa2.jfif" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#subs" class="button">Bolsa para viaje elegante</a>
                        </div>
                    </div>
                     <div class="new__box">
                        <img src="assets/img/bolsa.jfif" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#subs" class="button">Bolsa para viaje casual</a>
                        </div>
                    </div>
                     <div class="new__box">
                        <img src="assets/img/ropa4.jfif" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#subs" class="button">Sueter para perro</a>
                        </div>
                    </div>
                     <div class="new__box">
                        <img src="assets/img/correa2.jfif" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#subs" class="button">Correas de colores</a>
                        </div>
                    </div>
                     <div class="new__box">
                        <img src="assets/img/ropa3.jfif" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#subs" class="button">Sueter para perra</a>
                        </div>
                    </div>
                     <div class="new__box">
                        <img src="assets/img/collar2.jfif" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#subs" class="button">Accesorios para collares</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!--Formulario Contacto-->
        <section class="newsletter" id="subs">
            <div class="newsletter__container bd-grid">
                <div class="newsletter__susbire">
                    <h2 class="section__title">Contactanos</h2>
                    <p class="newsletter__description">Ponte en contacto con nosotros para realizar la compra o bien marcanos a nuetsro numero telefonico o mandanos un mensaje por whatspp!!</p>
                    <form  method="post" class="newsletter__form">
                        <input type="text" class="newsletter__input"  name="email" placeholder="Ingresa tu email" require="">
                        <br>
                        <br>
                        <textarea name="mensaje"  cols="30" rows="10" " placeholder="Escribe aqui el prodcto por el que estas interesad@ o bien si tienes alguna duda de una duda"></textarea>
                        <br>
                        <input type="submit" name="Enviar" class="button">
                        
                    </form>
                    <br>
                        <p class="newsletter__description">Numero de telefono!</p>
                        <p class="newsletter__description"> 📱 +52 81 8656 0802</p>
                    
                </div>
            </div>
        </section>
    </main>
    


    <!--FOOTER-->
    <footer class="footer__section">
        <div class="footer__container bd-grid">
         
            <div class="footer_box">
                <h3 class="footer__title">Explore</h3>
                <li><a href="#home" class="footer__link">Home</a></li>

                <li><a href="#new" class="footer__link">Productos</a></li>
                <li><a href="#subs" class="footer__link">Contactanos</a></li>
            </div>
           
        </div>
        <p class="footer__copy">&#169; 2020 copyright all rigth reserved</p>
    </footer>


    <!--MAIN JS-->
    <script src="assets/js/main.js"></script>

    <!--Php -->

    <?php
    include("sendEmail.php");
    ?>
</body>
</html>