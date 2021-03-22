<header class="main-header">
    <span class="logo">
        <span class="logo-mini"><b class="fa fa-ship"></b></span>
        <span class="logo-lg"><i class="fa fa-ship">&nbsp;</i><b>iCARGO</b></span>
    </span>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs"><i class="fa fa-user">&nbsp;&nbsp;</i>Welcome, 
                            <?php echo $this->session->userdata('username'); ?>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>