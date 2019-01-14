<!doctype html>
<?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Angeethi Cafe</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/cs-skin-elastic.css'); ?>">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/scss/style.css'); ?>">
    <link href="<?php echo base_url('assets/css/lib/vector-map/jqvmap.min.css'); ?>" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?php echo base_url('images/logo.png'); ?>" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?php echo base_url('images/logo2.png'); ?>" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url('AdminPanel/Dasboard'); ?>"> <i class="menu-icon fa fa-dashboard"></i>ANGEETHI HOSPITALITY</a>
                    </li>
                    <h3 class="menu-title">Phone: 06115-252222</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo base_url('Product'); ?>"> <i class="menu-icon fa fa-laptop"></i>Product Entry</a>

                    </li>
                    <li>
                        <a href="<?php echo base_url('Product/Listing'); ?>"> <i class="menu-icon fa fa-table"></i>View Product</a>

                    </li>
                    <li>
                        <a href="<?php echo base_url('Inventory/'); ?>"> <i class="menu-icon ti-email"></i>Inventory </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Billing'); ?>" class="dropdown-toggle" > <i class="menu-icon fa fa-bar-chart"></i>Billing</a>

                    </li>
					<li>
                        <a href="<?php echo base_url('Billing/InvoiceView'); ?>"> <i class="menu-icon fa fa-th"></i>Invoice</a>

                    </li>

					<li>
                        <a href="<?php echo base_url('AdminPanel/CustomerList'); ?>" class="dropdown-toggle" > <i class="menu-icon fa fa-bar-chart"></i>Customer List</a>

                    </li>

                    <li>
                        <a href="<?php echo base_url('AdminPanel/logOut'); ?>" class="dropdown-toggle" > <i class="menu-icon fa fa-area-chart"></i>Logout</a>

                    </li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->



    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url('images/admin.jpg'); ?>" alt="User Avatar">
                        </a>

                        <!--<div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href=""><i class="fa fa-power -off"></i>Logout</a>
                        </div>-->
                    </div>



                </div>
            </div>

        </header>

		<?php } ?>
