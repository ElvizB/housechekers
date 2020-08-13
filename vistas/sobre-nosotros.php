<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>

<header class="header-house">
    <div class="u-content-house">
        <?php  include_once 'plantillas/menu/index.php';?>
    </div>
</header>


<section class="banner-about">
    <div class="bg-banner-about">
        <img loading="lazy" src="<?php echo RUTA_IMG?>nosotros/bg_nosotros.png" draggable="false" height="376" />
    </div>
</section>

<section class="about">
    <div class="u-content-house">
        <div class="">

        </div>
    </div>
</section>

<section class="bg-nav-list wow fadeIn" data-wow-delay="0.4s">
    <div class="u-content-house">
        <div class="grid-tab">
            <ul class="nav nav-tabs md-tabs nav_link_nosotros">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">
                        <span>nosotros</span>
                    </a>
                </li>

                <li class=" nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">
                        <span>misión</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                        aria-controls="pills-contact" aria-selected="false">
                        <span>visión</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</section>

<section class="bg-info-nosotros wow fadeIn" data-wow-delay="0.4s">
    <div class="u-content-house">
        <div class="tab-content" id="myTabContentEx">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="grid-nosotros-item">
                    <div class="descriptions-nosotros">
                        <h1>nosotros</h1>
                        <p>Simplificamos el proceso de entrega de la propiedad que has comprado. Disminuimos la
                            posibilidad que inviertas tiempo y dinero en reparaciones y correcciones de tu departamento
                            nuevo haciendo que la inmobiliaria asuma los el levantamiento de las observaciones
                            encontradas.
                        </p>
                    </div>
                </div>
            </div>
            <ldiv class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="grid-nosotros-item">
                    <div class="descriptions-nosotros">
                        <h1>misión</h1>
                        <p>
                            Somos un equipo de profesionales que busca brindar seguridad y tranquilidad al cliente en la
                            recepción de su inmueble a través de inspecciones técnicas respaldadas por el empleo de
                            tecnología.

                        </p>
                    </div>
                </div>
            </ldiv>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="grid-nosotros-item">
                    <div class="descriptions-vision">
                        <h1>visión</h1>
                        <ul class="list-vision">
                            <li>Establecer los servicios de la compañía como un sello de garantía en la entrega de
                                inmuebles.</li>
                            <li>Ser la empresa líder y referente en la inspección de calidad del inmueble previo a su
                                entrega. </li>
                            <li>Promover la estandarización de tolerancias de acabados arquitectónicos e instalaciones
                                dentro del negocio inmobiliario.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php
  include_once 'plantillas/consulta.php';
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>