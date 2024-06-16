<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl mt-20 mb-4">Leverancier Details</h1>
            <table class="flex justify-center">
                <tr>
                    <td class="border-solid border-2 text-xl border-sky-400 pr-2">Leverancier</td>
                    <td class="border-solid border-2 border-sky-400 px-3">{{ $leverancier->Naam }}</td>
                </tr>
                <tr>
                    <td class="border-solid border-2 text-xl border-sky-400 pr-2">ContactPersoon</td>
                    <td class="border-solid border-2 border-sky-400 px-3">{{ $leverancier->ContactPersoon }}</td>
                </tr>
                <tr>
                    <td class="border-solid border-2 text-xl border-sky-400 pr-2">LeverancierNummer</td>
                    <td class="border-solid border-2 border-sky-400 px-3">{{ $leverancier->LeverancierNummer }}</td>
                </tr>
                <tr>
                    <td class="border-solid border-2 text-xl border-sky-400 pr-2">Mobiel</td>
                    <td class="border-solid border-2 border-sky-400 px-3">{{ $leverancier->Mobiel }}</td>
                </tr>
                <tr>
                    <td class="border-solid border-2 text-xl border-sky-400 pr-2">Straat</td>
                    <td class="border-solid border-2 border-sky-400 px-3">{{ $leverancier->contact->Straat }}</td>
                </tr>
                <tr>
                    <td class="border-solid border-2 text-xl border-sky-400 pr-2">Huisnummer</td>
                    <td class="border-solid border-2 border-sky-400 px-3">{{ $leverancier->contact->Huisnummer }}</td>
                </tr>
                <tr>
                    <td class="border-solid border-2 text-xl border-sky-400 pr-2">Postcode</td>
                    <td class="border-solid border-2 border-sky-400 px-3">{{ $leverancier->contact->Postcode }}</td>
                </tr>
                <tr>
                    <td class="border-solid border-2 text-xl border-sky-400 pr-2">Stad</td>
                    <td class="border-solid border-2 border-sky-400 px-3">{{ $leverancier->contact->Stad }}</td>
                </tr>
            </table>
            <a href="{{ route('leverancier.edit', $leverancier->id) }}" class="mt-5 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">wijzig</a>
            <a href="{{ route('home') }}" class="mt-10 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">home</a>
    </div>
</x-app-layout>