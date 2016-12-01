@extends('layouts.master')

@section('title', 'Home')
@section('content')
@include('includes.header')



<div class="row">
	<div class="col-12 profile">
		<img src="{{ url('img/koen.jpg') }}" class="profile-img">
		<h2>Koen de Bont</h2>
		<h3>Informatica te Avans Hogeschool Breda</h3>
	</div>

	<div class="container">
		<div class="col-12 card">
			
		</div>
	</div>
</div>


<div class="jumbotron">
	
	

</div>

@include('includes.footer')
@endsection