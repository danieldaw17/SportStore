{{-- css --}}
<link rel="stylesheet" type="text/css" href="{{ url('css/footer.css') }}">
@yield("styles")
<footer class="probootstrap-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="probootstrap-footer-widget">
                            <h3>CONTACT US</h3>
                            <ul>

                                <li>SPORTSTORE INC.</li>
                                <li>C/ Santo Justo y Pastor 70</li>
                                <li>Manises 46940, Valencia</li>
                                <li><a href="tel:+34962299337">Tel: 962299337</a></li>
                                <li><a href="mailto:admin@sportstore.com">admin@sportstore.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="probootstrap-footer-widget">
                            <h3>SOCIAL NETWORKS</h3>
                            <ul id="social">
                                <li><a href="https://es-es.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                            

                        </div>
                        ©2019 SPORTSTORE INC. HAVE ALL RIGHT RESERVED
                    </div>
                    <div class="col-md-4">
                        <div class="probootstrap-footer-widget">
                            <h3>SPONSORS</h3>
                            <a href="https://www.psmwifiymovil.com"><img src="{{ url('img/sponsor.png') }}" alt="PSM movil & wifi" class="sponsor"></a>
                            <a href="https://www.decathlon.es"><img src="{{ url('img/sponsor1.png') }}" alt="DECATHLON" class="sponsor"></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>