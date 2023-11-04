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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="invoice">
        <div class="invoice-header">
            <h1>Facture</h1>
            <i class="fa-solid fa-box"></i>
            <i class="fa-solid fa-shop"></i>
            <i class="fa-solid fa-truck"></i>
            <div class="invoice-date">Date de commande : 04/11/2023</div>
        </div>
        <div class="invoice-items">
            <div class="item">
                <div class="item-name">Article 1</div>
                <div class="item-quantity">2</div>
                <div class="item-amount">$20.00</div>
            </div>
            <div class="item">
                <div class="item-name">Article 2</div>
                <div class="item-quantity">1</div>
                <div class="item-amount">$15.00</div>
            </div>
            <!-- Ajoutez d'autres articles ici -->
        </div>
        <div class="invoice-billing-address">
            <h3>Adresse de facturation :</h3>
            <address>
                John Doe<br>
                123 Rue de la Facturation<br>
                Ville de Facture, 12345<br>
            </address>
        </div>
        <div class="invoice-total">
            Montant total : $55.00
        </div>
    </div>
</body>
</html>
