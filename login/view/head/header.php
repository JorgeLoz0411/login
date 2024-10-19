<?php 
    require_once("c://xampp/htdocs/login/view/head/head.php");
    session_start();
?>

<body>
    <div class="container">
        <div class="row">
            <div class="head">
              <div class="logo">
                  <a href="#"><img src="/login/asset/img/Amarok.jpg" alt="Logo"></a>
              </div>
                      
                      <div class="fondo_menu">
                        <div class="container-fluid">
                          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">Página principal</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                              <?php if(empty($_SESSION['usuario'])): ?>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#somos">¿Quienes Somos?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#productos">Productos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#servicios">Servicios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#contacto">Contactanos</a>
                                        </li>
                                    </ul>
                                        <a href="/login/view/home/login.php"class="boton">Iniciar Sesion</a>
                                        <a href="/login/view/home/signup.php"class="boton">Registrarse</a>
                                </div>
                              
                                    <?php else: ?>
                                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                      <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="#">1</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="#">2</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="#">3</a>
                                      </li>
                                    </ul>
                                    <a href="/login/view/home/logout.php"class="boton">Cerrar Sesion</a>
                                  </div>
                                <?php endif ?>
                            </div>
                          </nav>
                        </div>
                      </div>
                      <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-dark bg-primary px-3 mb-3"></nav>
        
                <header class="header">
                  <div class="content">
                    <h1 class="fw-bold">Bienvenidos a Amarok!</h1>
                    <br>
                    <br>
                  <div class="border p-3"> En Inversiones Tecnológicas Amarok, nos especializamos en la venta y distribución de tecnología de vanguardia, sistemas avanzados de rastreo satelital y desarrollo de software a medida. Nuestro compromiso es ofrecer soluciones innovadoras y de alta calidad para satisfacer las necesidades tecnológicas de nuestros clientes. Con un enfoque en la excelencia y la satisfacción del cliente, nos esforzamos por ser su socio de confianza en el mundo de la tecnología. Descubra cómo podemos ayudarle a impulsar su negocio con nuestras soluciones tecnológicas líderes en el mercado. <code></code> 
                </header>
            </div>      
        </div>
    

        <section id="somos" class="content about py-5 bg-white d-flex align-items-center justify-content-center" style="background-image: url(/login/asset/img/fondo1.jpg); background-size: cover; background-position: center; color: white; height: 100vh; max-width: 100%; margin: auto;">
            <div class="container text-center">
                <article>
                    <div class="box-content">
                        <h2 class="title text-center fw-bold mb-4">¿Quiénes Somos?</h2>
                        <p class="border p-3">En Inversiones Tecnológicas Amarok, nos especializamos en la venta y distribución de tecnología de vanguardia, sistemas avanzados de rastreo satelital y desarrollo de software a medida. Nuestro compromiso es ofrecer soluciones innovadoras y de alta calidad para satisfacer las necesidades tecnológicas de nuestros clientes.</p>
                        <hr>
                        <h2 class="title mision text-center fw-bold mb-4">Nuestra Misión</h2>
                        <p class="border p-3">Nos dedicamos a proporcionar tecnologías de última generación que impulsen la eficiencia y el crecimiento de su negocio. Nuestro objetivo es ser su socio de confianza en el mundo de la tecnología, brindando herramientas y servicios que optimicen sus operaciones y potencien su éxito.</p>
                    </div>
                        <hr>
                    <div class="text-center mt-5">
                        <a href="/login/index.php" class="btn btn-primary">Regresar a la Página Principal</a>
                </article>
            </div>
        </section>
        
        <section id="productos" class="content about py-5 bg-white d-flex align-items-center justify-content-center" style="background-image: url(/login/asset/img/fondo.avif); background-size: cover; background-position: center; color: white; height: 100vh; max-width: 100%; margin: auto;">
            <div class="container my-5">
                <h2 class="fw-bold text-center">Nuestros Productos</h2>
                <p class="border p-3">En nuestra empresa, nos enorgullecemos de ofrecer los mejores productos del mercado. Contamos con una amplia gama de soluciones, que van desde la más avanzada tecnología de rastreo satelital hasta herramientas innovadoras de mercadotecnia. Nuestro compromiso es brindarte calidad y eficiencia en cada uno de nuestros productos para satisfacer tus necesidades y superar tus expectativas.</p>
            
                <!-- Este div es para crear secciones individuales para mostrar los productos ofertados por la compañia -->
                <div class="row justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/login/asset/img/Seguridad.jpg" style="width: 250px; height: 200px;" alt="Imagen con tamaño personalizado">
                        <div class="card-body">
                        <h5 class="card-title">SEGURIDAD</h5>
                        <p class="border p-3">Text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img src="/login/asset/img/Electronica.jpg" style="width: 250px; height: 200px;" alt="Imagen con tamaño personalizado">
                        <div class="card-body">
                        <h5 class="card-title">ELECTRONICA</h5>
                        <p class="border p-3">Text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img src="/login/asset/img/Software.png" style="width: 250px; height: 200px;" alt="Imagen con tamaño personalizado">
                        <div class="card-body">
                        <h5 class="card-title">SOFTWARE</h5>
                        <p class="border p-3">Text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="servicios" class="content about py-5 bg-white d-flex align-items-center justify-content-center" style="background-image: url(/login/asset/img/fondo.avif); background-size: cover; background-position: center; color: white; height: 110vh; max-width: 100%; margin: auto;">
            <div class="container">
                <article class="text-center">
                    <h2 class="title mb-4">Nuestros Servicios</h2>
                    <hr>
                    <p class="border p-3">En Amarok, ofrecemos soluciones integrales de rastreo satelital, venta de equipos de cómputo de alta gama, cámaras de seguridad y complementos gaming. Nuestro compromiso es brindar tecnología de vanguardia para satisfacer todas tus necesidades.</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <i class="fa-solid fa-laptop fa-2x mb-3" alt="Equipos de Cómputo"></i>
                                    <h3 class="title-card">Equipos de Computo</h3>
                                    <hr>
                                    <p class="border p-3"> La mejor oferta de laptops y equipos de mesa a tu disposición.</p>
                                    <hr>
                                    <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <i class="fa-solid fa-camera fa-2x mb-3" alt="Cámaras para tu Negocio"></i>
                                    <h3 class="title-card">Cámaras para tu Negocio</h3>
                                    <hr>
                                    <p class="border p-3"> Protege tus instalaciones con nuestras cámaras de última generación.</p>
                                    <hr>
                                    <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <i class="fa-solid fa-shield-halved fa-2x mb-3" alt="Seguridad 24/7"></i>
                                    <h3 class="title-card">Seguridad 24/7</h3>
                                    <hr>
                                    <p class="border p-3"> Protege tus instalaciones con nuestras cámaras de seguridad de última generación.</p>
                                    <hr>
                                    <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <i class="fa-solid fa-location-dot fa-2x mb-3" alt="Rastreo Satelital"></i>
                                    <h3 class="title-card">Rastreo Satelital</h3>
                                    <hr>
                                    <p class="border p-3"> Monitorea tus activos en tiempo real con nuestras avanzadas soluciones de rastreo satelital.</p>
                                    <hr>
                                    <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        
        <section id="contacto" class="content about py-5 bg-white d-flex align-items-center justify-content-center" style="background-image: url(/login/asset/img/fondo.avif); background-size: cover; background-position: center; color: white; height: 110vh; max-width: 100%; margin: auto;">
            <div class="container">
                <article class="text-center">
                    <h2 class="title mb-4">Contacto</h2>
                    <p class="border p-3">En Amarok, estamos aquí para ayudarte. Si tienes alguna pregunta o necesitas más información sobre nuestros servicios, no dudes en ponerte en contacto con nosotros.</p>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.632456789!2d-73.1215182!3d7.1241079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6815631bfb2705%3A0x97884b83331c8918!2sEdificio%20Origami!5e0!3m2!1ses!2sco!4v1692350400000!5m2!1ses!2sco" width="80%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                        <form class="contact-form p-4 border rounded bg-secundary shadow">
                                <div class="form-group mb-2">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Juan Pérez" required aria-label="Nombre">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="correo" placeholder="juan.perez@example.com" required aria-label="Email">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="mensaje" class="form-label">Mensaje:</label>
                                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..." required aria-label="Mensaje"></textarea>
                                </div>
                                <div class="mb-2 form-check">
                                    <input type="checkbox" class="form-check-input" id="acepto" required aria-label="Acepto la política de privacidad">
                                    <label class="form-check-label" for="acepto">Acepto la política de privacidad</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
                            </form>
                                <div class="text-center mt-3">
                                    <a href="/login/index.php" class="btn btn-primary">Regresar a la Página Principal</a>
                                </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>



        <footer class="footer fw-bold">
            © INVERSIONES TECNOLOGICAS AMAROK
        </footer>
      </div>
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


  
