<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Hvað skal hafa í matinn?</title>

	<!-- Fonts -->
	<link href="/css/app.css" rel="stylesheet">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-ekOryaXPbeCpWQNxMwSWVvQ0+1VrStoPJq54shlYhR8HzQgig1v5fas6YgOqLoKz" crossorigin="anonymous">
</head>
<body>
	<div id="app">
		<survey></survey>
	</div>
	
	<script src="/js/app.js" type="text/javascript"></script>
</body>
</html>
