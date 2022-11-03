<div class="header header-1">

    <div class="topbar d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 col-md-6">
                    <p class="mb-0">
                        Welcome to The Best Pets Care at Macro Kennel
                    </p>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="sosmed-icon d-inline-flex pull-right">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MIDDLE BAR -->
    <div class="middlebar d-none d-sm-block">
        <div class="container">

            <div class="contact-info">
                <!-- INFO 1 -->
                <div class="box-icon-1">
                    <div class="icon">
                        <div class="fa fa-clock-o"></div>
                    </div>
                    <div class="body-content">
                        <div class="heading">Open Hours :</div>
                        Mon - Fri : 09:00 - 50:00
                    </div>
                </div>
                <!-- INFO 2 -->
                <div class="box-icon-1">
                    <div class="icon">
                        <div class="fa fa-phone"></div>
                    </div>
                    <div class="body-content">
                        <div class="heading">Call Today :</div>
                        <a href="tel:+62 7100 1234">
                            +62 7100 1234
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- NAVBAR SECTION -->
    <div class="navbar-main">
        <div class="container">
            <nav id="navbar-example" class="navbar navbar-expand-lg">

                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                HOME
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about-us.html">
                                DOG
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="about-us.html">
                                KENNELS
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about-us.html">
                                PEDIGREE
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">
                                TERMS AND CONDITIONS
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}">
                                CONTACT US
                            </a>
                        </li>


                    </ul>
                    <a href="#" class="btn btn-secondary btn-nav btn-rect ml-auto">
                        GET AN APPOINTMENT
                    </a>
                </div>
            </nav>

        </div>
    </div>

</div>
