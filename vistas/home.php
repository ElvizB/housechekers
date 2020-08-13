<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>

<header class="header-house">
    <div class="u-content-house">
        <?php  include_once 'plantillas/menu/index.php';?>
    </div>
</header>


<section>

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
            <li data-target="#carousel-example-2" data-slide-to="3"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img loading="lazy" src="<?php echo RUTA_IMG?>home/bg_1.png" draggable="false" class="img-slider"
                        height="520" />

                </div>
                <div class="content-info-slider">
                    <div class="u-content-house">
                        <div class="content-titles-slider">
                            <h1 class="title-slider">CONOCE EL VALOR REAL <br> DE TU INVERSIÓN</h1>
                            <p class="subtitle-slider">“Inspecciona tu inmueble por menos <br>del 1% de su valor”</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="view">
                    <img loading="lazy" src="<?php echo RUTA_IMG?>home/bg_2.png" draggable="false" class="img-slider"
                        height="520" />

                </div>
                <div class="content-info-slider">
                    <div class="u-content-house">
                        <div class="content-titles-slider">
                            <h1 class="title-slider">CONOCE EL VALOR REAL <br> DE TU INVERSIÓN</h1>
                            <p class="subtitle-slider">“Inspecciona tu inmueble por menos <br>del 1% de su valor”</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="view">
                    <img loading="lazy" src="<?php echo RUTA_IMG?>home/bg_3.png" draggable="false" class="img-slider"
                        height="520" />

                </div>
                <div class="content-info-slider">
                    <div class="u-content-house">
                        <div class="content-titles-slider">
                            <h1 class="title-slider">CONOCE EL VALOR REAL <br> DE TU INVERSIÓN</h1>
                            <p class="subtitle-slider">“Inspecciona tu inmueble por menos <br>del 1% de su valor”</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="view">
                    <img loading="lazy" src="<?php echo RUTA_IMG?>home/bg_4.png" draggable="false" class="img-slider"
                        height="520" />

                </div>
                <div class="content-info-slider">
                    <div class="u-content-house">
                        <div class="content-titles-slider">
                            <h1 class="title-slider">CONOCE EL VALOR REAL <br> DE TU INVERSIÓN</h1>
                            <p class="subtitle-slider">“Inspecciona tu inmueble por menos <br>del 1% de su valor”</p>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

</section>



<section class=" servicio">
    <div class="bg-servicio">
        <div class="u-content-house">
            <div class="content-items-servicios">
                <div class="items-servicios wow fadeIn" data-wow-delay="0.4s">
                    <div class="img-puntos">
                        <img loading="lazy" src="<?php echo RUTA_IMG?>home/puntos.png" draggable="false"
                            class="img-fluid" />
                    </div>
                    <div class="grid-puntos">
                        <div class="title-puntos">
                            <h2>
                                puntos a inspeccionar
                            </h2>
                        </div>
                        <div class="content-puntos">
                            <div class="items-puntos">
                                <div class="cuadro-puntos">
                                    <div class="img-cuadro-punto">
                                        <img loading="lazy" src="<?php echo RUTA_IMG?>home/p_1.png" draggable="false"
                                            class="img-fluid" />
                                    </div>
                                    <p>Instalaciones sanitarias, elect. y de gas.</p>
                                </div>
                            </div>
                            <div class="items-puntos">
                                <div class="cuadro-puntos">
                                    <div class="img-cuadro-punto">
                                        <img loading="lazy" src="<?php echo RUTA_IMG?>home/p_2.png" draggable="false"
                                            class="img-fluid" />
                                    </div>
                                    <p>Medición de dimensiones.</p>
                                </div>
                            </div>
                            <div class="items-puntos">
                                <div class="cuadro-puntos">
                                    <div class="img-cuadro-punto">
                                        <img loading="lazy" src="<?php echo RUTA_IMG?>home/p_3.png" draggable="false"
                                            class="img-fluid" />
                                    </div>
                                    <p>Inspección de acabados.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="items-flujo wow fadeIn" data-wow-delay="0.4s">
                    <div class="title-flujo">
                        <h3></h3>
                    </div>

                    <div class="w-timeline">
                        <ul class="list_timeline">
                            <li>
                                <img loading="lazy" src="<?php echo RUTA_IMG?>home/f_1.png" draggable="false"
                                    class="img-fluid" /><br>
                            </li>
                            <li>
                                <img loading="lazy" src="<?php echo RUTA_IMG?>home/f_2.png" draggable="false"
                                    class="img-fluid" /><br>

                            </li>
                            <li>
                                <img loading="lazy" src="<?php echo RUTA_IMG?>home/f_3.png" draggable="false"
                                    class="img-fluid" /><br>
                            </li>
                            <li>
                                <img loading="lazy" src="<?php echo RUTA_IMG?>home/f_4.png" draggable="false"
                                    class="img-fluid" /><br>
                            </li>
                            <li>
                                <img loading="lazy" src="<?php echo RUTA_IMG?>home/f_5.png" draggable="false"
                                    class="img-fluid" /><br>
                            </li>
                            <li>
                                <img loading="lazy" src="<?php echo RUTA_IMG?>home/f_6.png" draggable="false"
                                    class="img-fluid" /><br>
                            </li>
                        </ul>
                        <div class="img-line">
                            <img src="<?php echo RUTA_IMG?>home/line.png" draggable="false" class="img-fluid" /><br>
                        </div>
                        <ul class="list_timeline">
                            <li>
                                <p>Cotización</p>
                            </li>
                            <li>
                                <p>Agendar inspección</p>
                            </li>
                            <li>
                                <p>Visita de inspección</p>
                            </li>
                            <li>
                                <p>Informe HouseCheckers</p>
                            </li>
                            <li>
                                <p>Inmobiliaria <br>atiende observaciones</p>
                            </li>
                            <li>
                                <p>Recepción de inmueble inspeccionado</p>
                            </li>
                        </ul>
                    </div>

                    <div class="m-timeline">
                        <ul class="list_timeline-m">
                            <li>
                                <img loading="lazy" src="<?php echo RUTA_IMG?>home/f_1.png" draggable="false"
                                    class="img-fluid" />
                                <p>Cotización</p>
                            </li>
                            <li>
                                <img loading="lazy" src="<?php echo RUTA_IMG?>home/f_2.png" draggable="false"
                                    class="img-fluid" />
                                <p>Agendar inspección</p>
                            </li>
                            <li>
                                <img loading="lazy" src="<?php echo RUTA_IMG?>home/f_3.png" draggable="false"
                                    class="img-fluid" />
                                <p>Agendar inspección</p>
                            </li>
                            <li>
                                <img loading="lazy" src="<?php echo RUTA_IMG?>home/f_4.png" draggable="false"
                                    class="img-fluid" />
                                <p>Informe HouseCheckers</p>
                            </li>
                            <li>
                                <img loading="lazy" src="<?php echo RUTA_IMG?>home/f_5.png" draggable="false"
                                    class="img-fluid" />
                                <p>Inmobiliaria <br>atiende observaciones</p>
                            </li>
                            <li>
                                <img loading="lazy" src="<?php echo RUTA_IMG?>home/f_6.png" draggable="false"
                                    class="img-fluid" />
                                <p>Recepción de inmueble inspeccionado</p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="derechos">
    <div class="bg-derechos">
        <img loading="lazy" src="<?php echo RUTA_IMG?>home/bg-derechos.png" draggable="false" height="519" />
        <div class="center-info-home">
            <div class="content-info-home">
                <div class="content-descriptions p-de wow fadeIn" data-wow-delay="0.4s">
                    <div class="title-derechos">
                        <h6></h6>
                    </div>
                    <div class="subtitle-derechos">
                        <h1>tus derechos</h1>
                    </div>
                    <div class="info-derechos">
                        <div class="item-derechos">
                            <p>
                                En el caso de venta de bienes futuros, el consumidor puede expresar su
                                desaprobación sobre
                                desperfectos, deficiencias u otras condiciones que desmejoren el valor
                                del
                                inmueble que se
                                le
                                entrega, o que impidan o limiten su uso.
                            </p>
                        </div>
                        <div class="item-derechos">
                            <div class="bg-btb-article">
                                <a href="" data-toggle="modal" data-target="#g_3">Articulo 79</a>
                                <!-- Modal: modalCart -->
                                <div class="modal fade" id="g_3" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">

                                    <!-- Change class .modal-sm to change the size of the modal -->
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-modal">
                                                <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="">
                                                <div class="img_galaria_modal">
                                                    <img src="<?php echo RUTA_IMG?>home/pdf.png" draggable="false"
                                                        class="img-fluid p-4" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal: modalCart -->
                            </div>
                            <p class="pt-3 text-center">del Codigo de Defensa <br>del Consumidor -
                                INDECOPI
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nota">
    <div class="u-content-house">
        <div class="grid-nota wow fadeIn" data-wow-delay="0.4s">
            <p class="u-comillas">"</p>
            <p class="title-nota">
                Los procesos constructivos involucran muchas especialidades complejas de gestionar. Lo
                que buscamos en
                HouseCheckers es garantizar que los errores de la construcción no opaquen la ilusión de
                la entrega de tu
                departamento.
            </p>
            <p class="u-comillas">"</p>
        </div>
    </div>
</section>

<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>