@extends('Admin.layout')

@push('title')
    <title>Admin Dashboard</title>
@endpush

@section('admin_content')
<main class="flex-1 p-6 space-y-10">
      <!-- Dashboard -->
      <section id="dashboard">
        <h2 class="text-xl font-bold mb-4">Dashboard Overview</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
          <div class="bg-white p-6 rounded-2xl shadow">
            <p class="text-gray-600 text-sm">Total Posts</p>
            <p class="text-xl font-bold">120</p>
          </div>
          <div class="bg-white p-6 rounded-2xl shadow">
            <p class="text-gray-600 text-sm">Categories</p>
            <p class="text-xl font-bold">8</p>
          </div>
          <div class="bg-white p-6 rounded-2xl shadow">
            <p class="text-gray-600 text-sm">Users</p>
            <p class="text-xl font-bold">342</p>
          </div>
          <div class="bg-white p-6 rounded-2xl shadow">
            <p class="text-gray-600 text-sm">Comments</p>
            <p class="text-xl font-bold">542</p>
          </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white p-6 rounded-2xl shadow">
          <h3 class="text-lg font-semibold mb-4">Quick Actions</h3>
          <div class="flex gap-3 flex-wrap">
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">New Post</button>
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg shadow hover:bg-green-700">New Category</button>
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg shadow hover:bg-purple-700">Add User</button>
          </div>
        </div>
      </section>

      <!-- Create Post -->
      <section id="create_post">
        <div class="bg-white p-6 rounded-2xl shadow">
          <h2 class="text-xl font-bold">Create Post</h2>
          <p class="text-gray-600 mt-2">Form for creating new post goes here.</p>
        </div>
      </section>

      <!-- Show Posts -->
      <section id="show_post">
        <div class="bg-white p-6 rounded-2xl shadow">
          <h2 class="text-xl font-bold">Show Posts</h2>
          <p class="text-gray-600 mt-2">List of posts will appear here.</p>
        </div>
      </section>

      <!-- Create Category -->
      <section id="create_category">
        <div class="bg-white p-6 rounded-2xl shadow">
          <h2 class="text-xl font-bold">Create Category</h2>
          <p class="text-gray-600 mt-2">Form for creating new category goes here.</p>
        </div>
      </section>

      <!-- Show Categories -->
      <section id="show_category">
        <div class="bg-white p-6 rounded-2xl shadow">
          <h2 class="text-xl font-bold">Show Categories</h2>
          <p class="text-gray-600 mt-2">List of categories will appear here.</p>
        </div>
      </section>

      <!-- Users -->
      <section id="users">
        <div class="bg-white p-6 rounded-2xl shadow">
          <h2 class="text-xl font-bold mb-4">User Management</h2>
          <table class="w-full border-collapse border border-gray-200">
            <thead>
              <tr class="bg-gray-100">
                <th class="border p-2">ID</th>
                <th class="border p-2">Name</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Role</th>
                <th class="border p-2">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border p-2 text-center">1</td>
                <td class="border p-2">Admin User</td>
                <td class="border p-2">admin@example.com</td>
                <td class="border p-2">Admin</td>
                <td class="border p-2 text-center space-x-2">
                  <button class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Edit</button>
                  <button class="px-3 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700">Delete</button>
                </td>
              </tr>
              <tr>
                <td class="border p-2 text-center">2</td>
                <td class="border p-2">John Doe</td>
                <td class="border p-2">john@example.com</td>
                <td class="border p-2">Editor</td>
                <td class="border p-2 text-center space-x-2">
                  <button class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Edit</button>
                  <button class="px-3 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700">Delete</button>
                </td>
              </tr>
              <tr>
                <td class="border p-2 text-center">3</td>
                <td class="border p-2">Jane Smith</td>
                <td class="border p-2">jane@example.com</td>
                <td class="border p-2">Author</td>
                <td class="border p-2 text-center space-x-2">
                  <button class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Edit</button>
                  <button class="px-3 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>
@endsection
