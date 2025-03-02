<header class="bg-blue-600 text-white" style="position: sticky; top: 0; z-index: 10;">
    <div class="max-w-6xl mx-auto flex justify-between items-center px-4 py-3">
        <!-- Logo -->
        <a href="index.php">
            <img src="/assets/logo.png" alt="Tecnoservice" class="h-14 w-auto">
        </a>

        <!-- Navbar -->
        <nav class="hidden md:flex space-x-4">
            <ul class="flex space-x-4">
                <li><a href="/index.php" class="hover:underline font-barlow font-bold uppercase">Home</a></li>
                <li><a href="/index.php#chi-siamo" class="hover:underline font-barlow font-bold uppercase">Chi siamo</a></li>
                <li><a href="/index.php#cosa-ripariamo" class="hover:underline font-barlow font-bold uppercase">Cosa ripariamo</a></li>
            </ul>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden flex flex-col space-y-1">
            <span class="w-6 h-1 bg-white"></span>
            <span class="w-6 h-1 bg-white"></span>
            <span class="w-6 h-1 bg-white"></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu-overlay" class="hidden fixed inset-0 bg-black bg-opacity-25 z-10 transition-all duration-200"></div>
    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-64 bg-blue-800 shadow-lg transform translate-x-full transition-transform duration-300 z-20">
        <div class="flex justify-end px-4 py-3">
            <button id="close-menu-button" class="text-white focus:outline-none">
                <!-- Icona X (SVG) -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <ul class="mt-6 space-y-6 px-4">
            <li><a href="/index.php" class="block text-lg font-barlow font-bold hover:underline uppercase border-b border-white/30 pb-2">Home</a></li>
            <li><a href="/index.php#chi-siamo" class="block text-lg font-barlow font-bold hover:underline uppercase border-b border-white/30 pb-2">Chi siamo</a></li>
            <li><a href="/index.php#cosa-ripariamo" class="block text-lg font-barlow font-bold hover:underline uppercase border-b border-white/30 pb-2">Cosa ripariamo</a></li>
        </ul>
    </div>
</header>
