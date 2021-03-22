<!-- Main content -->
<section class="content">
    <div class="row">        
        <div class="col-md-12">
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-credit-card"></i> Choose Payment Option</h4>
            </div>
        </div>

        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-bullhorn"></i>
                    <h3 class="box-title"><span style="color: red;">i</span>BANK TRANSFER</h3>
                </div>

                <div class="box-body">
                    <div class="col-md-12" style="text-align: center;">
                    <form class="form-horizontal" action="<?php echo base_url()."delivery/checkout"; ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="radio">
                            <span>
                                <input type="radio" name="bank_id" value="1" checked>
                                <img src="<?php echo base_url() ?>/assets/images/logo_bca.png" style="height: 15%; width: 15%;">
                            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span>
                                <input type="radio" name="bank_id" value="2">
                                <img src="<?php echo base_url() ?>/assets/images/logo_bni.jpg" style="height: 15%; width: 15%;">
                            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span>
                                <input type="radio" name="bank_id" value="3">
                                <img src="<?php echo base_url() ?>/assets/images/logo_bri.jpg" style="height: 15%; width: 15%;">
                            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span>
                                <input type="radio" name="bank_id" value="4">
                                <img src="<?php echo base_url() ?>/assets/images//logo_mandiri.png" style="height: 15%; width: 15%;">
                            </span>
                            <input type="hidden" name="rqid" value="<?php echo $rqid; ?>">
                            <input type="hidden" name="dlid" value="<?php echo $dlid; ?>">
                        </div>
                    </div>
                </div><br/>

                <div class="box-body">
                        <table id="tbl_payment" class="table table-bordered table-condensed table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>REQ. NUMBER</th>
                                    <th>BL NUMBER</th>
                                    <th>CARGO OWNER</th>
                                    <th>SHIPPING</th>
                                    <th>AMOUNT</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><?php echo $req_number; ?></td>
                                    <td><?php echo $bl_number; ?></td>
                                    <td><?php echo $co_name; ?></td>
                                    <td><?php echo $sl_name; ?></td>
                                    <td>Rp <?php echo number_format($amount); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="text-align: center;"><b>Total Payment</b></td>
                                    <td style="color: red;">Rp <?php echo number_format($amount); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4"></td>
                                    <td>
                                        <button type="submit" name="checkout" class="btn btn-sm btn-primary"><i class="fa fa-credit-card"></i>&nbsp;Check Out</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</section>
