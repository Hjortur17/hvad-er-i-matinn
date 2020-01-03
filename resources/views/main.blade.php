<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Hvað skal hafa í matinn?</title>
	<meta name="description" content="Veistu ekki hvað þú ætlar að hafa í matinn? Láttu okkur koma upp með uppástungu">

	<!-- Fonts -->
	<link href="/css/app.css" rel="stylesheet">
	{{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/light.css" integrity="sha384-i+ivMdAc0+wLEnd+UdXLpYGNTbyn/0Rjz7EqmkqEOkfat5/2T+S63wn3WDk6h4Yh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/duotone.css" integrity="sha384-SnqCl1xqt09zXtBnCqJWrwMR2wbeWfxeAEB8e2QuoHdWNY1V5k0HrDi889EMHehh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/fontawesome.css" integrity="sha384-CtsKDnRWWHDhjRZ5qgpCFCGpib2FU2SChFu0xRt81grgvXq1P+lbpROQoBLxlU4o" crossorigin="anonymous"> --}}

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-ekOryaXPbeCpWQNxMwSWVvQ0+1VrStoPJq54shlYhR8HzQgig1v5fas6YgOqLoKz" crossorigin="anonymous">
</head>
<body>
	<div id="app">
		<homepage></homepage>
	</div>

	<script src="/js/app.js" type="text/javascript"></script>
</body>
</html>
