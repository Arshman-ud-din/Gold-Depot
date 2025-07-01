<body>
    @php
        $count = session()->get('cart.count');
    @endphp

    <header>
        <div class="topbar">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-2 col-md-3 col-6">
                        {{-- Language Dropdown --}}
                        <div class="translater-area" style="display: none">
                            <div id="google_translate_element"></div>
                        </div>
                        <div class="dropdown dropdown-language">
                            <button class="btn btn-secondary dropdown-toggle trans-btn" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Eng
                            </button>
                            <ul class="dropdown-menu flag">
                                <li><button class="flag_link eng dropdown-item default" data-lang="en">Eng</button></li>
                                <li><button class="flag_link chi dropdown-item" data-lang="zh-CN">Chinese</button></li>
                                <li><button class="flag_link eng dropdown-item default" data-lang="ar">Arabic</button>
                                </li>
                                <li><button class="flag_link chi dropdown-item" data-lang="bn">Bengali</button></li>
                                <li><button class="flag_link eng dropdown-item default" data-lang="zh-CN">Chinese
                                        (Simplified)</button></li>
                                <li><button class="flag_link chi dropdown-item" data-lang="zh-TW">Chinese
                                        (Traditional)</button></li>
                                <li><button class="flag_link eng dropdown-item default" data-lang="fi">Finnish</button>
                                </li>
                                <li><button class="flag_link chi dropdown-item" data-lang="ht">Haitian Creole</button>
                                </li>
                                <li><button class="flag_link eng dropdown-item default" data-lang="ko">Korean</button>
                                </li>
                                <li><button class="flag_link chi dropdown-item" data-lang="ru">Russian</button></li>
                                <li><button class="flag_link chi dropdown-item" data-lang="es">Spanish</button></li>
                                <li><button class="flag_link chi dropdown-item" data-lang="ur">Urdu</button></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="d-flex justify-content-end gap-2">
                            @auth
                                <a href="#">{{ auth()->user()->name }}</a>
                                <a href="{{ route('signup.logout') }}" class="top-link">Logout</a>
                                <span>/</span>
                                <a href="{{ route('web.profile') }}" class="top-link">Profile</a>
                                @if (auth()->user()->role == 'admin')
                                    <span>/</span>
                                    <a href="{{ route('adminhome.index') }}" class="top-link">Dashboard</a>
                                @endif
                            @endauth

                            @guest
                                <a href="{{ route('login') }}" class="top-link">Login</a>
                                <span>/</span>
                                <a href="{{ route('signup.create') }}" class="top-link">Signup</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header">
            <img class="logo-bg" src="{{ asset('assets/web/images/logobg.png') }}">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-3 col-md-6 col-5">
                        <div class="logo-area">
                            <img class="img-fluid" src="{{ asset('assets/web/images/logo.png') }}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-1 col-1">
                        <nav class="navbar-menu">
                            <ul class="list">
                                <li class="list-item"><a href="{{ route('web.index') }}">Home</a></li>
                                <li class="list-item"><a href="{{ route('about.index') }}">About Us</a></li>
                                @foreach ($categories as $category)
                                    <li class="list-item"><a
                                            href="{{ route('product.index', $category->id) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                                <li class="list-item"><a href="{{ route('shop.index') }}">Shop All</a></li>
                                <li class="list-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                                <li class="list-item"><a href="{{ route('contact.create') }}">Contact Us</a></li>
                            </ul>
                            <div>
                                <button class="menu-close">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                        </nav>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6">
                        <div class="header-cart-area">
                            <div class="search-open">
                                <i class="fa-solid fa-magnifying-glass" ></i>
                            </div>
                            <div class="call-area">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>

                            <a href="{{ route('cart.index') }}" class="black">
                                <div class="cart-area">
                                    <span class="cart-count" id="cart-count">{{ $count ?? 0 }}</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span class="cart-text">Cart</span>
                                </div>
                            </a>

                            <div>
                                <button class="menu-open">
                                    <i class="fa-solid fa-bars fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> {{-- End row --}}
            </div> {{-- End container-fluid --}}
        </div> {{-- End header --}}

        {{-- ✅ Moved gold-prices-area inside header --}}
        <div class="gold-prices-area">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 col-12">
                        <div class="liv-gold-area">
                            <strong class="liv-spot-hd">Live Spot Prices:</strong>
                            <p class="para"><strong>Gold Ask:</strong> <span>$2,418.10 , $28.65</span></p>
                            <span class="divid"></span>
                            <p class="para"><strong>Silver Ask:</strong> <span>$2,418.10 , $28.65</span></p>
                            <span class="divid"></span>
                            <p class="para"><strong>Platinum Ask:</strong> <span>$2,418.10 , $28.65</span></p>
                            <span class="divid"></span>
                            <p class="para"><strong>Palladium Ask:</strong> <span>$2,418.10 , $28.65</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- Scripts --}}
    @push('script')
        <script>




            var flags = document.getElementsByClassName('flag_link');
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    includedLanguages: 'en,ar,bn,zh-CN,zh-TW,fi,ht,ko,ru,es,ur',
                }, 'google_translate_element');
            }

            Array.prototype.forEach.call(flags, function (e) {
                e.addEventListener('click', function () {
                    var lang = e.getAttribute('data-lang');
                    var languageSelect = document.querySelector("select.goog-te-combo");
                    languageSelect.value = lang;
                    languageSelect.dispatchEvent(new Event("change"));
                });
            });
        </script>
        <script is:inline type="text/javascript"
            src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    @endpush
</body>