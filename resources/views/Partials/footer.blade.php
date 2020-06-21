<footer id="footer">
    <!-- top footer -->
    <div class="section" style="padding-top: 0px; padding-bottom:0px;">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Nosotros</h3>
                        <p>Somos una casa comercial con más de 10 años al servicio de la comunidad</p>
                        <ul class="footer-links">
                            <li><a href="https://www.google.com/maps/search/Av.+Salinas+-+Calle+Granda+Centeno/@-0.8459598,-80.1641549,127a,35y,202.58h,45t/data=!3m1!1e3"><i class="fa fa-map-marker"></i> Av. Salinas - Calle Granda Centeno</a></li>
                            <li><a href=href="tel:{{ $x[0]->telefono }}"><i class="fa fa-phone"></i>{{ $x[0]->telefono }}</a></li>
                            <li><a href="mailto:{{ $x[0]->correo }}"><i class="fa fa-envelope-o"></i>{{ $x[0]->correo }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Redes Sociales</h3>
                        <ul class="footer-links">
                            <li><a href="{{ $x[0]->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i>Fama Shooping</a></li>
                            <li><a href="{{ $x[0]->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i>Distribuidora Fama</a></li>
                            <li><a href="{{ $x[0]->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i>Local Fama</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Horarios de atención</h3>
                        <ul class="footer-links">
                            <li><i class="fa fa-bell" aria-hidden="true"></i> Lunes - Viernes : {{ $x[0]->horariosemana_abrir }} am - {{ $x[0]->horariosemana_cerrar }} pm</li>
                            <li><i class="fa fa-bell" aria-hidden="true"></i> Sábados - Domingos : {{ $x[0]->horariofinsemana_abrir }} am - {{ $x[0]->horariofinsemana_cerrar }} pm</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->

    <!-- bottom footer -->
    <div id="bottom-footer" class="section" style="padding-top: 0px; padding-bottom: 10px;">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="footer-payments">
                        <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                    </ul>
                    <span class="copyright">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Todos los derechos reservados a <a href="https://www.instagram.com/iamfrancis98/" target="_blank">Francisco Marín</a>
                    </span>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bottom footer -->
</footer>
