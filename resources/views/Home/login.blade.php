@extends('Home.layout')
@push('title')
    <title>Login</title>
@endpush
@section('home_content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
     <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
       <h2 class="text-2xl font-bold mb-6 text-center">Login to Your Account</h2>

       <form action="{{route('login')}}" method="POST" class="space-y-6">
        @csrf 
        
         <div>
           <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
           <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
         </div>
         <div>
           <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
           <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
         </div>
         <div class="flex items-center justify-between">
           <div class="flex items-center">
             <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
             <label for="remember" class="ml-2 block text-sm text-gray-900">Remember Me</label>
           </div>
           <div>
             <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700">Login</button>
           </div>
         </div>
       </form>
     </div>
   </div>
@endsection
