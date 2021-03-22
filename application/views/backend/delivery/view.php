<section class="content-header">
    <h4>Delivery Order</h4>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active">Delivery Order</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h6 class="box-title">View Detail</h6>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>

        <div class="box-body">
            <div class="clearfix">
                <table>
            	<a href="<?php echo base_url()."delivery/order"; ?>">
	                <button class="btn btn-danger btn-sm"><i class="ace-icon fa fa-reply">&nbsp;</i>Back</button>
            	</a>

                <?php if($status_id == 3){ ?>
                    <a href="<?php echo base_url()."delivery/payment/".$dlid; ?>">
                        <button class="btn btn-primary btn-sm"><i class="ace-icon fa fa-dollar">&nbsp;</i>Payment</button>
                    </a>  
                <?php } ?>

                <?php if($status_id == 1){ ?>
                <button id="btn-reject" data-target="#reject" data-toggle="modal" class="btn btn-warning btn-sm">
                    <i class="ace-icon fa fa-close">&nbsp;</i>Reject
                </button>&nbsp;

                <form action="<?php echo base_url()."delivery/do_update"; ?>" method="post">
                    <button class="btn btn-primary btn-sm" type="submit">
                        <i class="ace-icon fa fa-check">&nbsp;</i>Approve
                    </button>
                <?php } ?>
                </table>
            </div><br/>

            <div class="box box-primary">
                <div class="box-body">
                    <table border="0">
                    	<tr>
                    		<td width="13%"><i class="fa fa-newspaper-o">&nbsp;</i>REQ. NUMBER</td>
                    		<td width="10%" align="center">:</td>
                    		<td>
                    			<input type="text" readonly="readonly" class="form-control" value="<?php echo $req_number; ?>">
                    		</td>

                    		<td width="10%"></td>

                    		<td><i class="fa fa-building">&nbsp;</i>CARGO OWNER</td>
                    		<td width="10%" align="center">:</td>
                    		<td>
                    			<input type="text" readonly="readonly" class="form-control" value="<?php echo $co_name; ?>">
                    		</td>
                    	</tr>

                    	<tr>
                    		<td><i class="fa fa-newspaper-o">&nbsp;</i>BL NUMBER</td>
                    		<td width="10%" align="center">:</td>
                    		<td>
                    			<input type="text" readonly="readonly" class="form-control" value="<?php echo $bl_number; ?>">
                    		</td>

                    		<td width="10%"></td>
                    		
                    		<td><i class="fa fa-building">&nbsp;</i>SHIPPING LINE</td>
                    		<td width="10%" align="center">:</td>
                    		<td>
                    			<input type="text" readonly="readonly" class="form-control" value="<?php echo $sl_name; ?>">
                    		</td>
                    	</tr>

                        <tr>
                            <td><i class="fa fa-dollar">&nbsp;</i>AMOUNT</td>
                            <td width="10%" align="center">:</td>
                            <td>
                                <input type="text" readonly="readonly" class="form-control" value="Rp <?php echo number_format($amount); ?>">
                            </td>

                            <td width="10%"></td>
                            
                            <td><i class="fa fa-credit-card">&nbsp;</i>PAYMENT METHOD</td>
                            <td width="10%" align="center">:</td>

                            <?php 
                                if($tag == 1){
                                    $d = 'Credit';
                                }elseif ($tag == 2) {
                                    $d = 'Direct Payment';
                                }else{
                                    $d = '';
                                }
                            ?>

                            <?php if($status_id == 1){ ?>
                            <td>
                                <select name="payment" class="form-control" required="required">
                                    <option value="">-- Select Payment --</option>
                                    <option value="1">1. Credit</option>
                                    <option value="2">2. Direct Payment</option>
                                </select>
                            </td>
                            <?php } else { ?>
                                <td><input type="text" readonly="readonly" class="form-control" value="<?php echo $d; ?>"></td>
                            <?php } ?>

                        </tr>

                        <tr>
                             <td><i class="fa fa-calendar">&nbsp;</i>DATE</td>
                            <td width="10%" align="center">:</td>
                            <td>
                                <input type="text" readonly="readonly" class="form-control" value="<?php echo date('d/m/Y', strtotime($created_date)); ?>">
                            </td>

                            <td></td>

                            <?php if($status_id == 4 || $status_id == 6){ ?>
                            <td><i class="fa fa-bank">&nbsp;</i>PAYMENT BANK</td>
                            <td width="10%" align="center">:</td>
                            <td>
                                <input type="text" readonly="readonly" class="form-control" value="<?php echo $bank_name; ?>">
                            </td>
                            <?php } ?>
                        </tr>

                        <tr>
                            <?php if($status_id == 6){ ?>
                                <td><i class="fa fa-calendar">&nbsp;</i>EXPIRED DO</td>
                                <td width="10%" align="center">:</td>
                                <td><input type="text" name="expired_do" class="form-control" readonly="readonly" value="<?php echo date('d/m/Y', strtotime($expired_do)); ?>"></
                            <?php } ?>
                        </tr>

                        <?php if($status_id == 3 || $status_id == 4 || $status_id == 6){ ?>
                        <tr>
                            <td><i class="fa fa-file-text-o">&nbsp;</i>FILE PROFORMA</td>
                            <td width="10%" align="center">:</td>
                            <td colspan="4">
                                <input type="text" name="file_proforma" readonly="readonly" class="form-control" value="<?php echo $file_proforma; ?>">
                            </td>
                            <td>&nbsp;&nbsp;
                                <a href="<?php echo base_url()."assets/dir_proforma/".$file_proforma; ?>" target="_blank">
                                    <i class="fa fa-download"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>

                        <?php if($status_id == 6){ ?>
                        <tr>
                            <td><i class="fa fa-file-text-o">&nbsp;</i>FILE INVOICE</td>
                            <td width="10%" align="center">:</td>
                            <td colspan="4"><input type="text" name="file_invoice" class="form-control" readonly="true" value="<?php echo $file_invoice; ?>">
                            </td>
                            <td>&nbsp;&nbsp;
                                <a href="<?php echo base_url()."assets/dir_invoice/".$file_invoice; ?>" target="_blank">
                                    <i class="fa fa-download"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td><i class="fa fa-file-text-o">&nbsp;</i>FILE DO</td>
                            <td width="10%" align="center">:</td>
                            <td colspan="4"><input type="text" name="file_do" class="form-control" readonly="true" value="<?php echo $file_do; ?>">
                            </td>
                            <td>&nbsp;&nbsp;
                                <a href="<?php echo base_url()."assets/dir_do/".$file_do; ?>" target="_blank">
                                    <i class="fa fa-download"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>

                        <tr>
                            <?php if($status_id != 5){ ?>
                            <td><i class="fa fa-pencil">&nbsp;</i>NOTES REQUEST</td>
                            <td width="10%" align="center">:</td>
                            <?php } ?>

                            <?php if($status_id == 1){ ?>

                            <td colspan="5">
                                <textarea name="notes_request" id="editor1" class="form-control" rows="2" required="true"></textarea>
                            </td>
                            <?php } elseif($status_id != 5) { ?>
                            <td colspan="5">
                                <textarea id="editor1" class="form-control" rows="2" readonly="readonly"><?php echo $notes_request; ?></textarea>
                            </td>
                            <?php } ?>
                        </tr>

                        <tr>
                            <?php if($status_id == 5){ ?>
                            <td><i class="fa fa-pencil">&nbsp;</i>NOTES REJECT</td>
                            <td width="10%" align="center">:</td>

                            <td colspan="5">
                                <textarea id="editor1" class="form-control" rows="2" readonly="readonly"><?php echo $notes_reject; ?></textarea>
                            </td>
                            <?php } ?>
                        </tr>

                        <input type="hidden" name="rqid" value="<?php echo $rqid; ?>">
                        <input type="hidden" name="dlid" value="<?php echo $dlid; ?>">

                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal Approve -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="reject" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title"><i style="color: red;" class="fa fa-warning">&nbsp;</i>Reject Confirmation</h4>
            </div>

            <form class="form-horizontal" action="<?php echo base_url()."delivery/reject"; ?>" method="post" enctype="multipart/form-data" role="form">

                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">REASON</label> 
                        <div class="col-sm-9">
                            <textarea name="notes_reject" id="editor1" class="form-control" rows="4" required="true"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm fa fa-check" type="submit"> Yes&nbsp;</button>
                    <button type="button" class="btn btn-danger btn-sm fa fa-close" data-dismiss="modal"> No</button>
                </div>

                <input type="hidden" name="rqid" value="<?php echo $rqid; ?>">
                <input type="hidden" name="dlid" value="<?php echo $dlid; ?>">
            </form>
        </div>
    </div>
</div>
<!-- END Modal Approve -->