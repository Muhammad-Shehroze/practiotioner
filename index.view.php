<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <ul>
        <?php foreach ($names as $name) : ?>
                <li><?= $name; ?></li>
        <?php endforeach; ?>    

    </ul>
    
    </h1>
</body>
</html>