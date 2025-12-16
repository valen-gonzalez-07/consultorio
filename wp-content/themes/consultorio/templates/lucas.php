

<section class="fondo">
    <div class="faq">
        <div class="faq-container-text">
            <h4 class="h4-faq">Preguntas frecuentes de pacientes</h4>
            <p>Entiendo que muchas consultas pueden generar dudas o inquietudes antes de la primera visita. Por eso, en esta sección respondo algunas de las preguntas más frecuentes para ayudarte a conocer cuándo consultar, cómo es una atención urológica y cómo prepararte para determinados estudios. Mi objetivo es acompañarte y brindarte una atención clara, profesional y personalizada.</p>
        </div>
        <div class="faq-item-container">
            <div class="faq-item">
            <button class="faq-pregunta">
                ¿Cuándo debería consultar a un urólogo?
                <span class="flecha"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flecha.png" alt="flecha-apetura/ciere" class= "img-flecha"></span>
            </button>
            <div class="faq-respuesta">
                <p>Recomiendo consultar ante la presencia de síntomas como dolor o ardor al orinar, cambios en la frecuencia urinaria, dificultad para orinar, presencia de sangre en la orina, dolor en la zona abdominal baja o genital, o cualquier molestia persistente. </p>
                <p>También considero importante realizar controles preventivos, especialmente en hombres a partir de los 45–50 años, incluso si no presentan síntomas.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-pregunta">
            ¿Cómo es una consulta urológica?
            <span class="flecha"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flecha.png" alt="flecha-apetura/ciere" class= "img-flecha"></span>
            </button>
            <div class="faq-respuesta">
            <p>La consulta comienza con una entrevista donde escucho atentamente tus síntomas, antecedentes y hábitos. Luego realizo un examen físico simple y, si es necesario, indico estudios complementarios.</p>
            <p>Se trata de una consulta habitual, profesional y totalmente confidencial, orientada tanto a la prevención como al tratamiento oportuno.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-pregunta">
            ¿Es normal sentir dolor al orinar?
            <span class="flecha"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flecha.png" alt="flecha-apetura/ciere" class= "img-flecha"></span>
            </button>
            <div class="faq-respuesta">
            <p>No, el dolor o ardor al orinar no es normal y suele estar asociado a infecciones urinarias, inflamaciones u otros trastornos del sistema urinario. Ante este síntoma, recomiendo evitar la automedicación y consultar para poder realizar un diagnóstico preciso.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-pregunta">
            ¿Cómo me preparo para una ecografía urológica?
            <span class="flecha"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flecha.png" alt="flecha-apetura/ciere" class= "img-flecha"></span>
            </button>
            <div class="faq-respuesta">
            <p>La preparación depende del tipo de ecografía que se vaya a realizar. En muchos casos es necesario concurrir con la vejiga llena, por lo que suelo indicar beber agua antes del estudio y no orinar.</p>
            <p>De todas formas, siempre brindo las indicaciones específicas con anticipación para asegurar un estudio correcto.</p>
            </div>
        </div>
        </div>
    </div>
</section>

<section class= "form-container" id="contacto">
    <div class= "iframe-div">
        <iframe class= "form-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.0148564955557!2d-60.57668132341929!3d-33.88927122012084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b9b55625b1eeef%3A0xab6a06009fb53537!2sLagos%20885%2C%20Pergamino%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1758048950796!5m2!1ses!2sar" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="form-div">
            <h4 class="h4-form">Escribime</h4>
            <form method="post" class="form">
                <?php wp_nonce_field('form_contacto', 'form_contacto_nonce'); ?>
                
                <div class="form-group">
                    <label for="nombre" class="sr-only">Nombre y Apellido</label>
                    <input 
                        class="form-input"
                        type="text"
                        id="nombre"
                        name="nombre"
                        placeholder="Nombre y Apellido"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input 
                        class="form-input"
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Mail"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="asunto" class="sr-only">Asunto</label>
                    <input 
                        class="form-input"
                        type="text"
                        id="asunto"
                        name="asunto"
                        placeholder="Asunto"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="mensaje" class="sr-only">Mensaje</label>
                    <textarea
                        id="mensaje"
                        name="mensaje"
                        rows="6"
                        placeholder="Escribí tu mensaje acá"
                        class="textarea"
                        required
                    ></textarea>
                </div>

                <button class="form-button" type="submit">
                    Enviar
                </button>

            </form>
        </div>
</section>
