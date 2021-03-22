<!DOCTYPE html>
<html>
    <head>
        <!--START LINK-->
        <?php $this->load->view('backend/template/link'); ?>
        <!--END LINK-->
    </head>

    <body class="hold-transition skin-blue-light sidebar-mini layout-boxed">
        <div class="wrapper">
            <!--START HEADER-->
            <?php $this->load->view('backend/template/header'); ?>
            <!--END HEADER-->

            <!--START SIDEBAR-->
            <?php $this->load->view('backend/template/sidebar'); ?>
            <!--END SIDEBAR-->

            <!-- START CONTENT -->
            <section class="content-wrapper">
            <?php $this->load->view($content); ?>
            </section>
            <!--END CONTENT-->

            <!--START FOOTER-->
            <?php $this->load->view('backend/template/footer'); ?>
            <!--END FOOTER-->
        </div>
    </body>
</html>