<html>

<head>
    <title>Hi!</title>
</head>

<body>
    <?php if (isset($_GET['name'])) { ?>
        <h1>Aloha <?php echo $_GET['name']; ?>!</h1>
    <?php } ?>
    <?php echo $_GET['name']; ?>
    <!-- <?php phpinfo();
            ?> -->
</body>

</html>