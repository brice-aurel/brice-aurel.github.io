@extends('index')

@section('content')

    @if (session('success'))
        <div class="alert alert-success"> {{session('success')}} </div>
    @endif
    <div class="bg-warning pt-5 pb-5">
        <h1 class="text-center">Our products ({{ $products->count() }})</h1>
    </div>
        <div style="margin: 10px 25px 10px 25px;">
            <div class="row py-4 px-4">
                <!-- categories star -->
                <div class="col-12 col-md-2 mb-2">
                    <h1 class="h4 text-uppercase">Categories</h1>
                    <ul class="list-group">
                        @foreach ($categories as $category)
                            <li class="list-group-item list-group-item-action"><a
                                    href="{{ route('category.show', $category) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!--End categories star -->

                <!-- Show all products -->
                @if (!$products->isEmpty())
                    @foreach ($products as $product)
                        <div class="col-12 col-md-2 my-2" id="myTable">
                            <div class="card">
                                {{-- <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="card-img-top"> --}}
                                    <img src="{{ $product->image }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-title"><a href="{{ route('product.show', $product) }}">{{ $product->name }}</a></p>
                                    <p class="text-muted d-none d-lg-block">Category : {{ $product->category->name }}</p>
                                    <p class="text-danger police">{{ getPrice($product->price) }}</p>
                                    <a href="{{ route('product.show', $product) }}" class="d-none d-lg-block text-muted police"><i
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
            <div class="my-10 py-4 w-14 h-10">
                {{ $products->links() }}
            </div>
@endsection


