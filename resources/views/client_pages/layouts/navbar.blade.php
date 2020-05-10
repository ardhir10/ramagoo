<style>
    .shadow {
        -webkit-box-shadow: -1px 7px 26px -6px rgba(56, 49, 49, 0.18);
        -moz-box-shadow: -1px 7px 26px -6px rgba(56, 49, 49, 0.18);
        box-shadow: -1px 7px 26px -6px rgba(56, 49, 49, 0.18);
    }

    .nav-radius {
        border-bottom-right-radius: 45px;
        border-bottom-left-radius: 45px;
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
        color: #EC4C4C;
    }

</style>

<nav class="navbar navbar-expand-lg navbar-light shadow nav-radius" style="margin-bottom:30px">
    <div class="container"><a class="navbar-brand" href="index.html"><img class="etcodes-normal-logo"
                src="{{url('assets_client/')}}/images/logo.png" width="120" height="24" alt="Logo"><img
                class="etcodes-mobile-logo" src="{{url('assets_client/')}}/images/logo.png" width="120" height="24"
                alt="Logo"></a>
        <button class="navbar-toggler hamburger-menu-btn" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation"><span>toggle menu</span></button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownMenuLinkHome" href="{{url('home')}}"
                        aria-expanded="false">Home</a>
                </li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Topics</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkShop"><a class="dropdown-item"
                            href="page-about-me.html">About Me</a><a class="dropdown-item"
                            href="page-contact.html">Contact</a></div>
                </li>

                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkShop"><a class="dropdown-item"
                            href="page-about-me.html">About Me</a><a class="dropdown-item"
                            href="page-contact.html">Contact</a></div>
                </li>
                <li class="nav-item dropdown mega_menu_holder"><a class="nav-link dropdown-toggle" href="#"
                        data-toggle="dropdown">Contact</a>
                    <ul class="dropdown-menu mega_menu">
                        <li class="nav-item"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Blog
                                Style</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-right-sidebar.html">Card Blog with Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-left-sidebar.html">Card Blog with Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-three-col.html">Card Blog Three Col </a>
                                </li>
                                <li><a class="dropdown-item" href="blog-two-col-right-sidebar.html">Card Blog with
                                        two col Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-two-col-left-sidebar.html">Card Blog with
                                        two col Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Single Blog
                                Style</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-single-post.html">Single Blog</a></li>
                                <li><a class="dropdown-item" href="blog-single-post-gallery.html">Gallary Blog Post
                                    </a></li>
                                <li><a class="dropdown-item" href="blog-single-post-video.html">Video Blog Post</a>
                                </li>
                                <li><a class="dropdown-item" href="blog-single-post-audio.html">Audio Blog Post</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Member</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkShop"> <a class="dropdown-item" href="{{ route('register') }}">Register</a><a class="dropdown-item"
                            href="{{ route('login') }}">Login</a></div>
                </li>

                {{-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLinkShop"
                        href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkShop"><a class="dropdown-item"
                            href="shop-right-sidebar.html">Shop Right Sidebar</a><a class="dropdown-item"
                            href="shop-left-sidebar.html">Shop Left Sidebar</a><a class="dropdown-item"
                            href="shop-full-width.html">Shop Full Width</a><a class="dropdown-item"
                            href="shop-single-product.html">Shop Single Product</a></div>
                </li>
                <li class="nav-item dropdown mega_menu_holder"><a class="nav-link dropdown-toggle" href="#"
                        data-toggle="dropdown">Elements</a>
                    <ul class="dropdown-menu mega_menu">
                        <li class="nav-item"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Typography</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="elements-accordions.html">Accordions</a></li>
                                <li><a class="dropdown-item" href="elements-blockquote.html">Blockquote</a></li>
                                <li><a class="dropdown-item" href="elements-call-to-action.html">Call To Action</a>
                                </li>
                                <li><a class="dropdown-item" href="elements-typography.html">Typography</a></li>
                                <li><a class="dropdown-item" href="elements-dropcaps.html">Dropcaps</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Basic
                                Elements</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="elements-buttons.html">Buttons</a></li>
                                <li><a class="dropdown-item" href="elements-columns.html">Columns</a></li>
                                <li><a class="dropdown-item" href="elements-contact-form.html">Contact Form</a></li>
                                <li><a class="dropdown-item" href="elements-google-maps.html">Google Maps</a></li>
                                <li><a class="dropdown-item" href="elements-lists.html">Lists</a></li>
                                <li><a class="dropdown-item" href="elements-tables.html">Tables</a></li>
                                <li><a class="dropdown-item" href="elements-tabs.html">Tabs</a></li>
                                <li><a class="dropdown-item" href="elements-galleries.html">Galleries</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Content</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="elements-Partner.html">Partner</a></li>
                                <li><a class="dropdown-item" href="elements-icon-content-box.html">Icon Content Box
                                    </a></li>
                                <li><a class="dropdown-item" href="elements-image-content-box.html">Image Content
                                        Box </a></li>
                                <li><a class="dropdown-item" href="elements-numbered-process.html">Numbered
                                        Process</a></li>
                                <li><a class="dropdown-item" href="elements-pricing-table.html">Pricing Table</a>
                                </li>
                                <li><a class="dropdown-item" href="elements-slider.html">Slider</a></li>
                                <li><a class="dropdown-item" href="elements-icons.html">Icons</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Infographic</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="elements-counters.html">Counters</a></li>
                                <li><a class="dropdown-item" href="elements-countdown.html">Countdown</a></li>
                                <li><a class="dropdown-item" href="elements-progress-bar.html">Progress Bar</a></li>
                                <li><a class="dropdown-item" href="elements-team.html">Team</a></li>
                                <li><a class="dropdown-item" href="elements-testimonials.html">Testimonials</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown mega_menu_holder"><a class="nav-link dropdown-toggle" href="#"
                        data-toggle="dropdown">Features</a>
                    <ul class="dropdown-menu mega_menu">
                        <li class="nav-item"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Header
                                Styles</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="feature-header-transparent.html">Transparent
                                        header </a></li>
                                <li><a class="dropdown-item" href="feature-header-white.html">White header</a></li>
                                <li><a class="dropdown-item" href="feature-header-dark.html">Dark header</a></li>
                                <li><a class="dropdown-item" href="feature-header-with-top-bar.html">Header with top
                                        bar</a></li>
                                <li><a class="dropdown-item" href="feature-header-with-push.html">Header with push
                                    </a></li>
                                <li><a class="dropdown-item" href="feature-header-center-navigation.html">Center
                                        navigation </a></li>
                                <li><a class="dropdown-item" href="feature-header-center-logo.html">Center logo</a>
                                </li>
                                <li><a class="dropdown-item" href="feature-header-top-logo.html">Top logo</a></li>
                                <li><a class="dropdown-item" href="feature-header-one-page-navigation.html">One page
                                        navigation</a></li>
                                <li><a class="dropdown-item" href="feature-header-hamburger-menu.html">Hamburger
                                        menu </a></li>
                                <li><a class="dropdown-item"
                                        href="feature-header-hamburger-menu-center-logo.html">Hamburger Center
                                        logo</a></li>
                                <li><a class="dropdown-item" href="feature-header-sidebar-menu.html">Sidebar Menu
                                    </a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Footer</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="feature-footer-standard.html">Footer standard</a>
                                </li>
                                <li><a class="dropdown-item" href="feature-footer-standard-dark.html">Footer
                                        standard dark</a></li>
                                <li><a class="dropdown-item" href="feature-footer-standard-2.html">Footer standard 2
                                    </a></li>
                                <li><a class="dropdown-item" href="feature-footer-strip.html">Footer strip</a></li>
                                <li><a class="dropdown-item" href="feature-footer-strip-dark.html">Footer strip dark
                                    </a></li>
                                <li><a class="dropdown-item" href="feature-footer-center.html">Footer center</a>
                                </li>
                                <li><a class="dropdown-item" href="feature-footer-center-logo.html">Footer center
                                        logo </a></li>
                                <li><a class="dropdown-item" href="feature-footer-center-logo-dark.html">Footer
                                        center logo dark</a></li>
                                <li><a class="dropdown-item" href="feature-footer-modern.html">Footer modern </a>
                                </li>
                                <li><a class="dropdown-item" href="feature-footer-modern-dark.html">Footer modern
                                        dark </a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Others</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="feature-page-title-left.html">Page Title Left
                                        alignment </a></li>
                                <li><a class="dropdown-item" href="feature-page-title-right.html">Page Title Right
                                        alignment </a></li>
                                <li><a class="dropdown-item" href="feature-page-title-center.html">Page Title Center
                                        alignment </a></li>
                                <li><a class="dropdown-item" href="feature-page-title-bg-img.html">Page Title BG
                                        Image</a></li>
                                <li class="dropdown-divider m-3"></li>
                                <li><a class="dropdown-item" href="elements-animation.html">Animation</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
        <div class="navbar-modules d-none d-lg-flex ml-20px">
            @guest


            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    <div class="dropdown-menu" style="left: 20 !important;right: 0 !important;"
                        aria-labelledby="navbarDropdownMenuLinkShop">
                        <a class="dropdown-item" href="{{ route('register') }}">Register</a><a class="dropdown-item"
                            href="{{ route('login') }}">Login</a></div>
                </li>
            </ul>
            @else
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                        {{ Auth::user()->name }}</a>
                    <div class="dropdown-menu" style="left: 20 !important;right: 0 !important;"
                        aria-labelledby="navbarDropdownMenuLinkShop">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      
                    </div>
                </li>
            </ul>
            
            @endguest

        </div>
        <div class="navbar-modules d-none d-lg-flex ml-20px">
            <div class="navbar-module"><a href="#"><i class="fab fa-instagram"></i></a></div>
            <div class="navbar-module"><a href="#"><i class="fab fa-linkedin"></i></a></div>
            <div class="navbar-module"><a href="#"><i class="fas fa-search"></i></a></div>
        </div>


    </div>
</nav>
