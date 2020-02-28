<header>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark banner" >
        <!-- Brand -->
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('logo/header_mobile_update.png') }}" class="posLogo"></a>


        <ul class="navbar-nav" style="justify-content: flex-end; align-items: center">
            <li class="nav-item paddingr20">
                <a class="nav-link" href="{{url('/contact')}}"><i class="far fa-envelope fa-2x" style="padding-top: 7px"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{'/panier'}}"><i class="fas fa-shopping-bag fa-2x" style="padding-top: 5px"></i></a>
            </li>
            <li>
                <!-- Toggler/collapsibe Button -->
                <div class="toggler d-md-none" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <svg viewBox="0 0 800 600">
                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                        <path d="M300,320 L540,320" id="middle"></path>
                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                    </svg>
                </div>
            </li>
        </ul>

        <!-- Navbar links -->

        <div class="collapse navbar-collapse text-right" id="collapsibleNavbar">
            <ul style="flex-direction: column; margin-top:-100px" class="navbar-nav ml-auto flex-nowrap d-md-none">
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item ">Femme</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item">Homme</a>
                </li>
            </ul>
        </div>

        <a class="navbar-nav; nav-link; slogan">
            Be unique<br> Be you<br> Pimp your shoes
        </a>
    </nav>
</header>
