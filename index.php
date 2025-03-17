<?php require 'data/request.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <p>fileName: <?php echo $filename;?></p>
        <input type="text" name="filename"><br>
        <textarea name="content" rows="30" cols="100"></textarea><br>
        <button type="submit">save</button>
    </form>
</body>
</html>