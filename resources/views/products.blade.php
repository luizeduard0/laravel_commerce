<ul>
@foreach($products as $product)
	<li><a href="{{ route('product',['id'=>$product->id]) }}">{{ $product->name }}</a></li>
@endforeach
</ul>