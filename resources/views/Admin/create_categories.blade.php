@extends('Admin.layout')
@push('title')
    <title>Create New Categoy</title>
@endpush
@section('admin_content')

  <h1 class="text-xl font-bold mb-4">Create Category</h1>

<section id="create_category" class="p-6 bg-white rounded-2xl shadow mt-6">
 
  <form action="/categories" method="POST" class="space-y-4">
    <!-- CSRF token if Laravel -->
    @csrf 

    <div>
      <label class="block text-gray-700 mb-1">Category Name</label>
      <input type="text" name="name" placeholder="Enter category name"
        class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div>
      <label class="block text-gray-700 mb-1">Slug</label>
      <input type="text" name="slug" placeholder="enter-category-slug"
        class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300">
    </div>

    <input type="hidden" name="user_id" value="{{ Auth::id() }}">

    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
      Save Category
    </button>
  </form>
</section>


@endsection