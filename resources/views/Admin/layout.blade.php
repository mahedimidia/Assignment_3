<!DOCTYPE html>
<html lang="en">
@include('Admin.partials.head')
<body class="bg-gray-100">
  <div class="flex min-h-screen">


    <!-- Sidebar -->
   @include('Admin.partials.sidebar')

    <!-- Main Content -->
    @yield('admin_content')



  </div>
</body>
</html>
