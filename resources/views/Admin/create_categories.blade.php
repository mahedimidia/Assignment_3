@extends('Admin.layout')
@push('title')
    <title>Create New Categoy</title>
@endpush
@section('admin_content')
<main class="flex-1 p-6 space-y-10">
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
        class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div>
      <label class="block text-gray-700 mb-1">User</label>
      <select name="user_id" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300" required>
        <option value="">Select User</option>
        <!-- loop users dynamically -->
        <option value="1">Admin</option>
        <option value="2">John Doe</option>
      </select>
    </div>

    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
      Save Category
    </button>
  </form>
</section>

</main>

@endsection