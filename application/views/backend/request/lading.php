<section class="content-header">
    <h4>Bill of Lading</h4>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active">Bill of Lading</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <section>
        <?php echo $this->session->flashdata('msg'); ?> 
    </section>
    
    <div class="box">
        <div class="box-header with-border">
            <h6 class="box-title">Results for "Latest Submit"</h6>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>

        <div class="box-body">
            <div class="clearfix">
                <button id="btn-add" data-target="#add-data" data-toggle="modal" class="btn btn-primary btn-sm">
                    <i class="ace-icon fa fa-plus">&nbsp;</i>Add Data
                </button>

                <div class="pull-right tableTools-container">
                    <!-- onclick="javascript:window.open(this.href); return false;" -->
                    <a href="<?php echo base_url()."Request/export_pdf"; ?>" target="_blank">
                        <button id="btnExportPDF" name="typePDF" type="button" class="btn btn-sm btn-danger" title="PDF">
                            <i style="color: white;" class="fa fa-file-pdf-o"></i>
                        </button>
                    </a>

                    <a href="<?php echo base_url()."Request/export_excel"; ?>" target="_blank">
                        <button id="btnExportXls" title="Excel" type="submit" name="type" value="xls" class="btn btn-sm btn-success">
                            <i style="color: white;" class="fa fa-file-excel-o"></i>
                        </button>
                    </a>

                    <!-- <button onclick="btnPrint()" title="Print" class="btn btn-sm btn-primary"><i style="color: white;" class="fa fa-print"></i></button> -->
                </div>
            </div><br/>

            <div class="box box-primary">
                <div class="box-body">
                    <table id="tbl" class="table table-bordered table-condensed table-striped table-hover">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>REQ. NUMBER</th>
                                <th>BL NUMBER</th>
                                <th>FORWARDER</th>
                                <th>SHIPPING LINE</th>
                                <th>STATUS</th>
                                <th>DATE</th>
                                <th>TOOLS</th>
                            </tr>
                        </thead>

                        
                        
                        <tbody>
                        <?php $i = 1; foreach ($request->result() as $row) { ?> 
                            <?php 
                                if($row->status_desc == 'Job Order'){
                                    $j = 'label-success';
                                }elseif($row->status_desc == 'DO Request'){
                                    $j = 'label-warning';
                                }elseif($row->status_desc == 'Bill'){
                                    $j = 'label-info';
                                }elseif($row->status_desc == 'Paid'){
                                    $j = 'bg-navy';
                                }elseif($row->status_desc == 'DO Released'){
                                    $j = 'bg-maroon';
                                }else{
                                    $j = 'bg-olive';
                                }
                            ?>
                            
                            <!--<td <?php // echo $row->status_desc == 'Job Order' ? 'class="label-success"' : 'class="label-danger"'?>>-->
                                    <?php // echo $row->status_desc; ?>
                            <!--</td>-->
                            
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row->req_number; ?></td>
                                <td><?php echo $row->bl_number; ?></td>
                                <td><?php echo $row->ff_name; ?></td>
                                <td><?php echo $row->sl_name; ?></td>
                                <td style="text-align: center;" class="<?php echo $j; ?>">
                                    <?php echo $row->status_desc; ?>
                                </td>
                                <td><?php echo date('d/m/Y', strtotime($row->created_date)); ?></td>
                                <td>
									<a href="<?php echo base_url()."request/view/".$row->id; ?>">
										<span class="fa fa-eye" style="color: #0073b7">&nbsp;&nbsp;View</span>
									</a>
                                </td>
                            </tr>
                        <?php $i++;} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $kode = "";
    if ($this->uri->segment(3) == "edit") {
        $kode = $rc->position_kode;
    } else {
        $kode = generate_request('req_number', 'request', 'REQ');
    }
?>

<!-- Modal Tambah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title"><i class="fa fa-plus">&nbsp;</i>Add Data</h4>
            </div>

            <form class="form-horizontal" action="<?php echo base_url()."request/do_add"; ?>" method="post" enctype="multipart/form-data" role="form">

                <div class="modal-body">
                    <div class="form-group">
                         <label class="col-sm-3 control-label">REQ NUMBER</label> 
                        <div class="col-sm-9">
                            <input type="text" value="<?php echo $kode; ?>" class="form-control" name="req_number" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                         <label class="col-sm-3 control-label">BL NUMBER</label> 
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="bl_number" required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">SHIPPING</label>
                        <div class="col-sm-9">
                            <select name="sl_name" id="sl_name" class="form-control" required="required">
                                <?php if (count($sl)) { ?>
                                    <option value="">-- Select Shipping --</option>
                                    <?php foreach ($sl->result() as $list) { ?>
                                        <?php
                                        echo "<option value='".$list->company_name."'>" . $list->company_name . "</option>";
                                        ?>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">FORWARDER</label>
                        <div class="col-sm-9">
                            <select name="ff_name" id="ff_name" class="form-control" required="required">
                                <?php if (count($ff)) { ?>
                                    <option value="">-- Select Forwarder --</option>
                                    <?php foreach ($ff->result() as $list) { ?>
                                        <?php
                                        echo "<option value='".$list->company_name."'>" . $list->company_name . "</option>";
                                        ?>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-check">&nbsp;</i>SAVE</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-close">&nbsp;</i> CANCEL</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END Modal Tambah -->