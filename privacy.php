<?php
require_once 'config/setup.php';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Tecnoservice - Informativa sulla privacy</title>
</head>
<style>
    #informativa h1 {
        font-size: 4em;
    }
    #informativa h2 {
        font-size: 2em;
        margin-top: 1em;
    }
    #informativa ul {
        margin-left: 20px;
        padding-left: 20px;
        list-style-type: disc;
    }

    #informativa li {
        margin-bottom: 5px;
    }

    #informativa a {
        color: blue;
    }
    #informativa a:hover {
        text-decoration: underline;
    }
</style>
<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <section id="informativa" class="py-16 px-8 bg-white">
        <h1>Informativa sulla privacy</h1>
        <p>Ultimo aggiornamento: <strong>1 marzo 2025</strong></p>

        <h2>1. Introduzione</h2>
        <p>La tua privacy è importante per noi. Questa informativa descrive come raccogliamo, utilizziamo e proteggiamo i tuoi dati personali quando visiti il nostro sito web e utilizzi i nostri servizi.</p>

        <h2>2. Titolare del trattamento</h2>
        <p>Il titolare del trattamento dei dati è <strong>Tecnoservice</strong>, identificato con Partita IVA <strong><?= PIVA ?></strong>. Per qualsiasi domanda sulla privacy, puoi contattarci a <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>.</p>

        <h2>3. Tipologia di dati raccolti</h2>
        <p>Il nostro sito web non raccoglie dati personali degli utenti, salvo quelli forniti volontariamente tramite il modulo di richiesta assistenza.</p>
        <ul>
            <li>Dati forniti nel modulo di contatto: Località, numero di telefono e dettagli della richiesta di assistenza.</li>
            <li>Cookie di terze parti: Utilizziamo solo i cookie di Google Ads per finalità pubblicitarie e statistiche.</li>
        </ul>

        <h2>4. Finalità del trattamento</h2>
        <p>Trattiamo i dati personali esclusivamente per:</p>
        <ul>
            <li>Gestire le richieste di assistenza e contattarti in merito alla tua richiesta.</li>
            <li>Migliorare la nostra visibilità online tramite Google Ads.</li>
        </ul>

        <h2>5. Base giuridica del trattamento</h2>
        <p>I dati sono trattati sulla base del consenso dell'utente, espresso inviando volontariamente il modulo di richiesta assistenza.</p>

        <h2>6. Conservazione dei dati</h2>
        <p>I dati forniti attraverso il modulo di contatto vengono conservati solo per il tempo necessario a gestire la richiesta e fornire assistenza.</p>

        <h2>7. Condivisione dei dati</h2>
        <p>Non vendiamo né condividiamo i dati personali con terze parti, salvo obblighi di legge o necessità tecniche per la fornitura del servizio.</p>

        <h2>8. Diritti degli utenti</h2>
        <p>In conformità al GDPR, hai il diritto di:</p>
        <ul>
            <li>Accedere ai tuoi dati personali.</li>
            <li>Richiederne la rettifica o la cancellazione.</li>
            <li>Limitare o opporsi al trattamento.</li>
            <li>Richiedere la portabilità dei dati.</li>
        </ul>
        <p>Per esercitare questi diritti, contattaci a <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>.</p>

        <h2>9. Sicurezza dei dati</h2>
        <p>Adottiamo misure tecniche e organizzative adeguate per proteggere i tuoi dati da accessi non autorizzati o trattamenti illeciti.</p>

        <h2>10. Modifiche alla privacy policy</h2>
        <p>Questa informativa può essere aggiornata in futuro. Ti invitiamo a consultarla periodicamente.</p>

        <p>Se hai domande, contattaci a <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>.</p>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
