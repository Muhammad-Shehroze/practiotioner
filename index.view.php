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
        <?php
            foreach($names as $name)
            {
                echo "<li>$name</li>";
            }

        ?>
    
    </h1>
</body>
</html>