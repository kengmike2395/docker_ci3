<header class="bg-white shadow-md p-4 flex justify-between items-center">

    <!-- Left: Mobile Menu Button -->
    <div class="flex items-center space-x-2">
        <button id="menuBtn" class="md:hidden text-gray-700 focus:outline-none hover:text-blue-600">
            <!-- Hamburger Icon -->
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <h1 class="text-lg font-semibold text-gray-700 md:hidden">MyApp</h1>
    </div>

    <!-- Search Bar -->
    <div class="flex items-center w-full max-w-md mx-4">
        <input type="text" placeholder="Search..."
            class="w-full border rounded-full py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Profile -->
    <div class="flex items-center space-x-3">
        <span class="hidden sm:inline text-gray-700 font-medium">John Doe</span>
        <img src="https://via.placeholder.com/40"
            alt="Profile"
            class="w-10 h-10 rounded-full border-2 border-blue-500 object-cover">
    </div>
</header>