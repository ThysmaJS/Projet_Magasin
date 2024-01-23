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
<?php include 'Model/DatabaseModel.php'; ?>
    <div class="container">
        <div class="invoice">
            <div class="invoice-header">
                <h1 class="text-center">Facture</h1>
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-3">Adresse de facturation :</h3>
                        <address>
                            <div class="mb-2">Adresse : <?= $adresse->num; ?> rue <?= $adresse->rue; ?></div>
                            <div>Commune : <?= $adresse->CP; ?> <?= $adresse->commune; ?></div>
                        </address>
                    </div>
                    <div class="col-6 text-end">
                        <p>Date de commande : <?= date('d/m/Y'); ?></p>
                    </div>
                </div>
            </div>
            <div class="invoice-items">
                <?php foreach ($articles as $article) : ?>
                    <div class="item border p-3 mb-3">
                        <h4><?= $article->name; ?></h4>
                        <p>Quantité : <?= $article->quantity; ?></p>
                        <p>Mode de livraison :
                            <?php
                            $deliveryIcon = '';
                            if ($article->deliveryMode === 'shop') {
                                $deliveryIcon = '<i class="fas fa-shopping-cart"></i>';
                            } elseif ($article->deliveryMode === 'house') {
                                $deliveryIcon = '<i class="fas fa-home"></i>';
                            } elseif ($article->deliveryMode === 'box') {
                                $deliveryIcon = '<i class="fas fa-box" data-bs-toggle="tooltip" data-bs-placement="top" title="17 rue des Lila, 13080 Aix-En-Provence"></i>';
                            }
                            echo $deliveryIcon;
                            ?>
                        </p>
                        <p>Prix : <?= $article->price * $article->quantity; ?> €
                            <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="<?= number_format($article->price, 2) . ' x ' . $article->quantity . ' = ' . number_format($article->price * $article->quantity, 2) . ' €'; ?>"></i>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="invoice-total text-end">
                <?php
                $totalAmount = 0;
                foreach ($articles as $article) {
                    $totalAmount += $article->price * $article->quantity;
                }
                ?>
                <p data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Somme des montants totaux de chaque article">Montant total de la commande :
                    <?= number_format($totalAmount, 2); ?> €
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
