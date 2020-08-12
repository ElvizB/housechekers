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
    <div class="bg-plan-checkers">
        <div class="u-content-house">
            <div class="u-title-plan">
                <p>plan</p>
                <h1>Checkers</h1>
            </div>
        </div>
    </div>
</section>

<section class="bg-descriptions-planes">
    <div class="u-content-house">
        <div class="descriptions-planes">
            <div class="subtitle-planes">
                <p>Incluye las siguientes inspecciones</p>
            </div>
            <div class="grid-items-inspeccion2">
                <div class="item-inspeccion">
                    <div class="img-inspeccion">
                        <img src="<?php echo RUTA_IMG?>planes/i_1.png" draggable="false" class="img-fluid" />
                    </div>
                    <div class="info-inspeccion">
                        <p>REVISIÓN POSTERIOR PARA <br>VERIFICACIÓN DE DETALLES <br>OBSERVADOS EN LA <br>PRIMERA
                            INSPECCIÓN.
                        </p>
                    </div>
                </div>

            </div>
            <div class="grid-resumen-plan">
                <div class="title-resumen">
                    <h1>Resumen del plan</h1>
                </div>
                <div class="info-resumen">
                    <p>
                        Este plan comprende la revisión que se realizará posterior al levantamiento de las observaciones
                        por parte de la inmobiliaria.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-botones w-grid-btns">
        <div class="grid-botones">
            <div class="u-btn-iz">
                <a href="<?php echo RUTA_PLANCHECKHOUSE ?>">
                    <img src="<?php echo RUTA_IMG?>planes/iz.png" draggable="false" class="img-fluid" />
                    <span>Ir al <b>Plan CheckHouse</b></span>
                </a>
            </div>
            <div class="grid-medidas">
                <div class="content-medidas">
                    <h1>$1.80 / m2</h1>

                </div>
            </div>
            <div class="u-btn-de">

            </div>
        </div>
    </div>

    <div class="content-botones m-grid-btns">
        <div class="grid-botones">
            <div class="grid-medidas">
                <div class="content-medidas">
                    <h1>$1.80 / m2</h1>
                </div>
            </div>
            <div class="grid-movil-btn">
                <div class="u-btn-iz">
                    <a href="<?php echo RUTA_PLANCHECKHOUSE ?>">
                        <img src="<?php echo RUTA_IMG?>planes/iz.png" draggable="false" class="img-fluid" />
                        <span>Ir al <b>Plan CheckHouse</b></span>
                    </a>
                </div>

                <div class="u-btn-de">

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