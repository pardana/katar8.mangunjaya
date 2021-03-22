<section class="content-header">
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li class="fa fa-home">&nbsp; Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">        
        <div class="col-md-12">
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info-circle"></i> Welcome to iCARGO!</h4>
                
            </div>
        </div>
		
		<div class="col-md-4">
			<div class="info-box bg-green">
				<span class="info-box-icon"><i class="fa fa-truck"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Job Order</span>
					<span class="info-box-number"><?php echo $pndg; ?></span>
				</div>
			</div>
		
			<div class="info-box bg-aqua">
				<span class="info-box-icon"><i class="fa fa-dollar"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">BILL</span>
					<span class="info-box-number"><?php echo $bill; ?></span>
				</div>
			</div>

            <div class="info-box bg-maroon">
                <span class="info-box-icon"><i class="fa fa-check"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">DO RELEASED</span>
                    <span class="info-box-number"><?php echo $rlsd; ?></span>
                </div>
            </div>
		</div>

		<div class="col-md-4">
			<div class="info-box bg-yellow">
				<span class="info-box-icon"><i class="fa fa-reply-all"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">DO REQUEST</span>
					<span class="info-box-number"><?php echo $rqst; ?></span>
				</div>
			</div>
			
			<div class="info-box bg-navy">
				<span class="info-box-icon"><i class="fa fa-file-o"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">PAID</span>
					<span class="info-box-number"><?php echo $paid; ?></span>
				</div>
			</div>

            <div class="info-box bg-olive">
                <span class="info-box-icon"><i class="fa fa-close"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">REJECT</span>
                    <span class="info-box-number"><?php echo $rjct; ?></span>
                </div>
            </div>
		</div>

        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-bullhorn"></i>
                    <h3 class="box-title"><span style="color: red;">i</span>CARGO</h3>
                </div>

                <div class="box-body">
                    <p class="text-black" style="text-align: justify;">
                        iCargo merupakan <span style="color: red;">solusi logistik</span> untuk memudahkan pengguna jasa (Cargo Owner atau Consignee dan Freight Forwarder)
                        dalam melakukan permohonan dokumen Deliver Order (DO) <span style="color: red;">secara online</span> tanpa harus datang ke Shipping Line.
                    </p>
                    
                    <p class="text-black" style="text-align: justify;">
                        Modul yang terdapat di iCargo adalah 
                        Modul <span style="color: red;">DO Payment</span>, 
                        Modul <span style="color: red;">SP2 Release</span>, 
                        Modul <span style="color: red;">Assign Truck</span>, dan 
                        Modul <span style="color: red;">Empty Depo</span>.
                    </p>
                    
                    <p class="text-black" style="text-align: justify;">
                        Selain itu, iCargo juga <span style="color: red;">memfasilitasi</span> release container, pembayaran service di terminal, assign trucking dan 
                        pengembalian container ke depo empty. 
                    </p><hr>
                    
                    <p class="text-black" style="text-align: center;">
                        <img src="assets/images/subsidary/logo_ilcs.png" style="height: 15%; width: 15%;">&nbsp;&nbsp;
                        <img src="assets/images/subsidary/logo_telkom.png" style="height: 20%; width: 20%;">&nbsp;&nbsp;
                        <img src="assets/images/subsidary/logo_ipc.png" style="height: 20%; width: 20%;">&nbsp;&nbsp;
                    </p>
                </div>
            </div>
        </div>
    </div> 
</section>
