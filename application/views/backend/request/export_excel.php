<?php  
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=$title.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
?>

<table border="1" width="100%">
	<thead>
		<tr>
			<th>NO</th>
			<th>REQ. NUMBER</th>
			<th>BL NUMBER</th>
			<th>FORWARDER</th>
			<th>SHIPPING LINE</th>
			<th>STATUS</th>
			<th>DATE</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1; foreach($request->result() as $row){ ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row->req_number; ?></td>
			<td><?php echo $row->bl_number; ?></td>
			<td><?php echo $row->ff_name; ?></td>
			<td><?php echo $row->sl_name; ?></td>	
			<td><?php echo $row->status_desc; ?></td>
			<td><?php echo date("Y-m-d", strtotime($row->created_date)); ?></td>
		</tr>
		<?php $i++; } ?>
	</tbody>
</table>