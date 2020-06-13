<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Distribuidora Fama | Catálogo</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/slick.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/slick-theme.css') }}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/nouislider.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/estilos.css') }}" />

    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
</head>
<body>
    <!-- HEADER -->
    @include('Partials\header')
    <!-- HEADER -->

    <!-- NAVEGATION -->
    @include('Partials\nav')
    <!-- NAVEGATION -->



    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        @foreach ($buscado->fotos as $item)
                        <div class="product-preview">
                            <img src="/storage/{{ $item->url }}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        @foreach ($buscado->fotos as $item)
                        <div class="product-preview">
                            <img src="/storage/{{ $item->url }}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h3 class="product-name">{{ $buscado->nombre_producto }}</h3>
                        <hr class="mt-4 mb-4">
                        <ul class="product-links">
                            <li><strong>Descripción:</strong></li>
                        </ul>
                        <p style="text-align: justify">{{ $buscado->descripcion }}</p>

                        <ul class="product-links">
                            <li><strong>Categoria: </strong> <span> {{ $buscado->categoria->nombre_categoria }}</span> </li>
                        </ul>

                        <ul class="product-links">
                            <li><strong>Marca: </strong> <span> {{ $buscado->subcategoria->nombre_sub }}</span></li>
                        </ul>

                        <ul class="product-links">
                            <li>Compartir:</li>
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{request()->fullUrl()}}&text={{ $buscado->nombre_producto }}&display=popup"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $buscado->nombre_producto }}&hashtags={#FamaStore}"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://t.me/share/url?url={{ request()->fullUrl() }}&text={{ $buscado->nombre_producto }}"><i class="fa fa-telegram"></i></a></li>
								<li><a href="mailto:?subject={{ "Mira este asombroso producto" }}&body=Entra a este link: {{ request()->fullUrl()  }}"><i class="fa fa-envelope"></i></a></li>
                            </ul>

                            <div class="text-center">
                                <hr>
                                <br>

                                    <a name="" id="" class="btn btn-danger" href="https://api.whatsapp.com/send?phone=593{{ $x[0]->telefono }}&text=Hola%20Distribuidora%20Fama,%20me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20este%20producto%20,el%20c%C3%B3digo%20del%20mismo%20es:%20{{ $buscado->codigo_unico }}" ><i class="fa fa-shopping-cart"></i> Comprar</a>

                            </div>



						</div>
					</div>
					<!-- /Product details -->

                    <!-- Product tab -->
                        <div class="col-md-12">
                            <hr>
                        </div>
					<!-- /product tab -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

        <!-- Section -->
        @if ($nuevo->isNotEmpty())
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h3 class="title">PRODUCTOS NUEVOS</h3>
                            </div>
                        </div>

                        <!-- Products tab & slick -->
                        <div class="col-md-12">
                            <div class="row">
                                <div class="products-tabs">
                                    <!-- tab -->
                                    <div id="tab1" class="tab-pane active">
                                        <div class="products-slick" data-nav="#slick-nav-1">
                                            <!-- product -->
                                            @foreach ($nuevo as $item)
                                            <div class="col-md-3 col-xs-6 animate__animated animate__animate__flipInX">
                                                <div class="product">
                                                    <div class="product-img">
                                                        @if ($item->fotos->count() >= 1)
                                                        <a href="{{ route('info.producto', $item->id) }}"><img src="/storage/{{$item->fotos->first()->url }}" alt="Imagen del producto" height="200px" width="100px" style="object-fit: cover;"></a>
                                                        @endif
                                                    </div>
                                                    <div class="product-body">
                                                        <p class="product-category">{{ $item->categoria->nombre_categoria }}</p>
                                                        <h3 class="product-name"><a style="color: #333" href="{{ route('info.producto', $item->id) }}">{{ $item->nombre_producto }}</a></h3>
                                                        <h4 class="product-price">${{ $item->precio }}</h4>
                                                        <div class="product-rating"></div>
                                                        <div class="product-btns">
                                                            <a name="" id="" class=" btn add-to-cart-btn" href="https://api.whatsapp.com/send?phone=593{{ $x[0]->telefono }}&text=Hola%20Distribuidora%20Fama,%20me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20este%20producto:%20{{$item->nombre_producto }}.%20El%20c%C3%B3digo%20del%20producto%20es:%20{{ $item->codigo_unico }}" role="button"><span style="padding-right: 10px"><i class="fa fa-shopping-cart"></i></span> Comprar</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- /product -->
                                        </div>
                                        <div id="slick-nav-1" class="products-slick-nav"></div>
                                    </div>
                                    <!-- /tab -->
                                </div>
                            </div>
                        </div>
                        <!-- Products tab & slick -->

                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
        @endif

		<!-- /Section -->
        <br> <br> <br> <br>

		<!-- FOOTER -->
        @include('Partials\footer')
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{ asset('/js/jquery.min.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/js/slick.min.js')}}"></script>
		<script src="{{ asset('/js/nouislider.min.js') }}"></script>
		<script src="{{ asset('/js/jquery.zoom.min.js')}}"></script>
		<script src="{{ asset('/js/script.js')}}"></script>
        {{-- <script src="{{ asset('main.js') }}"></script> --}}
	</body>
</html>
