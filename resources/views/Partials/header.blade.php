<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">

            <ul class="header-links pull-left">
                <li><a href="tel:{{ $x[0]->telefono }}"><i class="fa fa-phone"></i>{{ $x[0]->telefono }}</a></li>
                <li><a href="mailto:{{ $x[0]->correo }}"><i class="fa fa-envelope-o"></i>{{ $x[0]->correo }}</a></li>
                <li><a href="https://www.google.com/maps/search/Av.+Salinas+-+Calle+Granda+Centeno/@-0.8459598,-80.1641549,127a,35y,202.58h,45t/data=!3m1!1e3"><i class="fa fa-map-marker"></i> Av. Salinas - Calle Granda Centeno</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="{{ route('login') }}" target="_blank"><i class="fa fa-user-o"></i>Admin</a></li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{ route('inicio.tienda') }}" class="logo">
                            <img height="90px" src="{{ asset('/img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-7">
                    <div class="header-search">
                        <form method="POST" action="{{ route('filtro.termino') }}">
                            @csrf
                            @if (isset($termino))
                            <input type="text" class="input" name="termino" value="{{ $termino }}" placeholder="Busque su producto favorito">
                            @else
                            <input type="text" class="input" name="termino" placeholder="Busque su producto favorito">
                            @endif
                            <button type="submit" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-1 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div class="text-center" style="padding-left: 40px; padding-top:10px">
                            <a href="https://twitter.com/hashtag/YoMeQuedoEnCasa?src=hashtag_click">
                                <span style="padding-left: 55px ;color:white;"><i class="fa fa-home"></i></span>
                                <span style="font-size:12px; color:white;">#YoMeQuedoEnCasa</span>
                            </a>
                        </div>
                        <!-- /Wishlist -->

                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
