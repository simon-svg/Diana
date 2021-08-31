<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Diana – Furniture Store eCommerce Bootstrap5 Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="../../../assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../../assets/css/headroom.css" rel="stylesheet" />
    <link href="../../../assets/css/animate.css" rel="stylesheet" />
    <link href="../../../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../../../assets/css/bardy.icon.css" rel="stylesheet" />
    <link href="../../../assets/css/swiper.min.css" rel="stylesheet" />
    <link href="../../../assets/css/fancybox.min.css" rel="stylesheet" />
    <link href="../../../assets/css/slicknav.css" rel="stylesheet" />
    <link href="../../../assets/css/aos.min.css" rel="stylesheet" />
    <link href="../../../assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <?php require_once "index.php" ?>

    <div class="admin">
        <?php require_once "../../../components/insertNav.php"; ?>

        <!-- ---------------------------------- Category ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list">
            <div class="admin__section_head">
                <h3 class="admin__section_title">Category</h3>
            </div>
            <div class="admin__section_content">
                <form class="admin__form" action="querys.php" method="POST">
                    <div class="form__flex">
                        <input class="admin__inp admin__inp_header form-control" type="text" name="name" placeholder="Name" required>
                    </div>
                    <div>
                        <button class="btn custom-btn admin__form_btn" name="submit">Add Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
</body>

</html>