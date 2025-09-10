@extends('Admin.layout')
@push('title')
    <title>Show Categories</title>
@endpush
@section('admin_content')
<main class="flex-1 p-6 space-y-10">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Categories</h1>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200">ID</th>
                    <th class="py-2 px-4 border-b border-gray-200">Name</th>
                    <th class="py-2 px-4 border-b border-gray-200">Slug</th>
                    <th class="py-2 px-4 border-b border-gray-200">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $category->id }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $category->name }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $category->slug }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">
                        <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-500 hover:underline mr-2">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection