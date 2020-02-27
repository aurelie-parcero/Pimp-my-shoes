
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Accueil
                </div>

                <p>

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam maximus sodales erat vel tempor. Proin laoreet sagittis ante ac tincidunt. Nunc mauris dolor, pretium vitae scelerisque vel, facilisis sit amet orci. Cras sed sem fringilla, blandit ligula id, bibendum elit. Vestibulum interdum justo justo, sed lacinia dui hendrerit ac. Etiam vitae vehicula nulla. Sed efficitur, risus in fringilla luctus, lacus elit dictum sapien, sit amet posuere tortor ante ac elit. Sed eget consequat magna. Ut vel pulvinar dolor. Integer gravida, nulla varius rutrum sagittis, justo lorem ultricies odio, eget molestie magna magna non sapien. Donec tincidunt velit ut porttitor porttitor. Proin scelerisque fringilla mattis.

                Curabitur a arcu urna. Pellentesque placerat placerat orci, id rhoncus velit tristique ac. Integer euismod rhoncus fringilla. Nunc ac mi porttitor, luctus ipsum non, volutpat nibh. Integer vitae ligula tempus, luctus nunc at, eleifend tortor. Nullam varius, justo ut molestie finibus, lectus velit hendrerit est, vel laoreet nibh arcu finibus felis. Fusce sed nunc malesuada, interdum est vel, viverra sapien. Integer tempor fermentum neque, a pulvinar diam semper sit amet. Quisque rutrum iaculis neque ac viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

                Donec ac risus dignissim turpis laoreet rhoncus quis vitae felis. Vestibulum vel arcu nibh. Curabitur eget commodo tortor. Nam iaculis, mauris et iaculis consequat, quam arcu mollis erat, sit amet elementum eros enim ut quam. Vestibulum ut efficitur ante, vitae interdum tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis varius, mi eget tincidunt ullamcorper, erat magna ultricies ipsum, id fringilla diam mauris in elit. Pellentesque interdum dapibus odio, ullamcorper luctus metus fringilla non. Suspendisse suscipit suscipit rhoncus. Nulla condimentum fermentum rhoncus. Suspendisse potenti. Nullam convallis tortor quis ullamcorper aliquam. Aliquam condimentum tortor mi, quis dictum lorem dictum eget. Nullam convallis dui ac augue tristique, ac consectetur nibh dignissim.

                Etiam eleifend lorem vitae condimentum suscipit. Maecenas fringilla, est a tincidunt mattis, orci nisi hendrerit lacus, nec rhoncus massa massa vel dolor. Suspendisse posuere tempus sem, ac pulvinar velit viverra vitae. In auctor convallis felis quis lobortis. Nam mattis felis nec lacus commodo, ac facilisis nulla egestas. Morbi at bibendum purus. In accumsan vitae tellus semper dapibus. Praesent id interdum nunc, non tempor libero. Vivamus malesuada convallis imperdiet. Vivamus volutpat tincidunt augue, vel sollicitudin ligula finibus nec. Praesent ut neque non mauris porttitor ultricies. Maecenas lobortis lectus vitae velit eleifend cursus.
                </p>

                @include('button')

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

    @include('footer-mobile')
