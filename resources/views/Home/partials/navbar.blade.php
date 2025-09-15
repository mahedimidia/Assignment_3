<nav class="bg-white shadow">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-blue-600">My Blog</h1>
      <ul class="flex space-x-6 text-gray-700 font-medium">
        <li><a href="{{route('home.dashboard')}}" class="hover:text-blue-600">Home</a></li>
        <li><a href="#about" class="hover:text-blue-600">About</a></li>
        <li><a href="#contact" class="hover:text-blue-600">Contact</a></li>

        @if (Auth::check())
        <li><a href="#" class="hover:text-blue-600">Profile</a></li>
        <li>
           <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="hover:text-blue-600">Logout</button>
        </form>
        </li>
        @else
        <li><a href="{{route('home.login')}}" class="hover:text-blue-600">Login</a></li>
        <li><a href="{{route('home.register')}}" class="hover:text-blue-600">Register</a></li>
        @endif

      </ul>
    </div>
</nav>