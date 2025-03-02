<?php
require_once 'config/setup.php';
?>
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
            <a href="/index.php#contact-form" class="text-blue-400 hover:underline mt-2">Richiedi un intervento</a>
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