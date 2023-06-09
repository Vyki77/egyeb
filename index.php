<!DOCTYPE html>
<html lang="hu" id="top">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./frontend/css/style.css">
    <title>Névnapok</title>
</head>
<body>
    
    <?php
        include_once("./frontend/navigation.php");
        include_once("./frontend/components/header.php");
        include_once("./frontend/pages/$page.php");
        include_once("./frontend/components/footer.php");
    ?>
    <script src="./frontend/js/script.js"></script>
</body>

</html>