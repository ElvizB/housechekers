<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>

<header class="header-house">
    <div class="u-content-house">
        <?php  include_once 'plantillas/menu/index.php';?>
    </div>
</header>

<section class="contacto">
    <div class="bg-contacto2">
        <div class="u-content-house">
            <div class="content-contacto-info">
                <div class="descriptions-contacto">
                    <h2>house checker</h2>
                    <h1>Contáctenos</h1>
                    <p>Utilice el siguiente formulario para ponerse en contacto con nosotros sobre sus consultas, nos
                        pondremos
                        en contacto con usted lo antes posible.
                    </p>
                </div>
                <div class="grid-formulario wow fadeIn" data-wow-delay="0.4s">
                    <div class="contacto-formulario">
                        <div class="formulario">
                            <div class="wrapper-form">
                                <form id="" class="formulario" role="form" action="" method="POST">
                                    <div class="grid-input-two">
                                        <div class="form-inputs">
                                            <label for="">Nombre</label>
                                            <input type="text" id="nombre" name="nombre" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="grid-input-two">
                                        <div class="form-inputs">
                                            <label for="">Teléfono</label>
                                            <input type="text" id="telefono" name="telefono" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="grid-input-two">
                                        <div class="form-inputs">
                                            <label for="">Correo</label>
                                            <input type="text" id="email" name="email" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="grid-input-two">
                                        <div class="form-inputs">
                                            <label for="">Dirección del hogar a inspeccionar</label>
                                            <input type="text" id="direccion" name="direccion" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="grid-input-two">
                                        <div class="form-inputs">
                                            <label for="">Cantidad m2</label>
                                            <input type="text" id="cantidad" name="cantidad" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="grid-input-two">
                                        <div class="form-inputs">
                                            <label for="">Cantidad m2 Terraza</label>
                                            <input type="text" id="cterraza" name="cterraza" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="select_form">
                                            <p class="title_planes">Plan Solicitado</p>
                                            <select name="planes" id="planes">
                                                <option value="" selected disabled>Elija plan de interés</option>
                                                <option value="Plan Bronce">Plan Bronce</option>
                                                <option value="Plan Plata">Plan Plata</option>
                                                <option value="Plan Oro">Plan Oro</option>
                                                <option value="Plan CheckHouse">Plan CheckHouse</option>
                                                <option value="Plan Checker">Plan Checkers</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="md-form">
                                        <div class="g-recaptcha text-center"
                                            data-sitekey="6LcpKe4UAAAAAFSQ3TxZYbdy644j1x3n1XMBSEjh">
                                        </div>
                                        <div id="g-recaptcha-error"></div>
                                    </div>

                                    <div id="respuesta"></div>
                                    <div class="grid-btn-enviar">
                                        <button id="btnenviar" class="btn waves-effect waves-light btn-enviar-contacto">
                                            enviar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="info-formulario">
                        <div class="content-info-formulario">
                            <img src="<?php echo RUTA_IMG?>contacto/tel.png" draggable="false" class="img-fluid" />
                            <span>Teléfono</span>
                            <ul class="list_contacto">
                                <li>980 048 055</li>
                                <li>980 043 656</li>
                                <li>992 795 936</li>
                            </ul>
                        </div>
                        <div class="content-info-formulario">
                            <img src="<?php echo RUTA_IMG?>contacto/map.png" draggable="false" class="img-fluid" />
                            <span>Dirección</span>
                            <ul class="list_contacto">
                                <li>Calle Gaspar Monge 105, <br>Dpto. 402 – San Borja</li>
                            </ul>
                        </div>
                        <div class="content-info-formulario">
                            <img src="<?php echo RUTA_IMG?>contacto/email.png" draggable="false" class="img-fluid" />
                            <span>Correo electrónico</span>
                            <ul class="list_contacto">
                                <li>contacto@housecheckers.pe</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>