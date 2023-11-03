<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP</title>
</head>
<body>

    <header>
        <h1>Lecture 10 Webpage</h1>
    </header>

    <main>
        <p>Main.</p>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?></p>
        <p>Current Date and Time: <?php
$currentDate = date('Y-m-d H:i:s');
echo $currentDate;
?></p>
    </footer>

</body>
</html>