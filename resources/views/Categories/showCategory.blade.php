@extends('index')

@section('content')

    <div class="bg-warning pt-5 pb-5">
        <h1 class="text-center">Our products ({{ $products->count() }})</h1>
    </div>

    <div class="container py-4">
        <div class="row">
            <!-- categories star -->
            <div class="col-12 col-md-3 mb-2">
                <h1 class="h4 text-uppercase">Categories</h1>
                <ul class="list-group">
                    @foreach ($categories as $category)
                        <li class="list-group-item list-group-item-action"><a href="{{ route('category.show', $category) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!--End categories star -->

            <!-- Show all products -->
            @if (!$products->isEmpty())
                @foreach ($products as $product)
                    <div class="col-12 col-md-3 my-2" id="myTable">
                        <div class="card">
                            <img src="{{ asset('images/' . $product->image) }}" alt="{{$product->name}}" class="card-img-top">
                            <div class="card-body">
                                <p class="card-title">{{ $product->name }}</p>
                                <p class="text-muted">Category : {{ $product->category->name }}</p>
                                <p class="text-danger police">{{ number_format($product->price, 0) }} CFA</p>
                                <a href="{{ route('product.show', $product) }}" class="text-muted police"><i
                                        class="fas fa-eye text-warning"></i> Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>{{ 'Sorry, no products available for the moment !!!' }}</p>
            @endif
            <!-- End Show all products -->
        </div>
    </div>
@endsection
