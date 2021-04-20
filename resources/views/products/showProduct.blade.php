@extends('index')

@section('content')
    <div class="container" style="margin: 5% 0% 4% 15%;">
        <div class="row">
            <!-- categories star -->
            <div class="col-12 col-md-3 mb-2">
                <h1 class="h4 text-uppercase">Categories</h1>
                <ul class="list-group">
                    @foreach ($categories as $category)
                        <li class="list-group-item list-group-item-action"><a
                                href="{{ route('category.show', $category) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!--End categories star -->

            <!-- product list -->
            <div class="col-12 col-md-3 mb-2">
                <img src="{{ asset('images/' . $product->image) }}" alt="$product->image" class="w-100 d-block rounded	">
            </div>

            <div class="col-12 col-md-6">
                <div class="ml-5">
                    <h1 class="h2">{{ $product->name }}</h1>
                    <p class="lead">category: <b>{{ $product->category->name }}</b></p>
                    <div class="mt-3 ml-2 lead">
                        <form action="">
                            <p class="lead my-3">price: <b>{{ number_format($product->price, 0, ',', '') }} CFA</b></p>
                            <div class="form-group row">
                                <label for="Quantity" class="d-none d-md-block col-12 col-md-2">Quantity</label>
                                <input type="number" class="form-control col-11 col-md-2 mb-2 mx-3" value="1" required>
                            </div>
                            <a href="#" class="btn btn-info form-control col-12 col-md-3 mb-3">Add to cart <i
                                    class="fas fa-shopping-cart"></i></a>
                        </form>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
            <!--End product list -->
        </div>
        @if (!$product->view_other_products->isEmpty())
            <div class="row">
                <h3 class="text-center h1 mt-3">Vous aimerez aussi</h3>
            </div>
            <div class="row">
                @foreach ($product->view_other_products as $product_view)
                    <div class="col-12 col-md-3 my-2" id="myTable">
                        <div class="card">
                            <img src="{{ asset('images/' . $product_view->image) }}" alt="{{ $product_view->name }}"
                                class="card-img-top">
                            <div class="card-body">
                                <p class="card-title">{{ $product_view->name }}</p>
                                <p class="text-muted">Category : {{ $product_view->category->name }}</p>
                                <p class="text-danger police">{{ number_format($product_view->price, 0) }} CFA</p>
                                <a href="{{ route('product.show', $product_view) }}" class="text-muted police"><i
                                        class="fas fa-eye text-warning"></i> Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
