<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Talen
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('admin.languages.create')}}" class="flex justify-center mb-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Voeg taal toe
                        </button>
                    </a>
                    <table class="w-full">
                        <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            <th class="text-left">Name</th>
                            <th class="text-left">Opties</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($languages as $language)
                            <tr>
                                <td>{{ $language->id }}</td>
                                <td>{{ $language->title }}</td>
                                <td><a href="{{ route('admin.languages.edit', ['language' => $language]) }}">Bewerken</a></td>
                                <td>
                                    <form action="{{ route('admin.languages.destroy', ['language'  => $language]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $language->id }}">
                                        <button type="submit">Verwijderen</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
