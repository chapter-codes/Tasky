<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href={{asset('resources/css/app.css')}}>
</head>
<body>
	@include('partials._header')
	{{-- The title var comes from the file which extends the layout.blade.php file --}}
	<x-title :title=$title /> 
	@yield('content')
</body>
</html>  