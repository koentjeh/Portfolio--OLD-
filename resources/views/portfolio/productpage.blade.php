@extends('layouts.master')

@section('title', 'Products')
@section('content')
@include('includes.header')

<div class="container">
	<div class="spacer"></div>

	<div class="col-md-12">

		<form class="searchbar">
			<input type="text" class="search" placeholder="Zoeken naar bedrijven, producten, vaardigheden en diensten binnen mijn portfolio">
			<button class="close-search">
				<i class="material-icons">close</i>
			</button>
		</form>

	</div>

	<div class="col-md-8">
		<div class="card card-product">
			<div class="card-content">
				<div class="product-details">
					<div class="image-cover">
						<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTEuOTk5IDUxMS45OTkiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMS45OTkgNTExLjk5OTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNDQ0NDQ0M7IiBwb2ludHM9IjMwMy41MjksNTAyLjc3IDIwOC40NTIsNTAyLjc3IDIxNi40MTQsNDY5LjYxIDIyNC4xMDUsNDM3LjYxOSAyODcuODg5LDQzNy42MTkgICAyOTUuNTY3LDQ2OS42MSAiLz4KPHBvbHlnb24gc3R5bGU9ImZpbGw6Izk5OTk5OTsiIHBvaW50cz0iMjk1LjU2Nyw0NjkuNjEgMjE2LjQxNCw0NjkuNjEgMjI0LjEwNSw0MzcuNjE5IDI0OS45ODEsNDA1Ljg5OCAyODcuODg5LDQzNy42MTkgIi8+CjxwYXRoIHN0eWxlPSJmaWxsOiNDQ0NDQ0M7IiBkPSJNNTA5LjUyOSw5NS44Mjd2MzA4LjIzOGMwLDE4LjUzLTE1LjAyNCwzMy41NTQtMzMuNTU0LDMzLjU1NEgzNi4wMTggIGMtMTguNTMsMC0zMy41NTQtMTUuMDI0LTMzLjU1NC0zMy41NTRWOTUuODI3YzAtMTguNTMsMTUuMDI0LTMzLjU1NCwzMy41NTQtMzMuNTU0aDQzOS45NTYgIEM0OTQuNTA2LDYyLjI3Myw1MDkuNTI5LDc3LjI5Niw1MDkuNTI5LDk1LjgyN3oiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0U2RTZFNjsiIGQ9Ik01MDkuNTI5LDk1LjgyN3YzMDguMjM4YzAsMTguNTMtMTUuMDI0LDMzLjU1NC0zMy41NTQsMzMuNTU0SDIwNi40MjJsMTA1LjI0LTM3NS4zNDZoMTY0LjMxMyAgQzQ5NC41MDYsNjIuMjczLDUwOS41MjksNzcuMjk2LDUwOS41MjksOTUuODI3eiIvPgo8cmVjdCB4PSIyLjQ3IiB5PSIxMDguMzAzIiBzdHlsZT0iZmlsbDojOUJEN0Y0OyIgd2lkdGg9IjUwNy4wNjUiIGhlaWdodD0iMjgzLjI4NCIvPgo8cG9seWdvbiBzdHlsZT0iZmlsbDojQzhFREZDOyIgcG9pbnRzPSI1MDkuNTI5LDEwOC4zMDMgNTA5LjUyOSwzOTEuNTg4IDIxOS4zMywzOTEuNTg4IDI5OC43NTQsMTA4LjMwMyAiLz4KPHJlY3QgeD0iMTc4LjQ3MiIgeT0iNDkzLjU0MiIgc3R5bGU9ImZpbGw6I0U2RTZFNjsiIHdpZHRoPSIxNTUuMDQ4IiBoZWlnaHQ9IjE4LjQ1NyIvPgo8cmVjdCB4PSIyLjQ3IiB5PSIxMDIuNzY2IiBzdHlsZT0iZmlsbDojQjNCM0IzOyIgd2lkdGg9IjUwNy4wNjUiIGhlaWdodD0iMTEuMDc0Ii8+CjxyZWN0IHg9IjIzMi40NCIgeT0iMzQzLjE5NSIgc3R5bGU9ImZpbGw6I0Y5NEI1NDsiIHdpZHRoPSIxNjUuNDU3IiBoZWlnaHQ9IjQ2LjE0MiIvPgo8Zz4KCTxyZWN0IHg9Ijk2LjA0NSIgc3R5bGU9ImZpbGw6I0Y5QzU3MzsiIHdpZHRoPSI0My44MjgiIGhlaWdodD0iNDcuNTY5Ii8+Cgk8cmVjdCB4PSI5Ni4wNDUiIHk9IjY4Ljk3OSIgc3R5bGU9ImZpbGw6I0Y5QzU3MzsiIHdpZHRoPSI0My44MjgiIGhlaWdodD0iMzIwLjM1OCIvPgo8L2c+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiM4MDgwODA7IiBwb2ludHM9IjM0NS44MTcsMjIwLjY1MSAyODYuNjAyLDE1NC40NDQgMjg2LjYwMiw1MS4yNiAyNzQuMjk4LDUxLjI2IDI3NC4yOTgsMTU0LjQ5OSAgIDIxNi44OTQsMjIwLjcyMyAyMjYuMTkxLDIyOC43ODIgMjgwLjUyMywxNjYuMTAzIDMzNi42NDQsMjI4Ljg1MyAiLz4KPHJlY3QgeD0iMi40NyIgeT0iMzg2Ljk5OCIgc3R5bGU9ImZpbGw6I0IzQjNCMzsiIHdpZHRoPSI1MDcuMDY1IiBoZWlnaHQ9IjExLjA3NCIvPgo8cmVjdCB4PSIyMDEuMjQ4IiB5PSIyMDcuODU4IiBzdHlsZT0iZmlsbDojRjk0QjU0OyIgd2lkdGg9IjE2MC4yOSIgaGVpZ2h0PSI0Ni4xNDIiLz4KPHBvbHlnb24gc3R5bGU9ImZpbGw6I0Y5QzU3MzsiIHBvaW50cz0iMTM5Ljg2NywzNC45ODEgOTYuMDM5LDM0Ljk4MSA2NC4xNTksMzQuOTgxIDY0LjE1OSw3OC44MjIgOTYuMDM5LDc4LjgyMiAxMzkuODY3LDc4LjgyMiAgIDMxMi4zMjcsNzguODIyIDMxMi4zMjcsMzQuOTgxICIvPgo8cmVjdCB4PSI5Ni4wNDUiIHk9Ijc4LjgyMiIgc3R5bGU9ImZpbGw6I0UyQUI1QTsiIHdpZHRoPSI0My44MjgiIGhlaWdodD0iMTUuOTk2Ii8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="/>
					</div>
					
					<div class="info-box">
						<h2 class="title">{Productnaam}</h2>
						<!-- <b class="client">Zelfstudie</b> -->
						<p class="client"><b>Voor: </b>{Opdrachtgever}</p>

						<div class="rating-box">
							<div class="score">
								{0,0}
							</div>
							<div class="score-rating">{
								<i class="material-icons">star</i>
								<i class="material-icons">star</i>
								<i class="material-icons">star</i>
								<i class="material-icons">star_half</i>
								<i class="material-icons">star_border</i>
							}</div>
							<div class="score-stats">
								<p>
									<i class="material-icons">person</i>
									<span>{1.203.203}</span>
									in totaal
								</p>
							</div>
						</div>

						<div class="footer">
							<a href="#">
								<button class="btn btn-raised btn-secondary">
									Bekijk de demo
								</button>
							</a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ab suscipit in rem reprehenderit? Libero expedita quasi veniam amet, beatae temporibus iusto eius. Animi explicabo error fugit, maxime amet rem?</p>

			</div>
			
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="card">
			<div class="card-content">
				<h2 class="card-title">
					Gerelateerde producten
				</h2>
			</div>
		</div>
	</div>
</div>

@include('includes.footer')
@endsection