 <aside class="w-64 bg-white shadow-md p-4">
      <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
      <nav class="space-y-3">
        <a href="#dashboard" class="block px-3 py-2 rounded-lg hover:bg-gray-200 font-semibold">Dashboard</a>

        <!-- Posts Dropdown -->
        <div>
          <button onclick="toggleDropdown('postsMenu')" class="w-full flex justify-between items-center px-3 py-2 rounded-lg hover:bg-gray-200">
            <span>Posts</span>
            <span>▼</span>
          </button>
          <div id="postsMenu" class="ml-4 mt-1 hidden space-y-1">
            <a href="{{route('posts.create')}}" class="block px-3 py-2 rounded-lg hover:bg-gray-200">Create Post</a>
            <a href="#show_post" class="block px-3 py-2 rounded-lg hover:bg-gray-200">Show Posts</a>
          </div>
        </div>

        <!-- Categories Dropdown -->
        <div>
          <button onclick="toggleDropdown('categoriesMenu')" class="w-full flex justify-between items-center px-3 py-2 rounded-lg hover:bg-gray-200">
            <span>Categories</span>
            <span>▼</span>
          </button>
          <div id="categoriesMenu" class="ml-4 mt-1 hidden space-y-1">
            <a href="{{route('categories.create')}}" class="block px-3 py-2 rounded-lg hover:bg-gray-200">Create Category</a>
            <a href="#show_category" class="block px-3 py-2 rounded-lg hover:bg-gray-200">Show Categories</a>
          </div>
        </div>

        <a href="#users" class="block px-3 py-2 rounded-lg hover:bg-gray-200">Users</a>
      </nav>
    </aside>