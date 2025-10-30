<x-dashboard.layout>
    <x-slot:titlePage> {{ $titlePage }} </x-slot:titlePage>

    <div class="p-4 bg-white rounded-lg">
        <form action="{{ route('purchasings.update', $purchasing) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <h3 class="font-semibold mb-2">Purchase Details:</h3>
                <p><span class="font-medium">Customer:</span> {{ $purchasing->user->name }}</p>
                <p><span class="font-medium">Catalog:</span> {{ $purchasing->catalog->name }}</p>
                <p><span class="font-medium">Wedding Date:</span> {{ $purchasing->wedding_date->format('d M Y') }}</p>
                <p><span class="font-medium">Address:</span> {{ $purchasing->address }}</p>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Update Status</label>
                <select name="status" id="status"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 @error('status') border-red-500 @enderror">
                    <option value="processed" @selected($purchasing->status === 'processed')>Processed</option>
                    <option value="accepted" @selected($purchasing->status === 'accepted')>Accepted</option>
                    <option value="reject" @selected($purchasing->status === 'reject')>Reject</option>
                </select>
                @error('status')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-3">
                <a href="{{ route('purchasings.index') }}"
                    class="bg-gray-50 hover:bg-gray-100 text-gray-500 font-medium rounded-lg text-sm px-5 py-2.5">Cancel</a>
                <button type="submit"
                    class="bg-primary-500 hover:bg-primary-600 text-white font-medium rounded-lg text-sm px-5 py-2.5">Update
                    Status</button>
            </div>
        </form>
    </div>
</x-dashboard.layout>