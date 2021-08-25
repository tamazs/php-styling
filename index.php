<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP styling</title>
</head>
<body style="background-color: <?php echo $_POST["background-color"]; ?>; color: <?php echo $_POST["font-color"]; ?>; font-family: <?php echo $_POST["font"]; ?>;">
    <form action="index.php" method="post">
        <label>Background color:</label>
        <input type="text" name="background-color" value="<?php echo $_POST["background-color"] ?>">

        <label>Font color:</label>
        <input type="text" name="font-color" value="<?php echo $_POST["font-color"] ?>">

        <label>Font name:</label>
        <input type="text" name="font" value="<?php echo $_POST["font"] ?>">

        <button>Preview</button>
    </form>
</body>
</html>