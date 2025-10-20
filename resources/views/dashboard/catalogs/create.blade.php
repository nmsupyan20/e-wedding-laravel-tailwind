<x-dashboard.layout>
    <x-slot:titlePage>{{ $titlePage }}</x-slot:titlePage>

    <form method="post" action="{{ route('catalogs.store') }}" enctype="multipart/form-data"
        class="max-w-lg mx-auto p-6 bg-white rounded shadow mt-5">
        @csrf
        <div class="mb-4">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}"
                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('title') border-red-500 @enderror"
                placeholder="Catalog title" required />
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="header" class="block mb-2 text-sm font-medium text-gray-900">Header Image</label>
            <input type="file" id="header" name="header"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none @error('header') border-red-500 @enderror"
                accept="image/*" />
            @error('header')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
            <textarea id="description" name="description" rows="4"
                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('description') border-red-500 @enderror"
                placeholder="Catalog description" required>{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" min="0" step="1"
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
                    <input type="radio" name="status" value="publish" {{ old('status') == 'publish' ? 'checked' : '' }} class="form-radio text-blue-600" />
                    <span class="ml-2">Publish</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="status" value="draft" {{ old('status', 'draft') == 'draft' ? 'checked' : '' }}
                        class="form-radio text-blue-600" />
                    <span class="ml-2">Draft</span>
                </label>
            </div>
            @error('status')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"
            class="w-full py-2 px-4 bg-rose-500 hover:bg-rose-700 text-white font-semibold rounded-lg">Create
            Catalog</button>
    </form>
</x-dashboard.layout>