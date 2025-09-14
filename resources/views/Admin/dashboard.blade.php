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
            <p class="text-xl font-bold">{{ $postCount }}</p>
          </div>
          <div class="bg-white p-6 rounded-2xl shadow">
            <p class="text-gray-600 text-sm">Categories</p>
            <p class="text-xl font-bold">{{ $categoryCount }}</p>
          </div>
          <div class="bg-white p-6 rounded-2xl shadow">
            <p class="text-gray-600 text-sm">Users</p>
            <p class="text-xl font-bold">{{ $userCount }}</p>
          </div>
          
          @can('status-update')
          <div class="bg-white p-6 rounded-2xl shadow">
            <p class="text-gray-600 text-sm">Comments</p>
            <p class="text-xl font-bold">{{ rand(1, 500) }}</p>
          </div>
          @endcan
        </div>

        <!-- Quick Actions -->
        <div class="bg-white p-6 rounded-2xl shadow">
          <h3 class="text-lg font-semibold mb-4">Quick Actions</h3>
          <div class="flex gap-3 flex-wrap">
            <a href="{{ route('posts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">New Post</a>
            <a href="{{ route('categories.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg shadow hover:bg-green-700">New Category</a>
          </div>
        </div>
      </section>

     
      

      <!-- Users -->
      @can('status-update')
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
              @foreach ($users as $user)
              <tr>
                <td class="border p-2 text-center">{{ $user->id }}</td>
                <td class="border p-2">{{ $user->name }}</td>
                <td class="border p-2">{{ $user->email }}</td>
                <td class="border p-2">{{ $user->role }}</td>
                <td class="border p-2 text-center space-x-2">
                  <button class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Edit</button>
                  <button class="px-3 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700">Delete</button>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </section>
      @endcan

    </main>
@endsection
