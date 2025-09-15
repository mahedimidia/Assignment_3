@extends('Admin.layout')
@push('title')
    <title>Create User</title>
@endpush
@section('admin_content')
 <div class="container mx-auto p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Create New User</h1>
    <form action="{{ route('user.store') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
        </div>
        <div>
            <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
            <select name="role" id="role" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
                <option value="reader">Reader</option>
                <option value="content_creator">Content Creator</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('dashboard') }}"
                class="mr-4 bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300 shadow transition">Cancel</a>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 shadow transition">Create User</button>
        </div>
    </form>
 </div>
@endsection