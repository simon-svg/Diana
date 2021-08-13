<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Diana – Furniture Store eCommerce Bootstrap5 Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/headroom.css" rel="stylesheet" />
    <link href="../../assets/css/animate.css" rel="stylesheet" />
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../../assets/css/bardy.icon.css" rel="stylesheet" />
    <link href="../../assets/css/swiper.min.css" rel="stylesheet" />
    <link href="../../assets/css/fancybox.min.css" rel="stylesheet" />
    <link href="../../assets/css/slicknav.css" rel="stylesheet" />
    <link href="../../assets/css/aos.min.css" rel="stylesheet" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <?php require_once "home/index.php" ?>

    <div class="admin">
        <?php
        $navArr = ["index.php", "#", "contact.php", "subscribe.php", "productCategory.php", "blog.php", "booking.php", "homeSection.php", "tags.php"];
        require_once "../../components/adminNav.php";
        ?>

        <!-- ---------------------------------- HEADER MENUE LIST ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list">
            <div class="admin__section_head">
                <h3 class="admin__section_title">home</h3>
            </div>
            <div class="admin__section_content">
                <div class="admin__contact">
                    <table class="admin__table">
                        <tr>
                            <th class="admin__table_title">id</th>
                            <th class="admin__table_title">title</th>
                            <th class="admin__table_title">sub title</th>
                            <th class="admin__table_title">img</th>
                            <th class="admin__table_title">panel</th>
                        </tr>
                        <?php
                        $id = '';
                        $title = '';
                        $subTitle = '';
                        $img = '';

                        $obj = new Home();
                        $result = $obj->select();


                        foreach ($result as $res) { ?>
                            <tr class="admin__section_item">
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $res->id ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $res->title ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_pos"><?php echo $res->sub_title ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <div class="admin__section_img">
                                        <img src="../../assets/img/home/<?php echo $res->img ?>" alt="<?php echo $res->title ?>">
                                    </div>
                                </td>
                                <td class="admin__section_item_td">
                                    <a href="?id=<?php echo $res->id ?>">
                                        <i class="example__class admin__icon fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="home/querys.php?id=<?php echo $res->id ?>&img=<?php echo $res->img ?>">
                                        <i class="admin__icon fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>
                <?php

                $id = '';
                $title = '';
                $subTitle = '';
                $img = '';

                if (isset($_GET["id"])) {
                    $result = $obj->select($_GET["id"]);

                    foreach ($result as $res) {
                        $id = $res->id;
                        $title = $res->title;
                        $subTitle = $res->sub_title;
                        $img = $res->img;
                    }
                }

                ?>
                <form class="admin__form" action="home/querys.php" method="POST" enctype="multipart/form-data">
                    <div class="form__flex">
                        <input class="admin__inp admin__inp_header form-control" type="text" name="title" value="<?php echo $title ?>" placeholder="Title" required>
                        
                        <input class="admin__inp admin__inp_header form-control" type="text" name="sub_title" value="<?php echo $subTitle ?>" placeholder="Sub Title" required>
                        
                        <input class="admin__inp admin__inp_header form-control" type="file" name="img" value="<?php echo $img ?>" <?php if(!isset($_GET["id"])){echo "required";} ?>>

                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="img" value="<?php echo $img; ?>">
                    </div>
                    <div>
                        <button class="btn custom-btn admin__form_btn" name="submit">Add Home Item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
</body>

</html>