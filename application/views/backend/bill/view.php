<section class="content-header">
    <h4>Bill Payment</h4>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active">Bill Payment</li>
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
                	<a href="<?php echo base_url()."Bill/payment"; ?>">
    	                <button class="btn btn-danger btn-sm"><i class="ace-icon fa fa-reply">&nbsp;</i>Back</button>
                	</a>

                <form enctype="multipart/form-data" action="<?php echo base_url()."bill/do_update"; ?>" method="post">
                    <?php if($status_id == 1 || $status_id == 2){ ?>
                        <button id="btn-reject" data-target="#reject" data-toggle="modal" class="btn btn-warning btn-sm">
                            <i class="ace-icon fa fa-close">&nbsp;</i>Reject
                        </button>&nbsp;

                        <button class="btn btn-primary btn-sm" name="btn_bill" id="btn_bill" type="submit" value="2">
                            <i class="ace-icon fa fa-check">&nbsp;</i>Approve
                        </button>&nbsp;
                    <?php } ?>

                    <?php if($status_id == 4){ ?>
                        <button class="btn btn-primary btn-sm" name="btn_bill" id="btn_bill" type="submit" value="3">
                            <i class="ace-icon fa fa-check">&nbsp;</i>Save
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
                    		
                    		<td><i class="fa fa-building">&nbsp;</i>FORWARDER</td>
                    		<td width="10%" align="center">:</td>
                    		<td>
                    			<input type="text" readonly="readonly" class="form-control" value="<?php echo $ff_name; ?>">
                    		</td>
                    	</tr>

                        <tr>
                            <?php if($status_id == 2){ ?>
                            <td><i class="fa fa-dollar">&nbsp;</i>AMOUNT</td>
                            <td width="10%" align="center">:</td>
                            <td>
                                <input type="text" name="amount" id="amount" class="form-control amount" style="text-align: right;" placeholder="Rp. " required="required">
                            </td>
                            <?php } else { ?>
                                <td><i class="fa fa-dollar">&nbsp;</i>AMOUNT</td>
                                <td width="10%" align="center">:</td>
                                <td>
                                    <input type="text" readonly="readonly" class="form-control" value="Rp <?php echo number_format($amount); ?>">
                                </td>
                            <?php } ?>

                            <td width="10%"></td>

                            <?php 
                                if($tag == 1){
                                    $d = 'Credit';
                                }else{
                                    $d = 'Direct Payment';
                                }
                            ?>
                            
                            <td><i class="fa fa-credit-card">&nbsp;</i>PAYMENT METHOD</td>
                            <td width="10%" align="center">:</td>
                            <td><input type="text" readonly="readonly" class="form-control" value="<?php echo $d; ?>"></td>
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
                            <td><input type="text" readonly="readonly" class="form-control" value="<?php echo $bank_name; ?>"></td>
                            <?php }else{ ?>

                            <?php } ?>
                        </tr>

                        <tr>
                            <?php if($status_id == 4){ ?>
                                <td><i class="fa fa-calendar">&nbsp;</i>EXPIRED DO</td>
                                <td width="10%" align="center">:</td>
                                <td><input type="text" name="expired_do" class="form-control" id="date_expiredDO"></
                            <?php }elseif($status_id == 6){ ?>
                                <td><i class="fa fa-calendar">&nbsp;</i>EXPIRED DO</td>
                                <td width="10%" align="center">:</td>
                                <td><input type="text" name="expired_do" class="form-control" readonly="readonly" value="<?php echo date('d/m/Y', strtotime($expired_do)); ?>"></
                            <?php } ?>
                        </tr>

                        <tr>
                            <?php if($status_id == 2){ ?>
                                <td><i class="fa fa-file-text-o">&nbsp;</i>FILE PROFORMA</td>
                                <td width="10%" align="center">:</td>
                                <td colspan="5"><input type="file" name="file_proforma" class="form-control" required="true"></td>
                            <?php }elseif($status_id == 5){ ?>
                                <!-- kosong -->
                            <?php }else{ ?>
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
                            <?php } ?>
                        </tr>

                        <?php if($status_id == 4){ ?>
                        <tr>
                            <td><i class="fa fa-file-text-o">&nbsp;</i>FILE INVOICE</td>
                            <td width="10%" align="center">:</td>
                            <td colspan="5"><input type="file" name="file_invoice" class="form-control" required="true"></td>
                        </tr>

                        <tr>
                            <td><i class="fa fa-file-text-o">&nbsp;</i>FILE DO</td>
                            <td width="10%" align="center">:</td>
                            <td colspan="5"><input type="file" name="file_do" class="form-control" required="true"></td>
                        </tr>
                        <?php }elseif($status_id == 6){ ?>
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
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="approve" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title"><i style="color: red;" class="fa fa-warning">&nbsp;</i>Approve Confirmation</h4>
            </div>

            <form class="form-horizontal" action="<?php echo base_url()."delivery/do_update"; ?>" method="post" enctype="multipart/form-data" role="form">

                <div class="modal-body">
                    <div class="form-group">
                        <h3 style="text-align: center;">Are you sure, approve this data?</h3> 
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit"> Yes&nbsp;</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END Modal Approve -->


<!-- Modal Reject -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="reject" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title"><i style="color: red;" class="fa fa-warning">&nbsp;</i>Reject Confirmation</h4>
            </div>

            <form class="form-horizontal" action="<?php echo base_url()."bill/reject"; ?>" method="post" enctype="multipart/form-data" role="form">

                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">REASON</label> 
                        <div class="col-sm-9">
                            <textarea name="notes_reject" id="editor1" class="form-control" rows="4" required="true"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm fa fa-check" type="submit"> Yes</button>
                    <button type="button" class="btn btn-danger btn-sm fa fa-close" data-dismiss="modal"> No</button>
                </div>

                <input type="hidden" name="rqid" value="<?php echo $rqid; ?>">
                <input type="hidden" name="dlid" value="<?php echo $dlid; ?>">
            </form>
        </div>
    </div>
</div>
<!-- END Modal Reject -->


<script >
    $(document).ready(function(){
        $(".amount").mask("000,000,000,000,000.000", {reverse:true});
    }); 
</script>