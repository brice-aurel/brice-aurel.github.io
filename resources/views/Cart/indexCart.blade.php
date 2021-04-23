@extends('index')

@section('content')
    <div class="main">
        <section class="py-5">
            <div class="container">
                <h1 class="jumbotron-heading"><span class="badge badge-primary">Votre Panier</span></h1>
                <table class="table table-bordered table-responsive-sm">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Qte</th>
                            <th>P.U</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartCollection as $item)    
                        <tr>
                            <td>
                                <img width="110" src="{{asset('images/'. $item->attributes['photo'])}}" alt="" class="rounded rounded-circle image-thumbnail">
                                <h1 class="h4 pt-1">{{$item->name}}</h1>
                            </td>
                            <td>{{$item->quantity}}</td>
                            <td>{{number_format($item->price, 2)}} CFA</td>
                            <td>{{number_format($item->price * $item->quantity, 2)}} CFA</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>Total HT</td>
                            <td>{{number_format($total, 2)}} CFA</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td>TVA (20%)</td>
                            <td>{{$tva}} CFA</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td>Total TTC</td>
                            <td>{{number_format($total + $tva, 2)}} CFA</td>
                        </tr>
                    </tfoot>
                </table>

                <a href="#" class="btn btn-block btn-outline-dark">Order</a>
            </div>
        </section>
    </div>
@endsection
