<?php
define('TELEGRAM_BOT_TOKEN', '7762413969:AAFT6-H2dVXJiGkwmU4PwDwuyoKzMmclm_A');
define('TELEGRAM_CHAT_ID', '-1002319441734');

define('EMAIL', 'tecnoservice2022@hotmail.com');
define('PIVA', '11598960018');
define('PHONE_NUMBER', '0115218104');
define('PHONE_NUMBER2', '3290860479');

function formatPhoneNumber($number) {
    return preg_replace('/(\d{3})(\d{3})(\d{4})/', '$1 $2 $3', $number);
}
$formattedPhoneNumber = formatPhoneNumber(PHONE_NUMBER);
$formattedPhoneNumber2 = formatPhoneNumber(PHONE_NUMBER2);

$brands = [
    "AEG",
    "BEKO",
    "BOSCH",
    "CANDY",
    "ELECTROLUX",
    "GAGGENAU",
    "HISENSE",
    "HOOVER",
    "HOTPOINT - ARISTON",
    "INDESIT",
    "IGNIS",
    "LG",
    "MIELE",
    "NEFF",
    "REX",
    "SAMSUNG",
    "SAN GIORGIO",
    "SIEMENS",
    "SMEG",
    "WHIRLPOOL",
    "ZANUSSI",
    "ZOPPAS",
];
?>
