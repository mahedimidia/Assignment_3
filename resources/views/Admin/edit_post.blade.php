@extends('Admin.layout')
@push('title')
    <title>Edit Post</title>
@endpush
@section('admin_content')
<main class="flex-1 p-6 space-y-10">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Edit Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                <input type="text" name="author" id="author" value="{{ old('author', $post->author) }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                @error('author')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                <textarea name="body" id="body" rows="5" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">{{ old('body', $post->body) }}</textarea>
                @error('body')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category_id" id="category_id" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 shadow transition">
                    Update Post
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
