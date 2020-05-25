		<nav class="navbar navbar-default">
		    <div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>

		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav">
                        @foreach ($categorias as $item)
		                <li class="dropdown menu-large">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $item->nombre_categoria }} <span class="caret"></span></a>
		                    <ul class="dropdown-menu megamenu row">
		                        <li class="col-sm-3">
		                            <ul>
		                                <li class="dropdown-header">Refrigeradoras</li>
		                                <li><a href="#">Refrigeradoras top mount</a></li>
		                                <li><a href="#">Refrigeradoras side by side</a></li>
		                                <li><a href="#">Congeladores</a></li>
		                                <li><a href="#">Vitrinas</a></li>
		                                <br>
		                            </ul>
		                        </li>
		                        <li class="col-sm-3">
		                            <ul>
		                                <li class="dropdown-header">Cocinas</li>
		                                <li><a href="#">Cocinas a gas</a></li>
		                                <li><a href="#">Cocinas eléctricas</a></li>
		                                <li><a href="#">Lavavajilas</a></li>
		                                <li><a href="#">Tanque de gas</a></li>
		                                <br>
		                            </ul>
		                        </li>
		                        <li class="col-sm-3">
		                            <ul>
		                                <li class="dropdown-header">Lavado y Secado</li>
		                                <li><a href="#">Cocinas a gas</a></li>
		                                <li><a href="#">Cocinas eléctricas</a></li>
		                                <br>
		                            </ul>
		                        </li>
		                        <li class="col-sm-3">
		                            <ul>
		                                <li class="dropdown-header">Climatización</li>
		                                <li><a href="#">Cocinas a gas</a></li>
		                                <li><a href="#">Cocinas eléctricas</a></li>
		                                <li><a href="#">Lavavajilas</a></li>
		                                <li><a href="#">Tanque de gas</a></li>
		                                <br>
		                            </ul>
		                        </li>
		                    </ul>
		                </li>
                        @endforeach
		            </ul>
		        </div><!-- /.navbar-collapse -->
		    </div><!-- /.container-fluid -->
		</nav>
