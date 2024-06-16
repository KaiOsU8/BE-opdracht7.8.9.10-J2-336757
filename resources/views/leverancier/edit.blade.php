<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl mt-20 mb-4">Wijzig Leveranciergegevens</h1>
        <form action="{{ route('leverancier.update', $leverancier->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="Naam">Naam</label>
                <input type="text" id="Naam" name="Naam" value="{{ $leverancier->Naam }}">
            </div>
            <div>
                <label for="ContactPersoon">ContactPersoon</label>
                <input type="text" id="ContactPersoon" name="ContactPersoon" value="{{ $leverancier->ContactPersoon }}">
            </div>
            <div>
                <label for="LeverancierNummer">LeverancierNummer</label>
                <input type="text" id="LeverancierNummer" name="LeverancierNummer" value="{{ $leverancier->LeverancierNummer }}">
            </div>
            <div>
                <label for="Mobiel">Mobiel</label>
                <input type="text" id="Mobiel" name="Mobiel" value="{{ $leverancier->Mobiel }}">
            </div>
            <div>
                <label for="Straat">Straat</label>
                <input type="text" id="Straat" name="Straat" value="{{ $leverancier->contact->Straat }}">
            </div>
            <div>
                <label for="Huisnummer">Huisnummer</label>
                <input type="text" id="Huisnummer" name="Huisnummer" value="{{ $leverancier->contact->Huisnummer }}">
            </div>
            <div>
                <label for="Postcode">Postcode</label>
                <input type="text" id="Postcode" name="Postcode" value="{{ $leverancier->contact->Postcode }}">
            </div>
            <div>
                <label for="Stad">Stad</label>
                <input type="text" id="Stad" name="Stad" value="{{ $leverancier->contact->Stad }}">
            </div>
            <button class="mt-5 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600" type="submit">Sla Op</button>
        </form>
        <a href="{{ route('home') }}" class="mt-10 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">home</a>
    </div>
</x-app-layout>