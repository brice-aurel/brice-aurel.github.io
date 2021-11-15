<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach (auth()->user()->orders as $order)
                        <div class="shadow-md border-2 max-w-md hover:bg-blue-100 mb-6">
                            <div class=" border-bottom-2 border-black p-2 bg-gray-300 rounded-t-md text-xl">
                                Commande passee le {{ $order->created_at->format('d/m/Y à H:i') }}
                                d'un montant de <strong>{{ getPrice($order->amount) }}</strong>
                            </div>
                            <div class="p-2">
                            <h6 class="font-semibold text-xl pb-2">Liste des Produits</h6>
                                @foreach (unserialize($order->products) as $product)
                                    <div class="font-semiblold text-gray-700">Nom du produit : {{ $product[0] }}</div>
                                    <div class="font-semiblold text-gray-700">Prix : {{ getPrice($product[1]) }}</div>
                                    <div class="font-semiblold text-gray-700">Quantite : {{ $product[2] }}</div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    <div class="mt-4"><a class="text-blue-400" href="{{ route('product.index') }}">Retour vers la liste des produits</a></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
