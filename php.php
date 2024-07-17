<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Kirim email atau simpan pesan ke database
    // Contoh: mail("you@example.com", "New Contact Message", $message, "From:" . $email);

    echo "Pesan telah dikirim. Terima kasih, " . $name . "!";
} else {
    echo "Silakan kirim pesan melalui form.";
}
?>