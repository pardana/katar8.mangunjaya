<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <?php $cek = $this->session->userdata('roles_id'); ?>
        
            <?php if($cek == '2'){ ?>
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="<?php echo base_url()."Request"; ?>">
                        <i class="fa fa-home"></i><span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url()."Request/lading"; ?>">
                        <i class="fa fa-clipboard"></i><span>Bill of Lading</span>
                    </a>
                </li>
            <?php }elseif($cek == '3'){ ?>
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="<?php echo base_url()."Delivery"; ?>">
                        <i class="fa fa-home"></i><span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url()."Delivery/order"; ?>">
                        <i class="fa fa-clipboard"></i><span>Delivery Order</span>
                    </a>
                </li>
            <?php }else{ ?>
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="<?php echo base_url()."Bill"; ?>">
                        <i class="fa fa-home"></i><span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url()."Bill/payment"; ?>">
                        <i class="fa fa-clipboard"></i><span>Bill Payment</span>
                    </a>
                </li>
            <?php } ?>

            <li class="header">USER</li>
            <li><a href="<?php echo base_url()."Login/logout"; ?>"><i class="fa fa-power-off text-red"></i> <span>Logout</span></a></li>
        </ul>
    </section>
</aside>