<?php 
/**
 * Template Name: Lucas
 */
get_header();
?>

<h1>template lucas</h1>

<section class= "form-container">
    <div class= "iframe-div">
        <iframe class= "form-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52989.569681330955!2d-60.60662903851542!3d-33.89356559624096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b84aad3ef60a31%3A0x481ac3277962e9c5!2sPergamino%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1757713996827!5m2!1ses-419!2sar" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class= "form-div">
        <h2>Escribime</h2>
        <form action="#" method="post">
            <input class= "form-input" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido"><br><br>

            <input class= "form-input" type="email" id="email" name="email" placeholder="Mail"><br><br>

            <input class= "form-input" type="text" id="asunto" name="asunto" placeholder="Asunto"><br><br>

            <textarea id="mensaje" name="mensaje" rows="6" placeholder="Escribí tu mensaje acá"></textarea><br><br>

            <button class="form-button" type="submit">Enviar</button>
        </form>
    </div>
</section>

<?php 
get_footer();
?>