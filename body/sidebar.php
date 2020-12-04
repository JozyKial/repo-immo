
<!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
            <h5 class="centered">Jo Potter</h5>
            <li class="mt">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span>Elements</span>
                </a>
                <ul class="sub">
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=register">Register</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a class="active" href="javascript:;">
                    <i class="fa fa-comments-o"></i>
                    <span>Tchat Espace</span>
                </a>
                <ul class="sub">
                    <li class="active"><a href="#">Membres</a></li>
                    <li><a href="#s"> Chat Room</a></li>
                </ul>
            </li>


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <div class="col-lg-12">
                <?php
                include 'pages/' . $page . '.php';
                ?>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->
