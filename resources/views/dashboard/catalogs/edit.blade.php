<x-dashboard.layout>
    <x-slot:titlePage>Edit Catalog</x-slot:titlePage>

    <form method="POST" action="{{ route('catalogs.update', $catalog->id) }}" enctype="multipart/form-data"
        class="max-w-lg mx-auto p-6 bg-white rounded shadow mt-5">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $catalog->title) }}"
                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('title') border-red-500 @enderror"
                placeholder="Catalog title" required />
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="excerpt" class="block mb-2 text-sm font-medium text-gray-900">Excerpt</label>
            <textarea id="excerpt" name="excerpt" rows="2"
                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('excerpt') border-red-500 @enderror"
                placeholder="Short description for catalog preview"
                required>{{ old('excerpt', $catalog->excerpt) }}</textarea>
            @error('excerpt')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="header" class="block mb-2 text-sm font-medium text-gray-900">Header Image</label>

            @if($catalog->header)
                <div class="mb-3">
                    <img src="{{ asset('storage/' . $catalog->header) }}" alt="Header Preview"
                        class="w-48 h-28 object-cover rounded border" />
                </div>
            @endif

            <div>
                <input type="file" id="header" name="header"
                    class="block w-full text-sm text-gray-900 rounded-lg cursor-pointer bg-gray-50 focus:outline-none @error('header') border-red-500 @enderror"
                    accept="image/*" />
            </div>
            @error('header')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
            <textarea id="description" name="description" rows="4"
                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('description') border-red-500 @enderror"
                placeholder="Catalog description" required>{{ old('description', $catalog->description) }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
            <input type="number" id="price" name="price" value="{{ old('price', $catalog->price) }}" min="0" step="1"
                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('price') border-red-500 @enderror"
                placeholder="Price" required />
            @error('price')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-900">Status</label>
            <div class="flex gap-4">
                <label class="inline-flex items-center">
                    <input type="radio" name="status" value="publish" {{ old('status', $catalog->status) == 'publish' ? 'checked' : '' }} class="form-radio text-blue-600" />
                    <span class="ml-2">Publish</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="status" value="draft" {{ old('status', $catalog->status) == 'draft' ? 'checked' : '' }} class="form-radio text-blue-600" />
                    <span class="ml-2">Draft</span>
                </label>
            </div>
            @error('status')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"
            class="w-full py-2 px-4 bg-rose-500 hover:bg-rose-700 text-white font-semibold rounded-lg">Update
            Catalog</button>
    </form>
</x-dashboard.layout>