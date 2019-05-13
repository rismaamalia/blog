<section class="header-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-6 col-lg-4">
                    <div class="float-left">
                        <ul class="header_social">
                            <li><a href="https://id-id.facebook.com/"><i class="ti-facebook"></i></a></li>
                            <li><a href="https://twitter.com/login?lang=id"><i class="ti-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/?hl=id"><i class="ti-instagram"></i></a></li>

                        </ul>   
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6 col-sm-6 logo-wrapper">
                    <a href="/eden/index.html" class="logo">
                        <img src="/eden/img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 search-trigger">
                    <div class="right-button">
                    </div>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </section>
    <header id="header" class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li> 
                            <li class="nav-item active"><a class="nav-link" href="{{ route('all.blog') }}">Artikel</a></li>
                            <li class="nav-item active"><a class="nav-link" href="/about">About Us</a></li>
                            <li class="nav-item active"><a class="nav-link" href="/contact">Contact us</a></li>         
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>