@extends('Admin.layout')

@push('title')
    <title>Show Categories</title>
@endpush

@section('admin_content')

    <div class="container mx-auto p-6 bg-white rounded-2xl shadow-lg border border-gray-100">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Categories</h1>
            <a href="{{ route('categories.create') }}" 
               class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 shadow transition">
                + Add Category
            </a>
        </div>

        <!-- Search Bar (optional, dynamic in future) -->
        <div class="mb-4">
            <input type="text" placeholder="Search categories..." 
                class="w-full md:w-1/3 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
        </div>

        <!-- Categories Table -->
        <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100 text-gray-700 text-sm uppercase">
                    <tr>
                        <th class="py-3 px-4 text-left">#</th>
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Slug</th>
                        <th class="py-3 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 divide-y divide-gray-200">
                    @forelse($categories as $category)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4 font-medium">{{ $category->name }}</td>
                            <td class="py-3 px-4 text-sm text-gray-500">{{ $category->slug }}</td>
                            <td class="py-3 px-4 text-center space-x-2">
                                <a href="{{ route('categories.edit', $category->id) }}" 
                                   class="inline-block px-3 py-1 text-sm rounded-lg bg-blue-100 text-blue-600 hover:bg-blue-200">
                                    Edit
                                </a>
                                <form action="{{ route('categories.destroy', $category->id) }}" 
                                      method="POST" 
                                      class="inline"
                                      onsubmit="return confirm('Are you sure you want to delete this category?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                        class="inline-block px-3 py-1 text-sm rounded-lg bg-red-100 text-red-600 hover:bg-red-200">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-6 px-4 text-center text-gray-500">
                                No categories found. 
                                <a href="{{ route('categories.create') }}" class="text-blue-600 hover:underline">Create one</a>.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
