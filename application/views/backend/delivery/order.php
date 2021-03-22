<section class="content-header">
    <h4>Delivery Order</h4>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active">Delivery Order</li>
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
                <div class="pull-right tableTools-container">
                    <a href="<?php echo base_url()."Delivery/export_pdf"; ?>" target="_blank">
                        <button id="btnExportPDF" name="typePDF" type="button" class="btn btn-sm btn-danger" title="PDF">
                            <i style="color: white;" class="fa fa-file-pdf-o"></i>
                        </button>
                    </a>

                    <a href="<?php echo base_url()."Delivery/export_excel"; ?>" target="_blank">
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
                                <th>CARGO OWNER</th>
                                <th>SHIPPING LINE</th>
                                <th>AMOUNT</th>
                                <th>STATUS</th>
                                <th>DATE</th>
                                <th>TOOLS</th>
                            </tr>
                        </thead>

                        
                        
                        <tbody>
                        <?php $i = 1; foreach ($order->result() as $row) { ?> 
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
                                <td><?php echo $row->co_name; ?></td>
                                <td><?php echo $row->sl_name; ?></td>
                                <td>Rp <?php echo number_format($row->amount); ?></td>
                                <td style="text-align: center;" class="<?php echo $j; ?>">
                                    <?php echo $row->status_desc; ?>
                                </td>
                                <td><?php echo date('d/m/Y', strtotime($row->created_date)); ?></td>
                                <td>
									<a href="<?php echo base_url()."delivery/view/".$row->dlid; ?>">
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