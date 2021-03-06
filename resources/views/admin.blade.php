@extends('layout_admin')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="/ccadmin">
	  	<img src="/images/logo_cc.png" width="75" height="75" alt="">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <!--<li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>-->
	      <li class="nav-item">
	        <a class="nav-link" href="/ccadmin/equipos">Equipos</a>
	      </li>
	      <!--<li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Dropdown
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>-->
	      
	      <li class="nav-item">
	        <a class="nav-link" href="/logout">Cerrar Sesion</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<section class="p-5">
		<div class="container">
			<div class="row ">
				<div class="col-md-5">
					<h1 class="text-white">Bienvenido!</div>
				</div>
			</div>
		</div>
	</section>
	
@endsection