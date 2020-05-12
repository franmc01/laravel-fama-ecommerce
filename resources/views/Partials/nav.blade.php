		<!-- NAVIGATION -->
		<nav id="navigation">
		    <!-- container -->
		    <div class="container">
		        <!-- responsive-nav -->
		        <div id="responsive-nav">
		            <!-- NAV -->
		            <ul class="main-nav nav navbar-nav">
		                @if (isset($categoria))
		                <li class=""><a href="{{ route('inicio.tienda') }}">Inicio</a></li>
		                @else
		                <li class="active"><a href="{{ route('inicio.tienda') }}">Inicio</a></li>
		                @endif
		                @foreach ($categorias as $item)
		                @if (isset($categoria))
		                <li class="{{ $item->nombre_categoria == $categoria->nombre_categoria ? 'active' : '' }}">
		                    @else
		                <li>
		                    @endif
		                    <a href="{{ route('filtro.categoria' , $item->nombre_categoria) }}" style="text-transform: capitalize">
		                        {{ $item->nombre_categoria }}
		                    </a>
		                </li>
		                @endforeach
		            </ul>
		            <!-- /NAV -->
		        </div>
		        <!-- /responsive-nav -->
		    </div>
		    <!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
