@extends('layouts.app')

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

                @section('contenu')
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac velit erat. Mauris vulputate quam eget tincidunt euismod. Etiam bibendum, elit nec consectetur finibus, ex mi imperdiet ligula, id aliquam dolor arcu in risus. Donec vitae leo augue. Nunc vehicula faucibus consectetur. Integer finibus sapien sapien, vel varius turpis viverra eu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi congue bibendum augue, non elementum nisl semper sed. Donec sed mi nec tortor aliquam lacinia convallis eu purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis mauris est, ullamcorper sit amet rutrum quis, pharetra id ex.

                    Pellentesque a eleifend ex. Vestibulum cursus in sem ornare elementum. Proin ornare tellus vel arcu porta, ornare fringilla risus varius. Ut dapibus erat velit, vitae porttitor felis auctor non. Aliquam a convallis nisl. Donec interdum nulla ut euismod commodo. Nulla non tortor dui. Sed blandit felis vel magna posuere, sed venenatis magna convallis. Ut iaculis vel eros vitae vulputate. Suspendisse vestibulum lacus urna. Nam mattis tellus eget nunc gravida, in porta est venenatis.

                    Proin tristique augue imperdiet congue fermentum. Ut vitae commodo diam. Pellentesque ultricies volutpat turpis sit amet hendrerit. Pellentesque tincidunt pretium ligula, quis faucibus ipsum placerat ac. Donec euismod imperdiet mi et euismod. Nulla viverra urna vitae risus tempus, vitae ornare nibh fringilla. Integer et augue leo.

                    Cras faucibus quis orci sit amet gravida. Proin elementum magna non arcu venenatis, id imperdiet dui commodo. Proin mattis iaculis dui viverra mattis. Pellentesque mollis ornare tellus, vel condimentum purus ornare vel. Cras mi arcu, dictum id ultrices vel, egestas ac quam. Morbi nulla metus, dapibus in egestas a, tempus et ipsum. Aenean sodales ante a nulla tempor aliquet. Phasellus suscipit magna in suscipit lobortis. Morbi ut leo eget arcu mollis tempus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas quis ligula ante. Praesent in ex non massa scelerisque viverra quis ut nibh. Etiam eleifend odio eros, eu imperdiet mauris mollis at.

                    Fusce nec justo leo. Sed malesuada sapien non interdum dignissim. Etiam vehicula, risus et consectetur dapibus, mauris sem rutrum nibh, quis finibus lorem quam vitae leo. Integer vitae sem tortor. Morbi mollis luctus velit vel hendrerit. Proin in metus elit. Vivamus id volutpat turpis. Nullam ac ligula sagittis, faucibus elit ut, tristique enim.

                    Praesent consectetur eleifend dui non facilisis. Sed eget mauris vel metus laoreet elementum. Praesent sollicitudin, lectus eget laoreet accumsan, dui arcu tempor lacus, et bibendum elit nisl at lectus. Proin vel nisi risus. Suspendisse et risus et urna tincidunt malesuada. Nulla cursus ipsum ac tellus efficitur, a sagittis risus tincidunt. Sed ac leo nec erat accumsan mattis at non purus. Aliquam vestibulum justo sapien, maximus sodales velit ornare sed. Mauris lobortis ullamcorper nulla sit amet molestie. Aliquam dictum in nibh a bibendum. Nunc luctus felis ut ultrices pharetra. Sed tempor imperdiet quam eget vulputate. Phasellus ultricies venenatis urna. Praesent varius felis eget velit consequat dictum. In metus purus, hendrerit eget odio et, porttitor ultricies lacus.

                    Nunc gravida augue eget suscipit semper.             </p>

                    @endsection
