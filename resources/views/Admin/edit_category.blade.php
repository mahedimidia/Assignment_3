@extends('admin.layout')
@push('title')
    <title>Edit Category</title>
@endpush
@section('admin_content')

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Edit Category</h1>
        <form action="{{ route('categories.update', $category->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Category</button>
            </div>
        </form>
    </div>


@endsection