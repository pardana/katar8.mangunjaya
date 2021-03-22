<section class="content-header">
    <h4>Bill of Lading</h4>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active">Bill of Lading</li>
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
            	<a href="<?php echo base_url()."request/lading"; ?>">
	                <button class="btn btn-primary btn-sm"><i class="ace-icon fa fa-reply">&nbsp;&nbsp;</i>Back</button>
            	</a>

                <div class="pull-right tableTools-container">
                    <a href="" onclick="javascript:window.open(this.href); return false;">
                        <button id="btnExportPDF" name="typePDF" type="button" class="btn btn-sm btn-danger" title="PDF">
                            <i style="color: white;" class="fa fa-file-pdf-o"></i>
                        </button>
                    </a>

                    <button id="btnExportXls" title="Excel" type="submit" name="type" value="xls" class="btn btn-sm btn-success">
                        <i style="color: white;" class="fa fa-file-excel-o"></i>
                    </button>

                    <button onclick="btnPrint()" title="Print" class="btn btn-sm btn-primary"><i style="color: white;" class="fa fa-print"></i></button>
                </div>
            </div><br/>

            <div class="box box-primary">
                <div class="box-body">
                    <table border="0">
                    	<tr>
                    		<td><i class="fa fa-newspaper-o">&nbsp;</i>REQ. NUMBER</td>
                    		<td width="10%" align="center">:</td>
                    		<td>
                    			<input type="text" readonly="readonly" class="form-control" value="<?php echo $req_number; ?>">
                    		</td>

                    		<td width="10%"></td>

                    		<td><i class="fa fa-building">&nbsp;</i>FREIGHT FORWARDER</td>
                    		<td width="10%" align="center">:</td>
                    		<td>
                    			<input type="text" readonly="readonly" class="form-control" value="<?php echo $ff_name; ?>">
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
                            <td><i class="fa fa-calendar">&nbsp;</i>DATE</td>
                            <td width="10%" align="center">:</td>
                            <td>
                                <input type="text" readonly="readonly" class="form-control" value="<?php echo date('d/m/Y', strtotime($created_date)); ?>">
                            </td>

                            <td></td>

                            <?php if($status_id == 6){ ?>
                            <td><i class="fa fa-calendar">&nbsp;</i>EXPIRED DO</td>
                            <td width="10%" align="center">:</td>
                            <td>
                                <input type="text" readonly="readonly" class="form-control" value="<?php echo date('d/m/Y', strtotime($expired_do)); ?>">
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
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

