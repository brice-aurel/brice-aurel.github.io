@extends('index')

@section('content')

    <section class="container">
        @if (session('success'))
            <div class="alert alert-success mb-2">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <div>
            <h1 class="display-2">Merci!</h1>
            <p class="h4">Votre commande a ete traite avec succes.</p>
        </div>
    </section>

@endsection
