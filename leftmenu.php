
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/Profile.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class=" treeview">
                <a href="index.php"  title="Dashboard">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            
            <!-------------------------------customer----------------->
               <?php
            $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 80) ? "https://" : "http://";
            $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            $temp = explode("/j/", $url);
            if (isset($temp[1]) && $temp[1] != '') {
                $page_name = explode("/", $temp[1]);
                $name = isset($page_name[1]) ? $page_name[1] : '';
                if (strpos($name, '?') !== false) {
                    $page_name1 = explode("?", $name);
                    $name = $page_name1[0];
                }
            } else {
                $name = '';
            }

//echo "<pre>";print_r($name);die;
            ?>
            <li class="treeview  <?php
            if (($name == "addcategory.php") || ($name == "categorylist.php") || ($name == "editcategory.php")) {
                echo "menu-open";
            }
            ?>">
                <a href="#" title="Customer">
                    <i class="fa fa-user"></i>
                    <span>Customer</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu"  <?php if (($name == "addcustomer.php") || ($name == "customerlist.php") || ($name == "editcustomer.php")) { ?> style="display: block;"<?php } ?> >
                    <li title="Add" class="<?php
                    if ($name == "addcustomer.php") {
                        echo "active";
                    }
                    ?>"><a href="customer/addcustomer.php"><i class="fa fa-plus"></i> Add customer</a></li>
                    <li title="Customer" class="<?php
                    if (($name == "customerlist.php") || ($name == "editcustomer.php")) {
                        echo "active";
                    }
                    ?>"><a href="customer/customerlist.php"><i class="fa fa-list"></i> List customer</a></li>
                </ul> 
            </li>

            <!---------------------category--------------------------->
            <?php
            $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 80) ? "https://" : "http://";
            $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            $temp = explode("/j/", $url);
            if (isset($temp[1]) && $temp[1] != '') {
                $page_name = explode("/", $temp[1]);
                $name = isset($page_name[1]) ? $page_name[1] : '';
                if (strpos($name, '?') !== false) {
                    $page_name1 = explode("?", $name);
                    $name = $page_name1[0];
                }
            } else {
                $name = '';
            }

//echo "<pre>";print_r($name);die;
            ?>
            <li class="treeview  <?php
            if (($name == "addcategory.php") || ($name == "categorylist.php") || ($name == "editcategory.php")) {
                echo "menu-open";
            }
            ?>">
                <a href="#" title="Category">
                    <i class="fa fa-sitemap"></i>
                    <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu"  <?php if (($name == "addcategory.php") || ($name == "categorylist.php") || ($name == "editcategory.php")) { ?> style="display: block;"<?php } ?> >
                    <li title="Add" class="<?php
                    if ($name == "addcategory.php") {
                        echo "active";
                    }
                    ?>"><a href="category/addcategory.php"><i class="fa fa-plus"></i> Add Category</a></li>
                    <li title="Category" class="<?php
                    if (($name == "categorylist.php") || ($name == "editcategory.php")) {
                        echo "active";
                    }
                    ?>"><a href="category/categorylist.php"><i class="fa fa-list"></i> List Category</a></li>
                </ul> 
            </li>

            <!---------------------subcategory--------------------------->
            <?php
            $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 80) ? "https://" : "http://";
            $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            $temp = explode("/j/", $url);
            if (isset($temp[1]) && $temp[1] != '') {
                $page_name = explode("/", $temp[1]);
                $name = isset($page_name[1]) ? $page_name[1] : '';
                if (strpos($name, '?') !== false) {
                    $page_name1 = explode("?", $name);
                    $name = $page_name1[0];
                }
            } else {
                $name = '';
            }

//echo "<pre>";print_r($name);die;
            ?>
            <li class="treeview  <?php
            if (($name == "addsubcategory.php") || ($name == "subcategorylist.php") || ($name == "subeditcategory.php")) {
                echo "menu-open";
            }
            ?>">
                <a href="#" title="Category">
                    <i class="fa fa-sitemap"></i>
                    <span>Subcategory</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu"  <?php if (($name == "addsubcategory.php") || ($name == "subcategorylist.php") || ($name == "subeditcategory.php")) { ?> style="display: block;"<?php } ?> >
                    <li title="Add" class="<?php
                    if ($name == "addsubcategory.php") {
                        echo "active";
                    }
                    ?>"><a href="subcategory/addsubcategory.php"><i class="fa fa-plus"></i> Add Subategory</a></li>
                    <li title="Category" class="<?php
                    if (($name == "subcategorylist.php") || ($name == "subeditcategory.php")) {
                        echo "active";
                    }
                    ?>"><a href="subcategory/subcategorylist.php"><i class="fa fa-list"></i> List Subcategory</a></li>
                </ul> 
            </li>

            <!----------------------------------product------------------------>
            <li class="treeview  <?php
            if (($name == "addproduct.php") || ($name == "productlist.php")|| ($name == "editproduct.php")) {
                echo "menu-open";
            }
            ?>" >
                <a href="#" title="Product">
                    <i class="fa fa-circle"></i>
                    <span>product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" <?php if (($name == "addproduct.php") || ($name == "productlist.php")|| ($name == "editproduct.php")) { ?> style="display: block;"<?php } ?>>
                    <li  title="Add" class="<?php
                    if ($name == "addproduct.php") {
                        echo "active";
                    }
                    ?>"><a href="product/addproduct.php"><i class="fa fa-plus"></i> Add product</a></li>
                    <li  title="Products" class="<?php
                    if (($name == "productlist.php") || ($name == "editproduct.php")) {
                        echo "active";
                    }
                    ?>"><a href="product/productlist.php"><i class="fa fa-list"></i> Product List</a></li>

                </ul>
            </li>
            <!-----------------------------------orders--------------------------------------->
            <li   title="Order" class="<?php
            if ($name == "orderlist.php") {
                echo "active";
            }
            ?>">
                <a href="order/orderlist.php">
                    <i class="fa fa-sort"></i>
                    <span>Order</span>
                </a>
            </li>
            <!-------------------------------------Transaction------------------>
<!--            <li   title="Payment" class="<?php
            if ($name == "payment.php") {
                echo "active";
            }
            ?>">
                <a href="payment/payment.php">
                    <i class="fa fa-dollar"></i>
                    <span>Transaction</span>
                </a>
            </li>-->

            <!-------------------------------------Logout------------------>
            <li   title="logout" class="<?php
            if ($name == "loginform.php") {
                echo "active";
            }
            ?>">
                <a href="logout.php">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
    
</aside>