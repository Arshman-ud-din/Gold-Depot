<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="mt-3">
                    <img class="img-fluid footer-logo" src="{{ asset('assets/web/images/footerlogo.png') }}"
                        alt="">
                    <p class="para white mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="social-link">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-first-list">
                    <div>
                        <h3 class="footer-hd">INFORMATION</h3>
                    </div>
                    <ul class="footer-list p-0">
                        <li><a href="{{ route('web.index') }}">Home</a></li>
                        <li><a href="{{ route('about.index') }}">About Us</a></li>
                        @foreach ($categories as $catgory)
                            <li><a href="{{ route('product.index', $catgory->id) }}">{{ $catgory->name }}</a></li>
                        @endforeach
                        <li><a href="{{ route('shop.index') }}">Shop All</a></li>
                        <li><a href="{{ route('blog.index') }}">Blogs</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div>
                    <h3 class="footer-hd">Customer Service</h3>
                </div>
                <ul class="footer-list p-0">
                    <li><a href="{{ route('contact.create') }}">Contact Us</a></li>
                    <li><a href="#">Help And Advice</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Tearms And Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div>
                    <h3 class="footer-hd">Contact Us</h3>
                </div>
                <ul class="footer-list p-0 last">
                    <li><a href="#"><i class="fa-solid fa-phone"></i> 1-800-733-8813</a></li>
                    <li><a href="#"><i class="fa-solid fa-envelope"></i> coinguy66@gmail.com</a></li>
                    <li><a href="#"><i class="fa-solid fa-location-dot"></i> 4164 Maurice Drive
                            Delray Beach FL 33445</a></li>
                </ul>
                <img class="img-fluid" src="{{ asset('assets/web/images/footervisa.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="footer-sep"></div>
    <div class="copyright-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="copy-right-para">
                        <p class="para white">Copyright 2024 © <span class="">Gold Depot Stroe inc</span> . All
                            rights
                            reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="copy-right-para right">
                        <p class="para white">Design & Developed By: <span class=""> <a href="#"> Web Design
                                    Glory.</a></span>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="search-global-area">
    <div>
        <button class="search-close">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <form action="">
                    <div class="search-input-area">
                        <input type="text" placeholder="Search" class="form-input">
                        <button class="primary-btn mt-0">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<script src="{{ asset('assets/web/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('assets/web/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/web/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/web/js/index.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    fetch("{{ route('web.index') }}", {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(response => {
            // if (data.success) {
            //     document.getElementById('cart-count').innerText = response.cart.count;
            // } else {
            //     alert(response.message);
            // }
        });
</script>
@stack('scripts')
</body>

</html>
