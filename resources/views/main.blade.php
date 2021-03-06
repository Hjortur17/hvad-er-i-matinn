<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="shortcut icon" type="image/png" href="/favicon.png"/>

	<title>Hvað skal hafa í matinn?</title>
	<meta name="theme-color" content="#E67635">
	<meta name="description" content="Veistu ekki hvað þú ætlar að hafa í matinn? Láttu okkur koma upp með uppástungu">

	<!-- Fonts -->
	<link href="/css/app.css" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156510698-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-156510698-1');
	</script>
</head>
<body>
	<div id="app">
		<homepage></homepage>
	</div>

	<script src="/js/app.js" type="text/javascript"></script>
</body>
</html>
