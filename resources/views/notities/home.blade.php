@extends('layouts.master')

<link rel="stylesheet" href="{{ url('css/app.css') }}">

@section('title', 'Notitie App')
@section('content')
@include('includes.app-header')

<aside id="app-sidebar">
	<div class="sidebar-menu">
		<img src="{{ url('img/icon/logo.svg') }}" class="logo" alt="Koen de Bont" title="Koen de Bont">
	</div>

	<ul class="sidebar-menu menu-1">
		<li>
			<button class="btn btn-icon">
				<i class="material-icons">add</i>
			</button>
		</li>
		<li>
			<button class="btn btn-icon">
				<i class="material-icons">search</i>
			</button>
		</li>

	</ul>

	<ul class="sidebar-menu menu-2">
		<li>
			<button class="btn btn-icon">
				<i class="material-icons">star</i>
			</button>
		</li>
		<li>
			<button class="btn btn-icon">
				<i class="material-icons">note_add</i>
			</button>
		</li>
		<li>
			<button class="btn btn-icon">
				<i class="material-icons">archive</i>
			</button>
		</li>
	</ul>
</aside>

<section class="page">
	<div class="container">
		<div class="row">
			
		
			<div class="col-md-10 col-md-offset-1 col-xs-12">
				<div class="card">
					<div class="card-content">
						<h2 class="card-title">Dit is de titel van een notitie</h2>
						
						<input type="text" value="blfeashifoehsgorhosuhgoushgs">

						<textarea name="" id="" cols="30" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias delectus veritatis numquam cum omnis, voluptatibus expedita maiores iusto! Ipsam assumenda quo optio? Tenetur quibusdam explicabo quia, ab, veritatis placeat doloribus.</textarea>
					</div>
					<div class="card-footer">
						<ul class="menu menu-buttons pull-left">
							<li>
								<button>
									<i class="material-icons">access_time</i>
								</button>
							</li>
							<li>
								<button>
									<i class="material-icons">image</i>
								</button>
							</li>
							<li>
								<button>
									<i class="material-icons">color_lens</i>
								</button>
							</li>
							<li>
								<button>
									<i class="material-icons">list</i>
								</button>
							</li>
						</ul>


						<button>
							Opslaan
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

@include('includes.footer')
@endsection