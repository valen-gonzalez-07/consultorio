<?php 
/**
 * Template Name: Lucas
 */
get_header();
?>

<h1>template lucas</h1>

<section class="fondo">
    <div class="faq">
        <div class="faq-container-text">
            <h4 class="h4-faq">Preguntas frecuentes de pacientes</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus delectus sapiente, atque sit sunt aliquam dicta. Maiores id odit optio officiis! Itaque sapiente commodi et sunt voluptatem a ad ab.</p>
        </div>
        <div class="faq-item-container">
            <div class="faq-item">
            <button class="faq-pregunta">
                ¿Cuándo debería consultar a un urólogo?
                <span class="flecha"><img src="<?php echo get_template_directory_uri(); ?>/templates/imgs/flecha.png" alt="flecha-apetura/ciere" class= "img-flecha"></span>
            </button>
            <div class="faq-respuesta">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi consequatur voluptas, cum rerum ab accusamus vitae eum eos labore ea suscipit eaque saepe aperiam repellendus atque eveniet. Atque, cupiditate minima?</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-pregunta">
            ¿Cómo es una consulta urológica?
            <span class="flecha"><img src="<?php echo get_template_directory_uri(); ?>/templates/imgs/flecha.png" alt="flecha-apetura/ciere" class= "img-flecha"></span>
            </button>
            <div class="faq-respuesta">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat facere magnam dolorem quod, repellendus dolorum non, ipsum, excepturi exercitationem tempore velit animi omnis? Incidunt excepturi in quidem amet sit quibusdam.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-pregunta">
            ¿Es normal sentir dolor al orinar?
            <span class="flecha"><img src="<?php echo get_template_directory_uri(); ?>/templates/imgs/flecha.png" alt="flecha-apetura/ciere" class= "img-flecha"></span>
            </button>
            <div class="faq-respuesta">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, qui expedita dolores nobis laboriosam porro nesciunt eveniet, inventore illum modi, molestiae tenetur. Perspiciatis consectetur laudantium cum voluptates, sapiente temporibus asperiores.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-pregunta">
            ¿Cómo me preparo para una ecografía urológica?
            <span class="flecha"><img src="<?php echo get_template_directory_uri(); ?>/templates/imgs/flecha.png" alt="flecha-apetura/ciere" class= "img-flecha"></span>
            </button>
            <div class="faq-respuesta">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, consequatur quae. Dicta esse dignissimos voluptas est eveniet reprehenderit repudiandae obcaecati neque accusamus qui. Repellat nam molestias quaerat quae perspiciatis odio.</p>
            </div>
        </div>
        </div>
    </div>
</section>

<section class= "form-container">
    <div class= "iframe-div">
        <iframe class= "form-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.0148564955557!2d-60.57668132341929!3d-33.88927122012084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b9b55625b1eeef%3A0xab6a06009fb53537!2sLagos%20885%2C%20Pergamino%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1758048950796!5m2!1ses!2sar" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class= "form-div">
        <form action="#" method="post" class="form">
            <h4 class="h4-form">Escribime</h4>
            <input class= "form-input" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido"><br><br>

            <input class= "form-input" type="email" id="email" name="email" placeholder="Mail"><br><br>

            <input class= "form-input" type="text" id="asunto" name="asunto" placeholder="Asunto"><br><br>

            <textarea id="mensaje" name="mensaje" rows="6" placeholder="Escribí tu mensaje acá" class= "textarea"></textarea><br><br>

            <button class="form-button" type="submit">Enviar</button>
        </form>
    </div>
</section>

<footer>
    <div class= "div-footer-container">
        <div class="div-info-container">
            <h4 class= "h4-contact-footer">
                Contácto
            </h4>
            <div>
                <ul>
                    <li class= "footer-li-styles">
                        <img src="<?php echo get_template_directory_uri(); ?>/templates/imgs/email.png" alt="icono de email" class= "img-footer">
                        <p class= "p-footer">
                            example@gmail.com
                        </p>
                    </li>
                    <li class= "footer-li-styles">
                        <img src="<?php echo get_template_directory_uri(); ?>/templates/imgs/location.png" alt="icono de ubicacion" class= "img-footer">
                        <p class= "p-footer">
                            Lagos 885, Pergamino, Buenos Aires
                        </p>
                    </li>
                    <li class= "footer-li-styles">
                        <img src="<?php echo get_template_directory_uri(); ?>/templates/imgs/phone.png" alt="icono de telefono" class= "img-footer">
                        <p class= "p-footer">
                            02477 44-4224
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="redes-container">
            <h4 class= "h4-redes-footer">
                Redes
            </h4>
            <div class= "div-img-redes">
                <a href="" class="a-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/templates/imgs/instagram.png" alt="icono de instagram" class= "img-footer">
                </a>
                <a href="" class="a-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/templates/imgs/facebook.png" alt="icono de facebook" class= "img-footer">
                </a>
                <a href="" class="a-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/templates/imgs/linkedin.png" alt="icono de linkedin" class= "img-footer">
                </a>
            </div>
        </div>
        <div class="turno-logo-container">
            <div class= "div-button-logo">
                <a href="" class="a-footer">
                    <button class="button-footer">
                        Sacar Turno
                    </button>
                </a>
            </div>
            <div class= "div-button-logo">
                <a href="" class="a-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/templates/imgs/doctor.png" alt="logo" class="img-logo-footer">
                </a>
            </div>
            
        </div>
    </div>
    
</footer>
<?php 
get_footer();
?>