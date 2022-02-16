<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito... -->

<?php
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Premium.php";
require_once __DIR__ . "/classes/Product.php";

try {
    $user1 = new Premium('Manuel', 'Cappello', 'abchegdj@mail.com', new Card('Manuel', 1817654, '05/2025', 765), true);
    $product1 = new Product('Cuffie Sony', 139.99, 3, 'Musica');
    $priceTotal = $product1->getPrice() * ((100 - $user1->getSconto()) / 100);
    echo $priceTotal;
    // echo $user1->getSconto();
} catch (Exception $error) {
    echo $error->getMessage();
}
?>