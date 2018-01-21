<head>
    <meta charset="UTF-8">
    <title>Team 1</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<html>

<body>

    <div class="pageWrapper">
        <h3>Category:</h3>
        <?php 
    if(isset($_POST['cat1'])) {
    echo $_POST['cat1']; 
    } 
    ?>

        <br>

        <h3>Category:</h3>
        <?php 
    if(isset($_POST['cat2'])) {
    echo $_POST['cat2']; 
    } 
    ?>

        <br>

        <h3>Category:</h3>
        <?php 
    if(isset($_POST['cat3'])) {
    echo $_POST['cat3']; 
    } 
    ?>

    </div>
    
</body>

</html>
