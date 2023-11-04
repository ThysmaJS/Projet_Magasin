<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="views/css/style.css">
    <title>Facture</title>
</head>

<body>
    <div class="container">
        <div class="invoice">
            <div class="invoice-header">
                <h1 class="text-center">Facture</h1>
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-3">Adresse de facturation :</h3>
                        <address>
                            <div class="mb-2">Adresse : <?php echo $adresse->num; ?> rue <?php echo $adresse->rue; ?></div>
                            <div>Commune : <?php echo $adresse->CP; ?> <?php echo $adresse->commune; ?></div>
                        </address>
                    </div>
                    <div class="col-6 text-end">
                        <p>Date de commande : <?php echo date('d/m/Y'); ?></p>
                    </div>
                </div>
            </div>
            <div class="invoice-items">
                <?php foreach ($articles as $article) : ?>
                    <div class="item border p-3 mb-3">
                        <h4><?php echo $article->name; ?></h4>
                        <p>Quantité : <?php echo $article->quantity; ?></p>
                        <p>Prix unitaire : $<?php echo $article->price; ?></p>
                        <p>Mode de livraison :
                            <?php
                            if ($article->deliveryMode === 'shop') {
                                echo '<i class="fas fa-shopping-cart"></i>';
                            } elseif ($article->deliveryMode === 'house') {
                                echo '<i class="fas fa-home"></i>';
                            } elseif ($article->deliveryMode === 'box') {
                                echo '<i class="fas fa-box"></i>';
                            }
                            ?>
                        </p>
                        <p>Montant total : $<?php echo $article->price * $article->quantity; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="invoice-total text-end">
                <p>Montant total de la commande : $<?php
                    $totalAmount = 0;
                    foreach ($articles as $article) {
                        $totalAmount += $article->price * $article->quantity;
                    }
                    echo number_format($totalAmount, 2);
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
