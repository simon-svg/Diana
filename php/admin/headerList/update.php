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

        <!-- ---------------------------------- HEADER MENUE LIST ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list">
            <div class="admin__section_head">
                <h3 class="admin__section_title">header menu list</h3>
            </div>
            <?php
            $obj = new HeaderList();
            $id = '';
            $name = '';
            $link = '';
            $parentId = '';

            if (isset($_GET["id"])) {
                $result = $obj->select($_GET["id"], "../../connect.php");

                foreach ($result as $res) {
                    $id = $res->id;
                    $name = $res->name;
                    $link = $res->link;
                    $parentId = $res->parent_id;
                }
            }

            ?>
            <form class="admin__form" action="querys.php" method="POST" enctype="multipart/form-data">
                <div class="form__flex insert__admin_flex">
                    <input class="admin__inp admin__inp_header form-control" type="text" name="name" value="<?php echo $name ?>" placeholder="Name" required>

                    <input class="admin__inp admin__inp_header form-control" type="text" name="link" value="<?php echo $link ?>" placeholder="Link" required>

                    <div class="product__select_group">
                        <div class="more__info_group">
                            <select id="parentId" name="parent_id">
                                <option value="0">no</option>
                                <?php
                                require_once "index.php";
                                $catObj = new HeaderList();
                                $result = $catObj->select(false, "../../connect.php");

                                foreach ($result as $res) { ?>
                                    <option value="<?php echo $res->id ?>"><?php echo $res->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </div>
                <div>
                    <button class="btn custom-btn admin__form_btn" name="submit">Update Header List</button>
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