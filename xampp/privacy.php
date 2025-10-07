<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/global.css">
    <title>Tecnoservice - Informativa sulla privacy</title>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-blue-600 text-white" style="position: sticky; top: 0; z-index: 10;">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-4 py-3">
            <!-- Logo -->
            <a href="/">
                <img src="/assets/logo.png" alt="Tecnoservice" class="h-14 w-auto">
            </a>

            <!-- Navbar -->
            <nav class="hidden md:flex space-x-4">
                <ul class="flex space-x-4">
                    <li><a href="/" class="hover:underline font-barlow font-bold uppercase">Home</a></li>
                    <li><a href="/#chi-siamo" class="hover:underline font-barlow font-bold uppercase">Chi siamo</a></li>
                    <li><a href="/#contact-form" class="hover:underline font-barlow font-bold uppercase">Richiedi Intervento</a></li>
                    <li><a href="/#brands" class="hover:underline font-barlow font-bold uppercase">Marchi Trattati</a></li>
                    <li><a href="/#cosa-ripariamo" class="hover:underline font-barlow font-bold uppercase">Cosa ripariamo</a></li>
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
                <li><a href="/" class="block text-lg font-barlow font-bold hover:underline uppercase border-b border-white/30 pb-2">Home</a></li>
                <li><a href="/#chi-siamo" class="block text-lg font-barlow font-bold hover:underline uppercase border-b border-white/30 pb-2">Chi siamo</a></li>
                <li><a href="/#contact-form" class="block text-lg font-barlow font-bold hover:underline uppercase border-b border-white/30 pb-2">Richiedi Intervento</a></li>
                <li><a href="/#brands" class="block text-lg font-barlow font-bold hover:underline uppercase border-b border-white/30 pb-2">Marchi Trattati</a></li>
                <li><a href="/#cosa-ripariamo" class="block text-lg font-barlow font-bold hover:underline uppercase border-b border-white/30 pb-2">Cosa ripariamo</a></li>
            </ul>
        </div>
    </header>

    <section class="py-16 px-8 bg-white" style="height: 80vh;">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Informativa sulla privacy</h2>
            <p>Questo sito web è conforme al Regolamento Generale sulla Protezione dei Dati (GDPR) e non raccoglie né tratta dati personali degli utenti. Non raccogliamo informazioni come nomi, email o numeri di telefono attraverso moduli o strumenti automatici.</p>
            <p>L'unico dato eventualmente raccolto è l'indirizzo IP dell'utente per motivi tecnici e di sicurezza legati al funzionamento del server. Questo dato non viene utilizzato per identificare l'utente e non viene condiviso con terze parti.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 flex flex-col md:flex-row md:flex-wrap items-center justify-between text-center md:text-left">

            <!-- Logo -->
            <div class="w-full md:w-auto mb-6 md:mb-0 flex flex-col items-center md:items-start">
                <img src="/assets/logo.png" alt="Tecnoservice Logo" class="h-16">
                <p class="text-sm text-gray-400 mt-2">Assistenza specializzata non ufficiale</p>
            </div>

            <!-- Collegamenti -->
            <div class="w-full md:w-auto mb-6 md:mb-0">
                <p class="text-sm">&copy; 2014 Tecnoservice</p>
                <div class="mt-2 space-x-4">
                    <a href="/privacy.php" class="text-blue-400 hover:underline">Informativa sulla privacy</a>
                    <span class="hidden md:inline text-gray-500">|</span>
                    <a href="/cookie.php" class="text-blue-400 hover:underline">Cookie Policy</a>
                </div>
            </div>

            <!-- Contatti -->
            <div class="w-full md:w-auto flex flex-col items-center md:items-end">
                <p class="text-sm">📞 <a href="tel:<?= PHONE_NUMBER ?>" class="hover:underline"><?= $formattedPhoneNumber ?></a></p>
                <p class="text-sm">📞 <a href="tel:<?= PHONE_NUMBER2 ?>" class="hover:underline"><?= $formattedPhoneNumber2 ?></a></p>
                <a href="/#contact-form" class="text-blue-400 hover:underline mt-2">Richiedi un intervento</a>
            </div>

            <!-- Orari di apertura -->
            <div class="w-full md:w-auto text-center md:text-right mt-6 md:mt-0">
                <p class="text-sm font-semibold text-white">Orario di apertura</p>
                <p class="text-sm text-gray-400">Lunedì - Venerdì: <span class="text-white">08:00 - 20:00</span></p>
                <p class="text-sm text-gray-400">Sabato: <span class="text-white">09:00 - 13:00</span></p>
            </div>

            <!-- Partita IVA -->
            <div class="w-full text-center md:text-right mt-6 md:mt-0">
                <p class="text-sm text-gray-400">P. IVA: <span class="text-white font-semibold" style="user-select: none; pointer-events: none;"><?= PIVA ?></span></p>
            </div>

        </div>
    </footer>

    <script src="/js/menu.js"></script>
</body>
</html>
