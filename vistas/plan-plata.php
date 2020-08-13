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
    <div class="bg-plan-bronce">
        <img loading="lazy" src="<?php echo RUTA_IMG?>planes/bg_plata.png" draggable="false" height="529" />
        <div class="center-info wow fadeIn" data-wow-delay="0.4s">
            <div class="u-title-plan">
                <p>plan</p>
                <h1>Plata</h1>
            </div>
        </div>
    </div>
</section>

<section class="bg-descriptions-planes">
    <div class="u-content-house">
        <div class="descriptions-planes">
            <div class="subtitle-planes wow fadeIn" data-wow-delay="0.4s">
                <p>Incluye las siguientes inspecciones</p>
            </div>
            <div class="grid-items-inspeccion wow fadeIn" data-wow-delay="0.4s">
                <div class="item-inspeccion">
                    <div class="img-inspeccion">
                        <img src="<?php echo RUTA_IMG?>planes/i_1.png" draggable="false" class="img-fluid" />
                    </div>
                    <div class="info-inspeccion">
                        <p>Instalaciones Eléctricas</p>
                    </div>
                </div>
                <div class="item-inspeccion">
                    <div class="img-inspeccion">
                        <img src="<?php echo RUTA_IMG?>planes/i_2.png" draggable="false" class="img-fluid" />
                    </div>
                    <div class="info-inspeccion">
                        <p>Instalaciones Sanitarias</p>
                    </div>
                </div>
                <div class="item-inspeccion">
                    <div class="img-inspeccion">
                        <img src="<?php echo RUTA_IMG?>planes/i_3.png" draggable="false" class="img-fluid" />
                    </div>
                    <div class="info-inspeccion">
                        <p>Instalaciones de Gas</p>
                    </div>
                </div>
                <div class="item-inspeccion">
                    <div class="img-inspeccion">
                        <img src="<?php echo RUTA_IMG?>planes/i_4.png" draggable="false" class="img-fluid" />
                    </div>
                    <div class="info-inspeccion">
                        <p>Alarma contra incendio</p>
                    </div>
                </div>
                <div class="item-inspeccion">
                    <div class="img-inspeccion">
                        <img src="<?php echo RUTA_IMG?>planes/i_5.png" draggable="false" class="img-fluid" />
                    </div>
                    <div class="info-inspeccion">
                        <p>Intercomunicador</p>
                    </div>
                </div>
                <div class="item-inspeccion">
                    <div class="img-inspeccion">
                        <img src="<?php echo RUTA_IMG?>planes/i_6.png" draggable="false" class="img-fluid" />
                    </div>
                    <div class="info-inspeccion">
                        <p>Accesorios en general</p>
                    </div>
                </div>
                <div class="item-inspeccion">
                    <div class="img-inspeccion">
                        <img src="<?php echo RUTA_IMG?>planes/i_7.png" draggable="false" class="img-fluid" />
                    </div>
                    <div class="info-inspeccion">
                        <p>Acabados</p>
                    </div>
                </div>
            </div>
            <div class="grid-resumen-plan wow fadeIn" data-wow-delay="0.4s">
                <div class="title-resumen">
                    <h1>Resumen del plan</h1>
                </div>
                <div class="info-resumen">
                    <p>
                        A este plan se suma, la evaluación la respuesta que pueda brindar el sistema de alarma contra
                        incendio dentro del departamento. El funcionamiento del intercomunicador y que este
                        correctamente programado. Además la verificación del equipamiento que pueda tener el
                        departamento así como sus acabados.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-botones w-grid-btns wow fadeIn" data-wow-delay="0.4s">
        <div class="grid-botones">
            <div class="u-btn-iz">
                <a href="<?php echo RUTA_PLANBRONCE ?>">
                    <img src="<?php echo RUTA_IMG?>planes/iz.png" draggable="false" class="img-fluid" />
                    <span>Ir al <b> Plan Bronce</b></span>
                </a>
            </div>
            <div class="grid-medidas">
                <div class="content-medidas">
                    <h1>$3.20 / m2</h1>
                    <p>$1.50 / m2 terraza</p>
                </div>
            </div>
            <div class="u-btn-de">
                <a href="<?php echo RUTA_PLANORO ?>">
                    <span>Ir al <b>Plan Oro</b></span>
                    <img src="<?php echo RUTA_IMG?>planes/de.png" draggable="false" class="img-fluid" />
                </a>
            </div>
        </div>
    </div>

    <div class="content-botones m-grid-btns wow fadeIn" data-wow-delay="0.4s">
        <div class="grid-botones">
            <div class="grid-medidas">
                <div class="content-medidas">
                    <h1>$2.20 / m2</h1>
                    <p>$1.50 / m2 terraza</p>
                </div>
            </div>
            <div class="grid-movil-btn">
                <div class="u-btn-iz">
                    <a href="<?php echo RUTA_PLANBRONCE ?>">
                        <img src="<?php echo RUTA_IMG?>planes/iz.png" draggable="false" class="img-fluid" />
                        <span>Ir al <b> Plan Bronce</b></span>
                    </a>
                </div>

                <div class="u-btn-de">
                    <a href="<?php echo RUTA_PLANORO ?>">
                        <span>Ir al <b>Plan Oro</b></span>
                        <img src="<?php echo RUTA_IMG?>planes/de.png" draggable="false" class="img-fluid" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
  include_once 'plantillas/consulta-plan.php';
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>