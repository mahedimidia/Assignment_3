@extends('Admin.layout')

@push('title')
   <title>Show Posts</title>
@endpush

@section('admin_content')
<main class="flex-1 p-6 space-y-10 bg-gray-50 min-h-screen">
    <div class="container mx-auto p-6 bg-white rounded-2xl shadow-lg border border-gray-100">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Posts</h1>
            <a href="{{ route('posts.create') }}" 
               class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 shadow transition">
                + Add Post
            </a>
        </div>

        <!-- Search Bar (future ready) -->
        <div class="mb-4">
            <input type="text" placeholder="Search posts..." 
                class="w-full md:w-1/3 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
        </div>

        <!-- Posts Table -->
        <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100 text-gray-700 text-sm uppercase">
                    <tr>
                        <th class="py-3 px-4 text-left">#</th>
                        <th class="py-3 px-4 text-left">Title</th>
                        <th class="py-3 px-4 text-left">Author</th>
                        <th class="py-3 px-4 text-left">Body</th>
                        <th class="py-3 px-4 text-left">Category</th>
                        <th class="py-3 px-4 text-left">User</th>
                        <th class="py-3 px-4 text-left">Status</th>
                        <th class="py-3 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 divide-y divide-gray-200">
                    @forelse ($posts as $post)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-3 px-4">{{ $posts->firstItem() + $loop->index }}</td>
                            <td class="py-3 px-4 font-medium">{{ $post->title }}</td>
                            <td class="py-3 px-4">{{ $post->author }}</td>
                            <td class="py-3 px-4 text-sm text-gray-500">
                                {{ \Illuminate\Support\Str::limit($post->body, 50) }}
                            </td>
                            <td class="py-3 px-4">{{ $post->category->name ?? 'N/A' }}</td>
                            <td class="py-3 px-4">{{ $post->user->name ?? 'N/A' }}</td>

                            <!-- Status -->
                            <td class="py-3 px-4 text-center">
                                @can('status-update', $post)
                                    <form action="{{ route('posts.toggleStatus', $post->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="px-3 py-1 text-xs rounded-full
                                            {{ $post->status === 'published'
                                                ? 'bg-green-100 text-green-700 hover:bg-green-200'
                                                : 'bg-yellow-100 text-yellow-700 hover:bg-yellow-200' }}">
                                            {{ ucfirst($post->status) }}
                                        </button>
                                    </form>
                                @else
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        {{ $post->status }}
                                    </span>
                                @endcan
                            </td>

                           
                            <!-- Actions -->
                                <td class="py-3 px-4 text-center space-x-2">
                                    @can('permission', $post)
                                        <a href="{{ route('posts.edit', $post->id) }}" 
                                        class="inline-block px-3 py-1 text-sm rounded-lg bg-blue-100 text-blue-600 hover:bg-blue-200">
                                            Edit
                                        </a>

                                        <form action="{{ route('posts.destroy', $post->id) }}" 
                                            method="POST" 
                                            class="inline"
                                            onsubmit="return confirm('Are you sure you want to delete this post?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                class="inline-block mt-1 px-3 py-1 text-sm rounded-lg bg-red-100 text-red-600 hover:bg-red-200">
                                                Delete
                                            </button>
                                        </form>
                                    @endcan
                                </td>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="py-6 px-4 text-center text-gray-500">
                                No posts found. 
                                <a href="{{ route('posts.create') }}" class="text-blue-600 hover:underline">Create one</a>.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </div>
</main>
@endsection
 