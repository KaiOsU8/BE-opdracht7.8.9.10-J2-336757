<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Overzicht leveranciers Details</h1>
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Naam</th>
                    <th class="border-solid border-2 border-sky-400">ContactPersoon</th>
                    <th class="border-solid border-2 border-sky-400">LeverancierNummer</th>
                    <th class="border-solid border-2 border-sky-400">Mobiel</th>
                    <th class="border-solid border-2 border-sky-400">Details</th>
                </tr> 
                @foreach ($leveranciers as $leverancier)
                    <tr>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->Naam }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->ContactPersoon }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->LeverancierNummer }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->Mobiel }}</td>
                        <td class="border-solid border-2 border-sky-400">
                            <a href="{{ route('leverancier.overzichtshow', $leverancier->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>

            <a href="{{ route('home') }}" class="mt-5 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">home</a>

                
    </div>
</x-app-layout>