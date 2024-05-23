<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-lg-start row">
                <div class="col-sm-2">
                    <div id="logo">
                        <a href="http://zerooneteknologi.my.id/"
                            class="navbar-brand pe-3 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('/assets/img/logo/ZeroOne.png')}}" width="47" alt="Silicon" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="copyright text-lg-right text-center">
                        &copy; Copyright <a href="http://zerooneteknologi.my.id/"><strong>Zero One
                                Teknologi</strong></a>. All Rights Reserved
                    </div>
                    <div class="credits text-lg-right text-center">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                    <a href="#intro" class="scrollto">Home</a>
                    <a href="#about" class="scrollto">About</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                </nav>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('/assets/vendor/aos/aos.js')}}"></script>
<script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Template Main JS File -->
<script src="{{ asset('/assets/js/main.js')}}"></script>
@stack('script')

</body>

</html>