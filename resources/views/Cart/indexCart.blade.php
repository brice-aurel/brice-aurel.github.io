@extends('index')

@section('content')
    <div class="main">
        <section class="py-5">
            <div class="container">
                @if (session('success'))
                   <div class="alert alert-danger">{{session('success')}}</div>
                @endif
                <h1 class="jumbotron-heading"><span class="badge badge-primary">Votre Panier</span></h1>
                @if (Cart::getContent()->isNotEmpty())
                    <table class="table table-bordered table-responsive-sm">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Qte</th>
                                <th>P.U</th>
                                <th>Total</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::getContent() as $item)
                                <tr>
                                    <td>
                                        <img width="110" src="{{ asset('images/' . $item->attributes['photo']) }}" alt=""
                                            class="rounded rounded-circle image-thumbnail">
                                        <h1 class="h4 pt-1">{{ $item->name }}</h1>
                                    </td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{getPrice($item->price) }}</td>
                                    <td>{{ getPrice($item->price * $item->quantity) }}</td>
                                    <td>
                                        <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"><i class="fa fa-trash bg-red"></i></button>
                                        </form>
                                    </td>
                                    {{-- <td>{{number_format($total + $tva, 2)}} CFA</td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2"></td>
                                <td>Total HT</td>
                                <td>{{ $subTotal = getPrice(Cart::getSubTotal()) }} </td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>TVA (20%)</td>
                                <td>{{ $condition->getValue() }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>Total TTC</td>
                                <td>{{getPrice(Cart::getTotal())}} CFA</td>
                            </tr>
                        </tfoot>
                    </table>
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-block btn-outline-dark">Order</button>
                    </form>
                @else
                    <h1 class="display-2">{{ 'No products in the Shopping-cart' }}</h1>
                @endif
            </div>
        </section>
    </div>
@endsection
