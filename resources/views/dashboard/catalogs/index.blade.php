<x-dashboard.layout>
    <x-slot:titlePage>{{ $titlePage }} </x-slot:titlePage>
    <div class="flex justify-end my-4">
        <a href="/dashboard/catalogs/create"
            class="flex bg-rose-500 hover:bg-rose-700 text-white rounded-md shadow-md px-4 py-2">
            <span>Tambah</span>
            <i data-feather="plus"></i>
        </a>
    </div>

    @php
        $menuLabels = ['No', 'Nama', 'Harga', 'Status', 'Created At', 'Updated_At', 'Action'];
    @endphp

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-sm text-white bg-black uppercase">
                <tr>
                    @foreach ($menuLabels as $menuLabel)
                        <th scope="col" class="px-6 py-3">
                            {{ $menuLabel }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse($catalogs as $i => $catalog)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4">{{ $catalogs->firstItem() + $i }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $catalog->title }}</td>
                        <td class="px-6 py-4">Rp {{ number_format($catalog->price, 0, ',', '.') }}</td>
                        <td class="px-6 py-4">{{ ucfirst($catalog->status) }}</td>
                        <td class="px-6 py-4">{{ $catalog->created_at->format('Y-m-d') }}</td>
                        <td class="px-6 py-4">{{ $catalog->updated_at->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 flex items-center gap-2">
                            <a href="{{ route('catalogs.edit', $catalog) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('catalogs.destroy', $catalog) }}" method="POST"
                                onsubmit="return confirm('Anda ingin menghapus katalog ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center">No catalogs yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $catalogs->links() }}
    </div>

</x-dashboard.layout>