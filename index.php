<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito... -->

<?php
require_once __DIR__ . "/classes/User.php";

try {
    $user1 = new User('Manu', 'Cappello', 'abchegdj@mail.com');
    echo $user1->getName();
    // $user1->age = 11.5;
    echo $user1->setAge(11);
} catch (Exception $error) {
    echo $error->getMessage();
}
?>