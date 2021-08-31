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
    <link href="../../../assets/css/admin.css" rel="stylesheet" />
</head>

<body>
    <?php require_once "index.php" ?>

    <div class="admin">
        <?php require_once "../../../components/insertNav.php"; ?>

        <!-- ---------------------------------- Product ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list">
            <div class="admin__section_head">
                <h3 class="admin__section_title">product</h3>
            </div>
            <?php
            $obj = new Product();
            ?>
            <form class="admin__form" action="querys.php" method="POST" enctype="multipart/form-data">
                <div class="form__flex insert__admin_flex">
                    <input class="admin__inp admin__inp_header form-control" type="text" name="name" placeholder="Name" required>

                    <input class="admin__inp admin__inp_header form-control" type="number" name="price" placeholder="Price" required>

                    <textarea class="admin__inp admin__inp_header form-control" type="text" name="info" placeholder="Info" required></textarea>

                    <input class="admin__inp admin__inp_header form-control" type="number" name="sale" placeholder="Sale">

                    <textarea class="admin__inp admin__inp_header form-control" type="text" name="description" placeholder="Description" required></textarea>

                    <input class="admin__inp admin__inp_header form-control" type="file" name="img" require>

                    <input class="admin__inp admin__inp_header form-control" type="text" name="stock_time" placeholder="1/1/2021+">

                    <input class="admin__inp admin__inp_header form-control" type="text" name="tags" placeholder="Tags" required>

                    <input class="admin__inp admin__inp_header form-control" type="number" name="count" placeholder="Count" required>

                    <div class="product__select_group">
                        <span class="select__info">category</span>
                        <div class="more__info_group">
                            <div class="more__info_group_plus more__category_group_plus">+</div>
                            <select id="category" name="category[]">
                                <?php
                                require_once "../category/index.php";
                                $catObj = new Category();
                                $result = $catObj->select(false, "../../connect.php");

                                foreach ($result as $res) { ?>
                                    <option value="<?php echo $res->id ?>"><?php echo $res->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="product__select_group">
                        <span class="select__info">color</span>
                        <div class="more__info_group">
                            <div class="more__info_group_plus more__color_group_plus">+</div>
                            <input type="color" name="color[]">
                        </div>
                    </div>

                    <div class="product__select_group">
                        <span class="select__info">type</span>
                        <div class="more__info_group">
                            <div class="more__info_group_plus more__type_group_plus">+</div>
                            <select id="type" name="type[]">
                                <?php
                                require_once "../type/index.php";
                                $typeObj = new Type();
                                $result = $typeObj->select(false, "../../connect.php");

                                foreach ($result as $res) { ?>
                                    <option value="<?php echo $res->id ?>"><?php echo $res->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="product__select_group">
                        <span class="select__info">syze</span>
                        <div class="more__info_group">
                            <div class="more__info_group_plus more__size_group_plus">+</div>
                            <input type="text" name="size[]">
                        </div>
                    </div>



                    <div class="product__select_group">
                        <span class="select__info">img</span>
                        <div class="more__info_group">
                            <div class="more__info_group_plus more__img_group_plus">+</div>
                            <input type="file" name="imgs[]" id="img">
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn custom-btn admin__form_btn" name="submit">Add Product</button>
                </div>
            </form>
        </div>
    </div>


    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script src="../../../assets/js/admin.js"></script>
    <script>
        $('option[value="<?php echo $parentId ?>"]').attr('selected', true);
    </script>
</body>

</html>