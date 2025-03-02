<?php
require_once 'config/setup.php';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="/css/home.css">
    <title>Tecnoservice - Riparazione Elettrodomestici Torino</title>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <?php include 'includes/header.php'; ?>

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
    <?php include 'includes/footer.php'; ?>

    <script src="/js/call-info.js"></script>
</body>
</html>
