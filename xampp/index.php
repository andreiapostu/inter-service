<?php
require_once 'config/setup.php';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="/css/home.css">
    <title>Tecnoservice - Riparazione Elettrodomestici Torino</title>
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

    <!-- Hero Section -->
    <section id="hero" class="bg-gray-500 h-screen text-white relative">
        <div id="hero-wrapper" class="h-full bg-black bg-opacity-50 flex flex-col justify-center items-start text-left px-4 md:px-16">
            <!-- Heading -->
            <div class="call-info">
                <div class="call-info-item" id="call-info-header">
                    RIPARAZIONI ELETTRODOMESTICI TORINO
                </div>
                <div class="call-info-item" id="call-info-action">
                    CHIAMA SUBITO AL
                </div>
                <div class="call-info-item" id="call-info-number">
                    <a href="tel:<?= PHONE_NUMBER ?>" class="no-underline"><?= $formattedPhoneNumber ?></a>
                </div>
            </div>

            <!-- List of Features -->
            <ul class="space-y-2 text-sm md:text-base font-light">
                <li class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Assistenza rapida entro 24 ore
                </li>
                <li class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Personale qualificato e competente
                </li>
                <li class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Tecnico a domicilio a soli € 30,00
                </li>
                <li class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Servizio in tutta Torino e dintorni
                </li>
                <li class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Ripariamo elettrodomestici fuori garanzia
                </li>
            </ul>

            <!-- Buttons -->
            <div class="flex flex-col md:flex-row items-center md:items-start space-y-4 md:space-y-0 md:space-x-6 mt-8">
                <!-- First Button -->
                <a href="tel:<?= PHONE_NUMBER ?>" class="hero-btn bg-blue-600 text-white font-bold py-3 px-6 border border-white transition-all duration-200 hover:bg-blue-800 hover:border-transparent">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </div>
                    <div>
                        CHIAMA ORA
                    </div>
                </a>
                <!-- Second Button -->
                <!--
                <a href="#" class="hero-btn bg-transparent text-white font-bold py-3 px-6 border border-white transition-all duration-200 hover:bg-blue-800 hover:border-transparent">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
                    </svg>
                    </div>
                    <div>
                        FATTI CONTATTARE
                    </div>
                </a>
                -->
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="chi-siamo" class="py-16 px-8 bg-white">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Perché scegliere Tecnoservice?</h2>
            <p class="text-lg">Siamo specialisti nella riparazione di elettrodomestici a Torino e dintorni. Risolviamo tutti i problemi su elettrodomestici di tutte le principali marche presenti sul mercato, garantendo interventi rapidi e professionali.</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <!--
    <section class="py-16 px-8 bg-gray-200">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-6 text-center">Richiedi Assistenza</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="name" class="block text-lg">Nome</label>
                    <input type="text" id="name" name="name" class="w-full border-gray-300 border rounded-md p-2" placeholder="Inserisci il tuo nome">
                </div>
                <div>
                    <label for="phone" class="block text-lg">Numero di telefono</label>
                    <input type="tel" id="phone" name="phone" class="w-full border-gray-300 border rounded-md p-2" placeholder="Inserisci il tuo numero di telefono">
                </div>
                <div>
                    <label for="address" class="block text-lg">Indirizzo / Zona</label>
                    <input type="text" id="address" name="address" class="w-full border-gray-300 border rounded-md p-2" placeholder="Inserisci il tuo indirizzo">
                </div>
                <div>
                    <label for="problem" class="block text-lg">Descrizione del problema</label>
                    <textarea id="problem" name="problem" rows="4" class="w-full border-gray-300 border rounded-md p-2" placeholder="Descrivi il problema"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600">Invia Richiesta</button>
            </form>
        </div>
    </section>
    -->

    <!-- Services Section -->
    <section id="cosa-ripariamo" class="py-16 px-8 bg-gray-200">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Cosa Ripariamo?</h2>
            <p class="text-lg">Effettuiamo riparazioni su:</p>
            <ul class="text-lg space-y-2 mt-4">
                <li>- Forni</li>
                <li>- Lavatrici</li>
                <li>- Asciugatrici</li>
                <li>- Frigoriferi</li>
                <li>- Lavastoviglie</li>
                <li>- Piani cottura</li>
            </ul>
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

    <script src="/js/call-info.js"></script>
</body>
</html>
