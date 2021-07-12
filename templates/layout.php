<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php echo 'Perfect Sec - ' . $title;  ?></title>
    <!-- Stylesheets -->
    <link href="bilbao/css/bootstrap.css" rel="stylesheet">
    <link href="bilbao/css/style.css" rel="stylesheet">
    <link href="bilbao/css/responsive.css" rel="stylesheet">

    <!-- Fav Icons -->
    <link rel="shortcut icon" href="bilbao/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="bilbao/images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
    <div class="page-wrapper">
        <?php
        require_once "header.php";
        require_once "$view.php";
        require_once "footer.php";
        ?>
    </div>
</body>

</html>