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
    <?php require_once "product/index.php" ?>

    <div class="admin">
        <?php require_once "../../components/adminNav.php"; ?>

        <!-- ---------------------------------- Product ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list">
            <div class="admin__section_head">
                <h3 class="admin__section_title">product</h3>
            </div>
            <?php
            $obj = new Product();
            $id = '';
            $name = '';
            $price = '';
            $info = '';
            $sale = '';
            $description = '';
            $img = '';
            $stockTime = '';
            $tags = '';
            $count = '';

            if (isset($_GET["id"])) {
                $result = $obj->select($_GET["id"]);

                foreach ($result as $res) {
                    $id = $res->id;
                    $name = $res->name;
                    $price = $res->price;
                    $info = $res->info;
                    $sale = $res->sale;
                    $description = $res->description;
                    $img = $res->img;
                    $stockTime = $res->stock_time;
                    $tags = $res->tags;
                    $count = $res->count;
                }
            }

            ?>
            <form class="admin__form" action="product/querys.php" method="POST" enctype="multipart/form-data">
                <div class="form__flex">
                    <input class="admin__inp admin__inp_header form-control" type="text" name="name" value="<?php echo $name ?>" placeholder="Name" required>

                    <input class="admin__inp admin__inp_header form-control" type="number" name="price" value="<?php echo $price ?>" placeholder="Price" required>

                    <textarea class="admin__inp admin__inp_header form-control" type="text" name="info" placeholder="Info" required><?php echo $info ?></textarea>

                    <input class="admin__inp admin__inp_header form-control" type="number" name="sale" value="<?php echo $sale ?>" placeholder="Sale">

                    <textarea class="admin__inp admin__inp_header form-control" type="text" name="description" placeholder="Description" required><?php echo $description ?></textarea>

                    <input class="admin__inp admin__inp_header form-control" type="file" name="img" value="<?php echo $img ?>" <?php if (!isset($_GET["id"])) {
                                                                                                                                    echo "required";
                                                                                                                                } ?>>

                    <input class="admin__inp admin__inp_header form-control" type="text" name="stock_time" value="<?php echo $stockTime ?>"
                    placeholder="1/1/2021+">

                    <input class="admin__inp admin__inp_header form-control" type="text" name="tags" value="<?php echo $tags ?>" placeholder="Tags" required>

                    <input class="admin__inp admin__inp_header form-control" type="number" name="count" value="<?php echo $count ?>" placeholder="Count" required>

                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="img" value="<?php echo $img; ?>">
                </div>
                <div>
                    <button class="btn custom-btn admin__form_btn" name="submit">Add Product</button>
                </div>
            </form>
            <div class="admin__section_content">
                <div class="admin__contact">
                    <table class="admin__table">
                        <tr>
                            <th class="admin__table_title">id</th>
                            <th class="admin__table_title">name</th>
                            <th class="admin__table_title">price</th>
                            <th class="admin__table_title">info</th>
                            <th class="admin__table_title">sale</th>
                            <th class="admin__table_title">description</th>
                            <th class="admin__table_title">img</th>
                            <th class="admin__table_title">stock time</th>
                            <th class="admin__table_title">tags</th>
                            <th class="admin__table_title">date</th>
                            <th class="admin__table_title">up date</th>
                            <th class="admin__table_title">count</th>
                            <th class="admin__table_title">panel</th>
                        </tr>
                        <?php

                        $result = $obj->select();


                        foreach ($result as $res) { ?>
                            <tr class="admin__section_item">
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $res->id ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $res->name ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_pos"><?php echo $res->price ?></h3>
                                </td>
                                <td class="admin__section_item_td admin__text">
                                    <h3 class="admin__section_item_pos admin__text_inner"><?php echo $res->info ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_pos"><?php echo ($res->sale ? $res->sale : "non"); ?></h3>
                                </td>
                                <td class="admin__section_item_td admin__text">
                                    <h3 class="admin__section_item_pos admin__text_inner"><?php echo $res->description ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <div class="admin__section_img">
                                        <img src="../../assets/img/product/<?php echo $res->img ?>" alt="<?php echo $res->name ?>">
                                    </div>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_pos"><?php echo ($res->stock_time ? $res->stock_time : "non"); ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_pos"><?php echo $res->tags ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_pos"><?php echo $res->date ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_pos"><?php echo $res->up_date ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_pos"><?php echo $res->count ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <a href="?id=<?php echo $res->id ?>">
                                        <i class="example__class admin__icon fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="product/querys.php?id=<?php echo $res->id ?>&img=<?php echo $res->img ?>">
                                        <i class="admin__icon fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
</body>

</html>