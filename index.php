<html>
    <head>
        <title> </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body >
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="row">
                <dic class="col-lg-3 d-none d-lg-block">
                    <?php include 'sidebar.php';?>
                </dic>
                <div class="col-lg-9">
                    <?php
                        include 'slider.php';
                        include 'cards.php';
                        include 'accordian.php';  
                    ?>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>