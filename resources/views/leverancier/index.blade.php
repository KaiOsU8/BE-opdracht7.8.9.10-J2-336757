<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl mt-20 mb-10">Overzicht leveranciers</h1>
        <ul class="divide-y mb-10">
            <a href="{{ route('leverancier.overzicht') }}" class="underline text-xl">Leverancier Details</a>
        </ul>
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Naam</th>
                    <th class="border-solid border-2 border-sky-400">ContactPersoon</th>
                    <th class="border-solid border-2 border-sky-400">LeverancierNummer</th>
                    <th class="border-solid border-2 border-sky-400">Mobiel</th>
                    <th class="border-solid border-2 border-sky-400">AantalVerschillendeProducten</th>
                    <th class="border-solid border-2 border-sky-400">ToonProducten</th>
                </tr> 
                @foreach ($leveranciers as $leverancier)
                    <tr>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->Naam }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->ContactPersoon }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->LeverancierNummer }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->Mobiel }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->productPerLeverancier->count() }}</td>
                        <td class="border-solid border-2 border-sky-400">
                            <a href="{{ route('leverancier.show', $leverancier->id) }}"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <a href="{{ route('home') }}" class="mt-5 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">home</a>
    </div>
</x-app-layout>