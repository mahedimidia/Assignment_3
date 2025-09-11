@extends('Home.layout')
@push('title')
    <title>Blog Home</title>
@endpush
@section('home_content')
   <header class="bg-blue-600 text-white text-center py-16">
    <h2 class="text-4xl font-bold mb-4">Welcome to My Blog</h2>
    <p class="text-lg">Read the latest posts and updates</p>
  </header>

  <!-- Posts Section -->
  <main class="container mx-auto px-6 py-10">
    <h3 class="text-2xl font-bold mb-6">Latest Posts</h3>
    <div class="grid md:grid-cols-3 gap-6">
      
      <!-- Post Card -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-5">
        <img src="https://via.placeholder.com/400x200" alt="Post Image" class="rounded-lg mb-4">
        <h4 class="text-xl font-semibold mb-2">Post Title 1</h4>
        <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <a href="#" class="text-blue-600 font-semibold hover:underline">Read More →</a>
      </div>

      <!-- Post Card -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-5">
        <img src="https://via.placeholder.com/400x200" alt="Post Image" class="rounded-lg mb-4">
        <h4 class="text-xl font-semibold mb-2">Post Title 2</h4>
        <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <a href="#" class="text-blue-600 font-semibold hover:underline">Read More →</a>
      </div>

      <!-- Post Card -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-5">
        <img src="https://via.placeholder.com/400x200" alt="Post Image" class="rounded-lg mb-4">
        <h4 class="text-xl font-semibold mb-2">Post Title 3</h4>
        <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <a href="#" class="text-blue-600 font-semibold hover:underline">Read More →</a>
      </div>

    </div>
  </main>
@endsection
