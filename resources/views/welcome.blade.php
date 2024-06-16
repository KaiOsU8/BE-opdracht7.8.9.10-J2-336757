<x-app-layout>
    <div class="max-w-5xl mx-auto py">
        <ul class="divide-y">
            <a href="{{ route('product.index') }}" class="text-4xl">Overzicht Magazijn Jamin</a>
        </ul>
        <ul class="divide-y">
            <a href="{{ route('leverancier.index') }}" class="text-4xl">Overzicht Leveranciers</a>
        </ul>
    </div>
</x-app-layout>