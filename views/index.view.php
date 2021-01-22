<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="about">about us</a></li>
            <li><a href="contact">contact us</a></li>
            <li><a href="culture">Our Culture</a></li>
        </ul>
    </nav>
    <ul>
        <?php foreach ($tasks as $task): ?> 
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif;?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>