<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>

<header class="header-house">
    <div class="u-content-house">
        <?php  include_once 'plantillas/menu/index.php';?>
    </div>
</header>


<section class="planes">
    <div class="u-content-house">
        <div class="grid-planes wow fadeIn" data-wow-delay="0.4s">
            <h2>
                house checkers
            </h2>
            <h1>Nuestros planes</h1>
            <p>Nuestro servicio es realizar una inspección técnica a distintos conceptos que forman parte de tu
                propiedad. Los planes se detallan a continuación:</p>
        </div>
    </div>
</section>

<section class="bg-planes-items">
    <div class="u-content-house">
        <div class="grid-items-plan wow fadeIn" data-wow-delay="0.4s">
            <div class="descriptions-plan">
                <h2>¿Estás pronto a recibir una propiedad nueva?</h2>
                <p>Conoce nuestros planes de inspección de acuerdo a tus necesidades.</p>
            </div>
            <div class="content-plan-items">
                <div class="plan-items">
                    <img src="<?php echo RUTA_IMG?>planes/bronce.png" draggable="false" class="img-fluid" />
                    <div class="content-info-plan">
                        <div class="description-info-plan">
                            <h2>plan</h2>
                            <h1>bronce</h1>
                            <a href="<?php echo RUTA_PLANBRONCE ?>" target="_blank" class="waves-effect">ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-plan-items">
                <div class="plan-items">
                    <img src="<?php echo RUTA_IMG?>planes/plata.png" draggable="false" class="img-fluid" />
                    <div class="content-info-plan">
                        <div class="description-info-plan">
                            <h2>plan</h2>
                            <h1>plata</h1>
                            <a href="<?php echo RUTA_PLANPLATA ?>" target="_blank" class="waves-effect">ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-plan-items">
                <div class="plan-items">
                    <img src="<?php echo RUTA_IMG?>planes/oro.png" draggable="false" class="img-fluid" />
                    <div class="content-info-plan">
                        <div class="description-info-plan">
                            <h2>plan</h2>
                            <h1>oro</h1>
                            <a href="<?php echo RUTA_PLANORO ?>" target="_blank" class="waves-effect">ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-planes-items">
    <div class="u-content-house">
        <div class="grid-items-plan wow fadeIn" data-wow-delay="0.4s">
            <div class="descriptions-plan">
                <h2>¿Recibirás una propiedad anteriormente habitada?</h2>
                <p>El plan CheckHouse te permite validar las garantías vigentes de tu nueva propiedad.</p>
            </div>
            <div class="content-plan-items">
                <div class="plan-items">
                    <img src="<?php echo RUTA_IMG?>planes/plan_house.png" draggable="false" class="img-fluid" />
                    <div class="content-info-plan">
                        <div class="description-info-plan">
                            <h2>plan</h2>
                            <h1>CheckHouse</h1>
                            <div class="bg-btn-vermas">
                                <a href="<?php echo RUTA_PLANCHECKHOUSE ?>" target="_blank" class="waves-effect">ver
                                    más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="bg-planes-items">
    <div class="u-content-house">
        <div class="grid-items-plan wow fadeIn" data-wow-delay="0.4s">
            <div class="descriptions-plan">
                <h2>Asegúrate de que todas las observaciones hayan sido levantadas</h2>
                <p>Este plan verifica los detalles observados en la primera inspección.</p>
            </div>
            <div class="content-plan-items">
                <div class="plan-items">
                    <img src="<?php echo RUTA_IMG?>planes/plan_checkers.png" draggable="false" class="img-fluid" />
                    <div class="content-info-plan">
                        <div class="description-info-plan">
                            <h2>plan</h2>
                            <h1>Checkers</h1>
                            <div class="bg-btn-vermas">
                                <a href="<?php echo RUTA_PLANCHECKERS ?>" target="_blank" class="waves-effect">ver
                                    más</a>
                            </div>
                        </div>
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