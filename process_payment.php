<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de commande - Boutique de Robes de Soirée Gala</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Boutique de Robes de Soirée Gala</h1>
        <nav>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="products.html">Produits</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="cart.html">Panier</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $address = htmlspecialchars($_POST['address']);
            $email = htmlspecialchars($_POST['email']);
            $card_number = htmlspecialchars($_POST['card_number']);
            $expiry_date = htmlspecialchars($_POST['expiry_date']);
            $cvv = htmlspecialchars($_POST['cvv']);

            // Simuler le traitement du paiement
            // Dans une vraie application, utiliser une API de paiement comme Stripe ou PayPal

            echo "<section class='confirmation'>";
            echo "<h2>Merci, $name !</h2>";
            echo "<p>Votre commande a été passée avec succès.</p>";
            echo "<p>Un email de confirmation a été envoyé à $email.</p>";
            echo "<p>Votre commande sera expédiée à l'adresse suivante :</p>";
            echo "<p><strong>$address</strong></p>";
            echo "<a href='index.html' class='button'>Retour à l'accueil</a>";
            echo "</section>";
        } else {
            header("Location: checkout.html");
            exit();
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Boutique de Robes de Soirée Gala. Tous droits réservés.</p>
    </footer>
</body>
</html>