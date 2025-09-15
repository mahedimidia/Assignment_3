@extends('Admin.layout')
@push('title')
<title>Edit User</title>
@endpush

@section('admin_content')

    <!-- Edit User Form -->
    <section id="edit-user">
        <h2 class="text-xl font-bold mb-4">Edit User</h2>
        <div class="bg-white p-6 rounded-2xl shadow max-w-lg">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Name:</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ $user->name }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ $user->email }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-gray-700 font-semibold mb-2">Role:</label>
                    <select
                        id="role"
                        name="role"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        <option value="content_creator" {{ $user->role == 'content_creator' ? 'selected' : '' }}>Content Creator</option>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="reader" {{ $user->role == 'reader' ? 'selected' : '' }}>Reader</option>
                    </select>
                </div>
                <button
                    type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">Update User</button>
            </form>
        </div>
    </section>


@endsection