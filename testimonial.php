<?php 

include_once 'layouts/header.php'; 

?>

<div class="modal fade" id="contactos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-body border-light text-white">
        <div class="modal-header bg-inverse">
          <h1 class="modal-title fs-2 fw-bold" id="exampleModalLabel">Conecta Conmigo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <h4 class="fw-bold text-center">Para mayor información sígueme en mis redes sociales </h4>
       <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2"><ion-icon name="logo-facebook"></ion-icon></a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 instagramlogo"><ion-icon name="logo-instagram"></ion-icon></a></li>
      </ul>
      <h4 class="fw-bold text-center">Contacta conmigo directamente</h4>
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="https://api.whatsapp.com/send?phone=+34611158813&text=Saludos!,%20me%20interesan%20sus%20servicios!." target="_blank" class="nav-link px-2 text-success"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
      </ul>
  </div>
</div>
</div>
</div>

<main>
    <br>
    <div class="container" data-aos="fade-up">
        <center>
            <h1 class="display-4 fw-bold">Testimonios</h1></center>
            <div class="col-lg-8 mx-auto">
              <p class="lead mb-4">Descubre cómo la videncia ha transformado la vida de mis clientes a través de sus testimonios auténticos y conmovedores. En esta sección, encontrarás una colección de experiencias personales y relatos impactantes de personas que han recurrido a mis servicios de videncia. </p>
              <p class="lead mb-4">
                  Estos testimonios revelan cómo la sabiduría y la intuición han sido fundamentales para orientarlos en momentos de incertidumbre, brindándoles claridad, guía y consuelo. Sumérgete en las historias de aquellos cuyas vidas han sido iluminadas por la videncia, y deja que sus palabras te inspiren a explorar las infinitas posibilidades que el mundo espiritual puede ofrecerte.
              </p>

              <hr>

              <div class="row">
                <div class="col-md-4">
                   <audio controls style="width: 200px; background-color: #f4f4f4; border-radius: 5px; padding: 5px;">
                    <source src="src/testimonio01.ogg" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                </div>
                <div class="col-md-4">
                   <audio controls style="width: 200px; background-color: #f4f4f4; border-radius: 5px; padding: 5px;">
                    <source src="src/testimonio02.ogg" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                </div>
                <div class="col-md-4">
                   <audio controls style="width: 200px; background-color: #f4f4f4; border-radius: 5px; padding: 5px;">
                    <source src="src/testimonio03.ogg" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-4">
                   <audio controls style="width: 200px; background-color: #f4f4f4; border-radius: 5px; padding: 5px;">
                    <source src="src/testimonio04.ogg" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                </div>
                <div class="col-md-6">
                   <audio controls style="width: 200px; background-color: #f4f4f4; border-radius: 5px; padding: 5px;">
                    <source src="src/testimonio05.ogg" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                </div>

            </div>
        </div>
    </div>

    <?php 

    include_once 'layouts/footer.php'; 

?>