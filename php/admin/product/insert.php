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
        <nav id="sidebar-admin">
            <div class="sidebar-header">
                <h3><a href="../../../index.php">Home</a></h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a class="admin__item" href="../index.php">Header Menu lists</a>
                </li>
                <li>
                    <a class="admin__item" href="../home.php">Home</a>
                </li>
                <li>
                    <a class="admin__item" href="../contact.php">Contact</a>
                </li>
                <li>
                    <a class="admin__item" href="../subscribe.php">Subscribe</a>
                </li>
                <li>
                    <a class="admin__item" href="../blog.php">Blog</a>
                </li>
                <li>
                    <a class="admin__item" href="../product.php">Product</a>
                </li>
                <li>
                    <a class="admin__item" href="../productCategory.php">Product Category</a>
                </li>
                <li>
                    <a class="admin__item" href="../category.php">Category</a>
                </li>
                <li>
                    <a class="admin__item" href="../productColor.php">Product Color</a>
                </li>
                <li>
                    <a class="admin__item" href="../color.php">Color</a>
                </li>
                <li>
                    <a class="admin__item" href="../productType.php">Product Type</a>
                </li>
                <li>
                    <a class="admin__item" href="../type.php">Type</a>
                </li>
                <li>
                    <a class="admin__item" href="../productSize.php">Product Size</a>
                </li>
                <li>
                    <a class="admin__item" href="../size.php">Size</a>
                </li>
                <li>
                    <a class="admin__item" href="../productImg.php">Product Img</a>
                </li>
                <li>
                    <a class="admin__item" href="../productTag.php">Product Tag</a>
                </li>
            </ul>
        </nav>

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
            <form class="admin__form" action="querys.php" method="POST" enctype="multipart/form-data">
                <div class="form__flex insert__admin_flex">
                    <input class="admin__inp admin__inp_header form-control" type="text" name="name" value="<?php echo $name ?>" placeholder="Name" required>

                    <input class="admin__inp admin__inp_header form-control" type="number" name="price" value="<?php echo $price ?>" placeholder="Price" required>

                    <textarea class="admin__inp admin__inp_header form-control" type="text" name="info" placeholder="Info" required><?php echo $info ?></textarea>

                    <input class="admin__inp admin__inp_header form-control" type="number" name="sale" value="<?php echo $sale ?>" placeholder="Sale">

                    <textarea class="admin__inp admin__inp_header form-control" type="text" name="description" placeholder="Description" required><?php echo $description ?></textarea>

                    <input class="admin__inp admin__inp_header form-control" type="file" name="img" value="<?php echo $img ?>" <?php if (!isset($_GET["id"])) {
                                                                                                                                    echo "required";
                                                                                                                                } ?>>

                    <input class="admin__inp admin__inp_header form-control" type="text" name="stock_time" value="<?php echo $stockTime ?>" placeholder="1/1/2021+">

                    <input class="admin__inp admin__inp_header form-control" type="text" name="tags" value="<?php echo $tags ?>" placeholder="Tags" required>

                    <input class="admin__inp admin__inp_header form-control" type="number" name="count" value="<?php echo $count ?>" placeholder="Count" required>

                    <div class="product__select_group">
                        <span class="select__info">category</span>
                        <div class="more__info_group">
                            <div class="more__info_group_plus more__category_group_plus">+</div>
                            <select id="category" name="category">
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
                            <select id="color" name="color">
                                <?php
                                require_once "../color/index.php";
                                $colorObj = new Color();
                                $result = $colorObj->select(false, "../../connect.php");

                                foreach ($result as $res) { ?>
                                    <option value="<?php echo $res->id ?>"><?php echo $res->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="product__select_group">
                        <span class="select__info">type</span>
                        <div class="more__info_group">
                            <div class="more__info_group_plus more__type_group_plus">+</div>
                            <select id="type" name="type">
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
                            <select id="size" name="size">
                                <?php
                                require_once "../size/index.php";
                                $sizeObj = new Size();
                                $result = $sizeObj->select(false, "../../connect.php");

                                foreach ($result as $res) { ?>
                                    <option value="<?php echo $res->id ?>"><?php echo $res->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="img" value="<?php echo $img; ?>">
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