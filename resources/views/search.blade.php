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
<div id="cover">
<form action="{{ route('search') }}" method="GET">
<div class="tb">
<div class="td"><input type="text" placeholder="Search" required name="search"></div>
<div class="td" id="s-cover">
<button type="submit">
  <div id="s-circle"></div>
  <span></span>
</button>
</div>
</div>
</form>
</div>
<div class="producttop">
@if($products)
		<div class="products products-table">
		@foreach($products as $product)	
			<div class="product">
				<div class="product-content">
					<h3>
					{{ $product->title }}
					</h3>
					<p class="product-text price">{{ $product->publication_date }}</p>
					<p class="product-text genre">{{ $product->language }}</p>
				</div>
			</div>
			@endforeach
		</div>
@endif
</div>	
</body>
</html>	