@extends('Admin.layout')
@push('title')
   <title> Show Posts</title>
@endpush

@section('admin_content')
<main class="flex-1 p-6 space-y-10">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Posts</h1>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200">ID</th>
                    <th class="py-2 px-4 border-b border-gray-200">Title</th>
                    <th class="py-2 px-4 border-b border-gray-200">Author</th>
                    <th class="py-2 px-4 border-b border-gray-200">Body</th>
                    <th class="py-2 px-4 border-b border-gray-200">Category</th>
                    <th class="py-2 px-4 border-b border-gray-200">User</th>
                    <th class="py-2 px-4 border-b border-gray-200">Status</th>
                    <th class="py-2 px-4 border-b border-gray-200">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $post->id }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $post->title }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $post->author }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ Str::limit($post->body, 50) }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $post->category->name ?? 'N/A' }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $post->user->name ?? 'N/A' }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ ucfirst($post->status) }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">
                        <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500 hover:underline mr-2">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
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