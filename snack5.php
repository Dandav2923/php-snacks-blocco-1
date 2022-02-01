<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="snack5.css">
    <title>Document</title>
</head>
<body>
    <div class="container-grey">
        <?php 
            foreach ($db['teachers'] as $key => $teachers) {
                echo ('<p>' . $teachers['name'] . '</p>' . '<p>' . $teachers['lastname'] . '</p>');
            }
        ?>
    </div>
    <div class="container-green">
        <?php 
            foreach ($db['pm'] as $key => $pm) {
                echo ('<p>' . $pm['name'] . '</p>' . '<p>' . $teachers['lastname'] . '</p>');
            }
        ?>
    </div>
</body>
</html>