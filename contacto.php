<?php include('layout/header.php')?>
        <main>
            <section class="banner">
                <div class="container">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="img/banner-1.jpg" alt=""></div>
                        <div class="item"><img src="img/banner-1.jpg" alt=""></div>
                        <div class="item"><img src="img/banner-1.jpg" alt=""></div>
                    </div>
                    <div class="title-section">
                        <h1>Contacto</h1>
                    </div>
                </div>
            </section>
            <section class="content-contacto">
                <div class="container">
                    <div class="item_contacto">
                        <div class="box-contacto">
                            <h2>Háganos sus consultas.</h2>
                            <p>
                                Estamos atentos a cualquier duda o consulta que usted tenga.
                            </p>
                            <p>
                                Sus consultas referentes a nuestros servicios, información, etc,
                                 envíelas a través de nuestro formulario de contacto o directamente 
                                 a nuestro correo <span>ventas@regalarflores.cl</span>
                            </p>
                        </div>

                        <div class="box-contacto">
                              <form action="">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nombre" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Teléfono/Celular" name="fono">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="enviar" class="enviar">
                                    </div>
                              </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php include('layout/footer.php');?>