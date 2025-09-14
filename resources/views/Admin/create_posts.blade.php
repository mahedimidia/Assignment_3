@extends('Admin.layout')
@push('title')
    <title>Create New Post</title>
@endpush
@section('admin_content')
<main class="flex-1 p-6 space-y-10">
      <!-- Create Post Section -->
<h1 class="text-xl font-bold mb-4">Create Post</h1>

<section id="create_post" class="p-6 bg-white rounded-2xl shadow mt-6">


  <form action="{{route('posts.store')}}" method="POST" class="space-y-4">
    @csrf

    <div>
      <label class="block text-gray-700 mb-1">Title</label>
      <input type="text" name="title" placeholder="Enter post title"
        class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div>
      <label class="block text-gray-700 mb-1">Author</label>
      <input type="text" name="author" placeholder="Enter author name"
        class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div>
      <label class="block text-gray-700 mb-1">Body</label>
      <textarea name="body" rows="5" placeholder="Write your post content..."
        class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300" required></textarea>
    </div>

    <div>
      <label class="block text-gray-700 mb-1">Category</label>
      <select name="category_id" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300" required>
        <option value="">Select Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>        
        @endforeach
      </select>
    </div>

    <input type="hidden" name="user_id" value="{{ Auth::id() }}">

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
      Save Post
    </button>
  </form>
</section>
</main>

@endsection