<?php
require_once 'config/setup.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $localita = htmlspecialchars($_POST['localita']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $problema = htmlspecialchars($_POST['problema']);
    
    $messaggio = "📩<b><i>RICHIESTA IN ARRIVO</i></b>📩\n\n";
    $messaggio .= "📍<b>Località:</b> $localita\n";
    $messaggio .= "📞<b>Contatto:</b> $telefono\n\n";
    $messaggio .= "📝<b>Descrizione Problema:</b> \n<i>$problema</i>";
    
    $apiUrl = "https://api.telegram.org/bot" . TELEGRAM_BOT_TOKEN . "/sendMessage";
    
    $postData = [
        'chat_id' => TELEGRAM_CHAT_ID,
        'parse_mode' => 'HTML',
        'text' => $messaggio,
    ];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    
    $response = curl_exec($ch);
    curl_close($ch);
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/head.php'; ?>
    <title>Richiesta Inviata - Tecnoservice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            text-align: center;
        }
        .grazie {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .grazie h1 {
            color: #007bff;
            font-size: 3em;
            margin-bottom: 1em;
        }
        .grazie p {
            color: #333;
            font-size: 18px;
            line-height: 1.6;
        }
        .grazie .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
        }
        .grazie .button:hover {
            background-color: #0056b3;
        }
        html, body {
    height: 100%;
    margin: 0;
}

body {
    display: flex;
    flex-direction: column;
}

.container {
    flex-grow: 1;
    align-content: center;
}

footer {
    position: sticky;
    bottom: 0;
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    padding: 20px;
    box-shadow: 0px -2px 5px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <div class="grazie container">
        <h1>Grazie per la tua richiesta!</h1>
        <p>Abbiamo ricevuto la tua richiesta di assistenza.<br>Il nostro team ti contatterà al più presto per fornirti supporto e concordare un intervento.</p>
        <p style="margin-top: 20px;">Se hai bisogno di ulteriori informazioni, non esitare a contattarci.</p>

        <div class="mt-12" style="margin-bottom: 3vh">
            <a href="tel:<?= PHONE_NUMBER ?>" class="bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-blue-700 transition-all">
                CHIAMA SUBITO
            </a>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
