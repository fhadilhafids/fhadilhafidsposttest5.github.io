<!DOCTYPE html>
<head>
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="css/content.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
</head>
<body>
    <div class="header">
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About Me</a>
            <a class="active" href="crud.php">CRUD</a>
            <a class="time">Rabu, 19 Oktober 2022</a>
            <div id="theme-toggler" class="fas fa-moon">Dark / Light</div> 
        </div>
    </div>
    <div class="kategori" align="center">
            <a href="">Entertainment</a>
            <a href="">Sports</a>
            <a href="">Music</a>
            <a href="">Film</a>
            <a href="">Politik</a>
            <a href="">Business</a>
            <a href="">Teknologi</a>
            <a href="">Otomotif</a>
            <a href="">Food & Travel</a>
    </div><br>
    <?php include 'read.php'; ?><br><br><br>
    <div class="footer">
        <div class="kategori-footer" style="line-height: 2em;">
            <h1>Kategori</h1>
            <a href="">Entertainment</a><br>
            <a href="">Sports</a><br>
            <a href="">Music</a><br>
            <a href="">Film</a><br>
            <a href="">Politik</a><br>
            <a href="">Business</a><br>
            <a href="">Teknologi</a><br>
            <a href="">Otomotif</a><br>
            <a href="">Food & Travel</a><hr />
            <h3>@Copyright 2022 by Mohammad Fhadil Hafids Harsandi</h3>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>