<?php include('header.php') ?>

    <div class="container">
            <!-- <h1>Contacto</h1> -->
            <!-- <div class="login-page"> -->
                <div class="form">
                    <form action="enviar_consulta.php" method="post" >
                        <input type="text" name="nombre" placeholder="Nombre" class="contacto_input">
                        <input type="text" name="apellido" placeholder="Apellido" class="contacto_input">
                        <input type="email" name="correo" placeholder="Correo electrónico">
                        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Escribí tu mensaje" class="mensaje"></textarea>
                        <input type="submit" value="Enviar Consulta"  class="contacto_btn">
                    </form>
                    <?php
                         if (isset($_GET['e'])){
                         echo "<h4> Mensaje enviado con éxito </h4>";
                         }
                     ?>
                </div>
  
            <!-- </div> -->
    </div>
   

<?php include('footer.php') ?>