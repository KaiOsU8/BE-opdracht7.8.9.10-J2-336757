<x-app-layout>
    <script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-5">Geleverde Producten</h1>
        <p class="text-center text-xl mb-1">Leverancier: {{ $leverancier->Naam }}</p>
        <p class="text-center text-xl mb-1">ContactPersoon: {{ $leverancier->ContactPersoon }}</p>
        <p class="text-center text-xl mb-1">LeverancierNummer: {{ $leverancier->LeverancierNummer }}</p>
        <p class="text-center text-xl mb-10">Mobiel: {{ $leverancier->Mobiel }}</p>
        <table class="text-center flex justify-center">
            <tr class="text-xl">
                <th class="border-solid border-2 border-sky-400">Naam</th>
                <th class="border-solid border-2 border-sky-400">DatumLevering</th>
                <th class="border-solid border-2 border-sky-400">AantalInMagazijn</th>
                <!-- <th class="border-solid border-2 border-sky-400">VerpakkingsEenheid</th> -->
                <th class="border-solid border-2 border-sky-400">DatumEerstVolgendeLevering</th>
                <th class="border-solid border-2 border-sky-400">Nieuwe Levering</th>
            </tr>
            @foreach ($x as $productPerLeverancier)
            <tr>
                <td class="border-solid border-2 border-sky-400">{{ $productPerLeverancier->product->Naam }}</td>
                <td class="border-solid border-2 border-sky-400">{{ $productPerLeverancier->DatumLevering }}</td>
                <td class="border-solid border-2 border-sky-400">{{ $productPerLeverancier->Aantal }}</td>
                <!-- <td class="border-solid border-2 border-sky-400">{{ $productPerLeverancier->VerpakkingsEenheid }}</td> -->
                <td class="border-solid border-2 border-sky-400">{{ $productPerLeverancier->DatumEerstVolgendeLevering }}</td>
                <td class="border-solid border-2 border-sky-400 text-xl">
                    <a href="{{ route('leverancier.create', ['product' => $productPerLeverancier->product->id, 'leverancier' => $productPerLeverancier->leverancier->id, 
                                'id' => $productPerLeverancier->id]) }}">+</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>