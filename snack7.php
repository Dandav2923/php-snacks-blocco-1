<!-- SNACK
Creiamo un array consentente dei prodotti con
Nome
Prezzo
Immagine
Tipologia
Stampiamo tutti i nostri prodotti in pagina
Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia -->

<?php

$products = [
    [
        'nome' => 'Mr muscle',
        'img' => 'https://m.media-amazon.com/images/I/712WpN4wd1L._AC_SL1500_.jpg',
        'tipologia' => 'disincrostante',
        'prezzo' => 2.49,
    ],
    [
        'nome' => 'Magic Mouse',
        'img' => 'https://m.media-amazon.com/images/I/61igO8nLHoL._AC_SL1500_.jpg',
        'tipologia' => 'hardware',
        'prezzo' => 74.00,
    ],
    [
        'nome' => 'Svelto',
        'img' => 'https://m.media-amazon.com/images/I/713dNOO6y1L._AC_SL1500_.jpg',
        'tipologia' => 'disincrostante',
        'prezzo' => 0.99,
    ],
    [
        'nome' => 'Magic keyboard',
        'img' => 'https://m.media-amazon.com/images/I/71cQhvB7yjL._AC_SL1500_.jpg',
        'tipologia' => 'hardware',
        'prezzo' => 109.00,
    ],
];

$filteredProducts = $products;
if (isset($_GET['select']) !== false) {
    $tipologia = $_GET['select'];
    // var_dump($tipologia);
    $prezzo = $_GET['select'];
    if ($tipologia === 'all') {
        $filteredProducts = $products;
    } else {
        $filteredProducts = [];
        foreach ($products as $element) {
            if (($element['tipologia'] === $tipologia) || ($element['prezzo'] < $tipologia)) {
                $filteredProducts[] = $element;
                // var_dump($filteredProducts);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="snack7.php" method="$_GET">
            <select name="select" id="select">
                <option value="all">all</option>
                <option value="disincrostante">disincrostante</option>
                <option value="hardware">hardware</option>
                <option value="100">100</option>
                <option value="200">200</option>
            </select>
            <button>cerca</button>
        </form>
        <?php foreach ($filteredProducts as $element) { ?>
            <h1><?php echo $element['nome'] ?></h1>
            <div class="container">
                <img src="<?php echo $element['img'] ?>" alt="" style="width : 10%">
            </div>
            <h2><?php echo $element['tipologia'] ?></h2>
            <h3>
                <?php echo $element['prezzo'] ?>
            </h3>
        <?php } ?>
    </div>
</body>

</html>