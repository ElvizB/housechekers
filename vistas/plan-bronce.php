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
        <img loading="lazy" src="<?php echo RUTA_IMG?>planes/bg_bronce.png" draggable="false" height="529" />
        <div class="center-info wow fadeIn" data-wow-delay="0.4s">
            <div class="u-title-plan">
                <p>plan</p>
                <h1>Bronce</h1>
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
            </div>
            <div class="grid-resumen-plan wow fadeIn" data-wow-delay="0.4s">
                <div class="title-resumen">
                    <h1>Resumen del plan</h1>
                </div>
                <div class="info-resumen">
                    <p>
                        Este es un plan elemental que comprende las especialidades básicas que puede tener un
                        departamento entregado al día de hoy. Se verificará el estado de entrega de acuerdo a lo
                        ofrecido por la inmobiliaria de cada uno de estos sistemas. Se verificará que no haya
                        inconsistencias que perjudiquen el uso que le pueda dar el habitante del departamento.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-botones w-grid-btns wow fadeIn" data-wow-delay="0.4s">
        <div class="grid-botones">
            <div class="u-btn-iz">

            </div>
            <div class="grid-medidas">
                <div class="content-medidas">
                    <h1>$1.80 / m2</h1>
                </div>
            </div>
            <div class="u-btn-de">
                <a href="<?php echo RUTA_PLANPLATA ?>">
                    <span>Ir al <b>Plan Plata</b></span>
                    <img src="<?php echo RUTA_IMG?>planes/de.png" draggable="false" class="img-fluid" />
                </a>
            </div>
        </div>
    </div>

    <div class="content-botones m-grid-btns wow fadeIn" data-wow-delay="0.4s">
        <div class="grid-botones">
            <div class="grid-medidas">
                <div class="content-medidas">
                    <h1>$1.80 / m2</h1>
                </div>
            </div>
            <div class="grid-movil-btn">
                <div class="u-btn-iz">

                </div>

                <div class="u-btn-de">
                    <a href="<?php echo RUTA_PLANPLATA ?>">
                        <span>Ir al <b>Plan Plata</b></span>
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