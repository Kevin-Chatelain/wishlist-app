<?php
include "includes/classes/dbh.php";
include "includes/classes/products.php";
// echo "<pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Un super site">
    <link rel="preload" href="assets/style/style.css" as="style">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Template</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Fira Sans', sans-serif;
            color: var(--black);
        }

        :root {
            --primary: #16C172;
            --tertiary: #d1d1d1;
            --black: #141414;
        }

        body {
            margin: 0;
        }

        main {
            max-width: 1400px;
            margin: 50px auto;
        }

        a {
            display: block;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <main>
        <div class="card-grid">
            <?php
                $products = new Products();
                $products->displayProducts();
            ?>
        </div>
    </main>

    <script src="assets/js/main.js"></script>
</body>

</html>