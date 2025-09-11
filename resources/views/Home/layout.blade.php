<!DOCTYPE html>
<html lang="en">
@include('Home.partials.head')
<body class="bg-gray-100">

  <!-- Navbar -->

@include('Home.partials.navbar')
  <!-- Hero Section -->
  @yield('home_content')

  <!-- Footer -->
  <footer class="bg-gray-800 text-gray-300 py-6 mt-10">
    <div class="container mx-auto text-center">
      <p>&copy; 2025 My Blog. All Rights Reserved.</p>
    </div>
  </footer>

</body>
</html>
