<header class="bg-white shadow-sm sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between py-4">
      
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-2">
          <img src="/assets/img/phpRouterLogo.png" alt="Logo" class="h-8 w-8">
          <span class="font-semibold text-xl text-gray-800">ROUTERlite</span>
        </a>

        <!-- Botón hamburguesa -->
        <label for="menu-toggle" class="md:hidden cursor-pointer">
          <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </label>
      </div>

      <!-- Hidden checkbox para peer -->
      <input type="checkbox" id="menu-toggle" class="hidden peer">

      <!-- Menú navegación -->
      <nav class="hidden peer-checked:flex flex-col md:flex md:flex-row md:items-center md:space-x-6 mt-4 md:mt-0">
        <a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition py-2 md:py-0">Home</a>
        <a href="features" class="text-gray-700 hover:text-blue-600 font-medium transition py-2 md:py-0">Features</a>
        <a href="docs" class="text-gray-700 hover:text-blue-600 font-medium transition py-2 md:py-0">Docs</a>
        <a href="pricing" class="text-gray-700 hover:text-blue-600 font-medium transition py-2 md:py-0">Pricing</a>
        <a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium transition py-2 md:py-0">Contact</a>
        <a href="/login" class="px-4 py-2 mt-2 md:mt-0 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Login</a>
      </nav>

    </div>
  </div>
</header>
