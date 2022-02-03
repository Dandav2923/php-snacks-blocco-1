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
        'img' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fdambros.it%2Fecommerce%2Fprodotto%2Fid%2F0000154817%2F&psig=AOvVaw3IPo5rL19gYjqWdqPckJZ8&ust=1643974388631000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCKDz2_234_UCFQAAAAAdAAAAABAE',
        'tipologia' => 'disincrostante',
        'prezzo' => 2.49,
    ],
    [
        'nome' => 'Magic Mouse',
        'img' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.apple.com%2Fit%2Fshop%2Fproduct%2FMK2E3Z%2FA%2Fmagic-mouse&psig=AOvVaw1SJdJJfkpHW92nV0eTqZdH&ust=1643974525393000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCKi-h7-44_UCFQAAAAAdAAAAABAE',
        'tipologia' => 'hardware',
        'prezzo' => 74.00,
    ],
    [
        'nome' => 'Svelto',
        'img' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.carrefour.it%2Fp%2Fsvelto-100%2525-limone-1-l%2F8000630720066.html&psig=AOvVaw1g8cFKK3-JiVvfVk_gFwJx&ust=1643974598205000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCKDX3OG44_UCFQAAAAAdAAAAABAE',
        'tipologia' => 'disincrostante',
        'prezzo' => 0.99,
    ],
    [
        'nome' => 'Magic keyboard',
        'img' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.apple.com%2Fit%2Fshop%2Fproduct%2FMK2A3T%2FA%2Fmagic-keyboard-italiano&psig=AOvVaw1XSptLvzXCiERHCP_BXCP0&ust=1643974667378000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOjDy4K54_UCFQAAAAAdAAAAABAE',
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
                <img src="<?php echo $element['img'] ?>" alt="">
            </div>
            <h2><?php echo $element['tipologia'] ?></h2>
            <h3>
                <?php echo $element['prezzo'] ?>
            </h3>
        <?php } ?>
    </div>
</body>

</html>