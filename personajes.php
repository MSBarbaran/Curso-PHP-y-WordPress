<?php include('header.php') ?>
        <!-- tienda -->
        <section class='personajes_contenedor'>
            <h1>Destinos Turísticos</h1>

            <div class='personajes_botonera'>
                <ul class='personajes_botonera'>
                    <li> <a href="personajes.php?personaje=1">EL CAIRO</a></li>
                    <li> <a href="personajes.php?personaje=2">AGRA</a></li>
                    <li> <a href="personajes.php?personaje=3">RIO DE JANEIRO</a></li>
                </ul>
            </div>
        </section>

<!-- Estructuras de control -->
    <?php
        // abre el if y uso el parametro GET
        if(isset($_GET['personaje'])){
            switch ($_GET['personaje']){
                case '1' :
                    $personaje = 'Pirámides de Giza';
                    $descripcion = 'Las pirámides, ubicadas en la meseta de Giza, a 18 kilómetros de El Cairo, no solo son los monumentos más importantes de Egipto, sino también los más antiguos del mundo. Son estructuras funerarias construidas bajo las órdenes de faraones de diferentes dinastías. Las tres pirámides más importantes
                    Las tres pirámides más importantes de Giza son Keops, Khafre y Menkaure. Además de estas, hay muchas otras pirámides pequeñas. visita las piramides
        
                    Keops
                    También conocida como la Gran Pirámide de Giza, Keops (Jufú) es la pirámide más grande, así como la más importante. Tiene una altura de 10 metros y descansa sobre una tribuna gigante de 230 metros de altura (casi 1 km de circunferencia). 
                    Kefrén
                    La pirámide de Kefrén es la segunda pirámide más grande de Egipto después de Keops. Actualmente es la única pirámide que aún conserva una pequeña porción de la antigua piedra caliza blanca que cubre la parte superior. 
                    Micerinos
                    La pirámide de Micerinos es la más pequeña del grupo, pero no  menos interesante. Tiene una altura de 66 metros y su base tiene un poco más de 100 metros de lado.
                    Si quieres visitar las pirámides de El Cairo, puedes reservar a través de nuestro formulario de contacto, cabe recordar que esta actividad No es apta para personas claustrofóbicas';
                    $img ='./imagenes/El Cairo.gif';
                break;
                case '2' :
                    $personaje = 'Taj Mahal';
                    $descripcion = 'Construido hace 350 años y designado como Patrimonio de la Humanidad por la UNESCO en 1983, el Taj Mahal es ahora el más famoso de estos monumentos clasificados, y esto se puede atribuir al aura romántica que rodea su historia, pero eso no restan valor al hecho de que para muchos es el lugar más hermoso hecho por el hombre. 
                    Taj Mahal Entrada Consideraciones y precios 
                    El Taj Mahal tiene 3 puntos de acceso: 
                    Entrada sur (Sirhi Darwaza): Esta es la entrada menos popular, ya que está en la red de carriles de Agra, aunque es una buena opción si hay una cola en la entrada oeste. 
                    Puerta Este (Puerta de Fatehabad): Esta puerta da a Fatehabad y es la más alejada del centro de Agra. La taquilla está a 750 metros de la entrada al Taj Mahal en el llamado "Shilpgram". Además, esta es la entrada normal en las noches de luna llena. 
                    Entrada Oeste (Puerta de Fatehpuri): Esta es la entrada principal al Taj Mahal y está frente al centro de la ciudad de Agra. Podíamos llegar andando si estábamos cerca (como hicimos nosotros) o  en tuk-tuk desde cualquier punto de la ciudad. 
                    Una vez en la puerta, debe ir a la taquilla y pagar 750 rupias (los precios del Taj Mahal están vigentes al momento de escribir este artículo), lo que le permitirá ingresar a esta maravilla imperdible e inolvidable. 
                    Si desea saber más sobre nuestras visitas guiadas, puede enviarnos un mensaje a través de nuestro formulario de contacto.
                   ';
                    $img ='./imagenes/Agra.gif';
                break;
                case '3' :
                    $personaje = 'Pan de Azúcar';
                    $descripcion = 'En Río de Janeiro, Pao de Açúcar es una montaña que se eleva casi 400 metros sobre la Bahía de Guanabara.
                    Situado cerca de Urka, el dulce nombre deriva de la forma en que los antiguos comerciantes del siglo XVI solían apilar la caña de azúcar para el transporte. Junto con el Cristo Redentor, esta montaña es el símbolo más importante de Río de Janeiro.
                    Puede hacerlo escalando -para los valientes- o montando en el viejo teleférico bondinho, para los que no están en forma (si eliges la segunda opción, es mejor ir temprano, porque hay largas colas durante el día) . Teleférico Pan de Azúcar: Horarios y Precios 
                    El teleférico divide el recorrido en varias partes: la primera parte va desde la playa de Vermehl hasta el Morro de Urca, con el Cristo Redentor de fondo. Desde aquí volvimos a tomar el teleférico, que nos llevó hasta Sugar Peak. Su vista es impresionante.
                    Si desea saber más sobre nuestras visitas guiadas, puede enviarnos un mensaje a través de nuestro formulario de contacto.';
                    $img ='./imagenes/Rio de Janeiro.gif';
                break;
            }
       
    ?>
    <div class='personaje_descripcion'>
        <h2> <?php echo $personaje; ?></h2>
        <div class='contenedor_personajes'>
            <p class='contenedor_parrafo'> <?php echo $descripcion; ?></p>
            <div class='contenedor_img'> 
                <img src="<?php echo $img ?>" alt="">
            </div> 
        </div>
    </div>

    <?php  } ?>
    <!-- cierra el if -dentro del if agrego el div para mostrar la informacion de los personajes, es por eso que el "}" esta separado    -->
<?php include('footer.php') ?>