<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Overzicht Magazijn Jamin</h1>
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Barcode</th>
                    <th class="border-solid border-2 border-sky-400">Naam</th>
                    <th class="border-solid border-2 border-sky-400">VerpakkingsEenheid</th>
                    <th class="border-solid border-2 border-sky-400">AantalAanwezig</th>
                    <th class="border-solid border-2 border-sky-400">AllergenenInfo</th>
                    <th class="border-solid border-2 border-sky-400">LeveringsInformatie</th>
                </tr>
                @foreach ($products as $product)
                    @foreach ($product->magazijn as $magazijn)
                        <tr>
                            <td class="border-solid border-2 border-sky-400">{{ $product->Barcode }}</td>
                            <td class="border-solid border-2 border-sky-400">{{ $product->Naam }}</td>
                            <td class="border-solid border-2 border-sky-400">{{ $magazijn->VerpakkingsEenheid }}</td>
                            <td class="border-solid border-2 border-sky-400">{{ $magazijn->AantalAanwezig }}</td>
                            <td class="border-solid border-2 border-sky-400">
                                <a href="{{ route('product.show', $product) }}"><i class="fa-solid fa-x text-red-600"></i></a>
                            </td>
                            <td class="border-solid border-2 border-sky-400">
                                <a href="{{ route('product.levering', $product) }}"><i class="fa-solid text-blue-500 fa-question"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
            <a href="{{ route('home') }}" class="mt-5 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">home</a>
        </div>
</x-app-layout>