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
        <img loading="lazy" src="<?php echo RUTA_IMG?>contacto/bg_contacto.png" draggable="false" height="1200"
            class="bgser-img" />
        <div class="center-info-home">
            <div class="u-content-house">
                <div class="content-contacto-info">
                    <div class="descriptions-contacto">
                        <h2>house checkers</h2>
                        <h1>Contáctenos</h1>
                        <p>Utiliza el siguiente formulario para ponerte en contacto con nosotros.
                            Nuestros asesores se contactarán contigo lo antes posible.
                        </p>
                    </div>
                    <div class="grid-formulario wow fadeIn" data-wow-delay="0.4s">
                        <div class="contacto-formulario">
                            <div class="formulario">
                                <div class="wrapper-form">
                                    <form id="" class="formulario" role="form" action="" method="POST">
                                        <div class="grid-input-two">
                                            <div class="form-inputs">
                                                <label for="">Nombre y Apellido</label>
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

                                        <div class="custom-control custom-checkbox mt-4 pl-5">
                                            <div class="check-modal">
                                                <p for="" data-toggle="modal" data-target="#modalCart" class="terminos">
                                                    Acepto Términos y
                                                    condiciones</p>
                                                <input type="checkbox" class="custom-control-input"
                                                    id="defaultRegisterFormNewsletter"
                                                    name="defaultRegisterFormNewsletter">
                                                <label class="custom-control-label small font-AvenirMe"
                                                    for="defaultRegisterFormNewsletter">
                                                </label>
                                            </div>

                                            <!-- Modal: modalCart -->
                                            <div class=" modal fade" id="modalCart" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <!--Header-->
                                                        <div class="modal-header z-depth-1"
                                                            style="background: #818181 !important;">
                                                            <h5 class="modal-title text-white font-AvenirProLTB"
                                                                id="myModalLabel">
                                                                Términos y
                                                                condiciones
                                                            </h5>
                                                            <!-- <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                 <span aria-hidden="true" class="text-white">×</span>--->
                                                            </button>
                                                        </div>
                                                        <!--Body-->
                                                        <div class="modal-body">
                                                            <p>
                                                                De conformidad con la Ley N° 29733, Ley de
                                                                Protección de
                                                                Datos Personales, el usuario da su consentimiento
                                                                para
                                                                el tratamiento de los datos personales que son
                                                                facilitados en el presente formulario o por
                                                                cualquier
                                                                medio desde el momento de su ingreso o utilización
                                                                del
                                                                portal.
                                                            </p>
                                                            <p>
                                                                Estos serán incorporados en el banco de datos de
                                                                usuarios de HouseCheckers, para utilizarlos en
                                                                seguimiento comercial, para fines estadísticos,
                                                                gestiones institucionales y administrativas; y se
                                                                mantendrán mientras sean útiles para que la empresa
                                                                pueda prestar y ofrecer sus servicios.
                                                            </p>

                                                        </div>
                                                        <!--Footer-->
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-contact btn-md btn-block "
                                                                data-dismiss="modal">Cerrar</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal: modalCart -->
                                        </div>

                                        <div class="md-form">
                                            <div class="g-recaptcha text-center"
                                                data-sitekey="6LcpKe4UAAAAAFSQ3TxZYbdy644j1x3n1XMBSEjh">
                                            </div>
                                            <div id="g-recaptcha-error"></div>
                                        </div>

                                        <div id="respuesta"></div>
                                        <div class="grid-btn-enviar">
                                            <button id="btnenviar"
                                                class="btn waves-effect waves-light btn-enviar-contacto">
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
                                <img src="<?php echo RUTA_IMG?>contacto/email.png" draggable="false"
                                    class="img-fluid" />
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
    </div>
</section>

<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>