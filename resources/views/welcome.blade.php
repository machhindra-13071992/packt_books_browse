<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="resources/css/style.css">
    </head>
    <body>
		   <form class="example" action="{{ route('search') }}" style="margin:auto;max-width:300px">
			  <input type="text" placeholder="Search titles" name="search">
			  <button type="submit"><i class="fa fa-search"></i></button>
			</form>
    </body>
</html>
