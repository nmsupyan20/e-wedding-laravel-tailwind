<x-dashboard.layout>
    <x-slot:titlePage>{{ $titlePage }}</x-slot:titlePage>

    @php
        $menuLabels = ['No', 'Customer', 'Catalog', 'Wedding Date', 'Address', 'Status', 'Action'];
    @endphp

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
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
                @forelse($purchases as $i => $purchase)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $purchase->user->name }}</td>
                        <td class="px-6 py-4">{{ $purchase->catalog->title }}</td>
                        <td class="px-6 py-4">{{ $purchase->wedding_date->format('d M Y') }}</td>
                        <td class="px-6 py-4">{{ $purchase->address }}</td>
                        <td class="px-6 py-4">
                            <span @class([
                                'px-2 py-1 rounded text-xs font-medium',
                                'bg-yellow-100 text-yellow-800' => $purchase->status === 'processed',
                                'bg-green-100 text-green-800' => $purchase->status === 'accepted',
                                'bg-red-100 text-red-800' => $purchase->status === 'reject',
                            ])>
                                {{ ucfirst($purchase->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('purchasings.edit', $purchase) }}"
                                class="text-blue-600 hover:underline">Update Status</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center">No purchases yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $purchases->links() }}
    </div>
</x-dashboard.layout>