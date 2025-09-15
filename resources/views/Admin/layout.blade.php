<!DOCTYPE html>
<html lang="en">
@include('Admin.partials.head')
<body class="bg-gray-100">
  <div class="flex min-h-screen">


    <!-- Sidebar -->
   @include('Admin.partials.sidebar')

    <!-- Main Content -->
    <main class="flex-1 p-6 space-y-6">
      
        @if (session('success'))
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
          </div>
        @endif
      

      @yield('admin_content')
    </main>


  </div>
</body>
</html>
