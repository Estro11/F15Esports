<?php
// HTML formundan gələn məlumatları qəbul edirik
$pubg_id = $_POST['pubg_id'];
$age = $_POST['age'];
$fps = $_POST['fps'];

// Məlumatları fayla yazırıq
$file = fopen("clan.txt", "a"); // a - əlavə etmək (append) rejimi
fwrite($file, "PUBG ID: $pubg_id, Yaş: $age, FPS: $fps\n");
fclose($file);

// İstifadəçini yönləndiririk və "Məlumatlar Göndərildi!" mesajını göstəririk
header("Location: main.html?status=success");
exit();
?>
