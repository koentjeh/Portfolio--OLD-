<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
		<title>@yield('title') - Koen de Bont</title>
		<link rel="shortcut icon" type="image/png" href="{{ url('img/icon/favicon.png') }}"/>

		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

		<link rel="stylesheet" href="{{ url('css/core.css') }}" media="screen" charset="utf-8">
		<link rel="stylesheet" href="{{ url('css/header.css') }}" media="screen" charset="utf-8">
		<link rel="stylesheet" href="{{ url('css/sidebar.css') }}" media="screen" charset="utf-8">
		<link rel="stylesheet" href="{{ url('css/list.css') }}" media="screen" charset="utf-8">
		<link rel="stylesheet" href="{{ url('css/card.css') }}" media="screen" charset="utf-8">
		<link rel="stylesheet" href="{{ url('css/progress.css') }}" media="screen" charset="utf-8">
		<link rel="stylesheet" href="{{ url('css/table.css') }}" media="screen" charset="utf-8">
	</head>
	<body>
		@yield('content')

		<script src="{{ url('js/script.js') }}" type="text/javascript"></script>
	</body>
</html>