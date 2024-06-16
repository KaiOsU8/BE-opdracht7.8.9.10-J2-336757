<x-app-layout>
    <div class="flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Leveringsinformatie</h1>
            @foreach ($product->productPerLeverancier as $productPerLeverancier)
                <h1 class="text-center text-xl m-5">Leverancier: {{ $productPerLeverancier->leverancier->Naam }}</h1>
                <h1 class="text-center text-xl m-5">Contactpersoon: {{ $productPerLeverancier->leverancier->ContactPersoon }}</h1>
                <h1 class="text-center text-xl m-5">Leveranciernummer: {{ $productPerLeverancier->leverancier->LeverancierNummer }}</h1>
                <h1 class="text-center text-xl m-5">Mobiel: {{ $productPerLeverancier->leverancier->Mobiel }}</h1>
                @break
            @endforeach
        <table class="text-center flex justify-center">
            <tr class="text-xl">
                <th class="border-solid border-2 border-sky-400">Naam product</th>
                <th class="border-solid border-2 border-sky-400">Datum Laatste levering</th>
                <th class="border-solid border-2 border-sky-400">Aantal</th>
                <th class="border-solid border-2 border-sky-400">Eerstvolgende levering</th>
            </tr>
                @foreach ($product->productPerLeverancier as $levering)
                    <tr>
                        <td class="border-solid border-2 border-sky-400">{{ $levering->product->Naam }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $levering->DatumLevering }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $levering->Aantal }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $levering->DatumEerstVolgendeLevering }}</td>
                    </tr>
                @endforeach
        </table>
        <a href="{{ route('product.index') }}" class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Terug naar Producten</a>
    </div>
</x-app-layout>