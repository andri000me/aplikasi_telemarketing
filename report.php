<?php 
include 'database.php';
$db = new database();
include('header.php');
?>

<div class="row">
<div class="col s12">
<h5><b> <i class="material-icons">airplay</i></b>Data Customers Report</h5><br />

  <br>
   <table class="highlight table-responsive" >
        <thead>
          <tr>
          <th data-field="no">No</th>
              <th data-field="name">Name</th>
              <th data-field="phone_number">Phone Number</th>
              <th data-field="reason">Reason</th>
              <th data-field="note">Note</th>
              <th data-field="aksi">Aksi</th>
              </tr>
        </thead>
<?php
  $no = 1;
  if($db->tampil_data_report($_GET['id']) != NULL ||$db->tampil_data_report($_GET['id']) != '' ){
	foreach($db->tampil_data_report($_GET['id']) as $data){
	?>
        <tbody>
          <tr>
        <td><?php echo $no++; ?></td>
		<td><?php echo $data['name']; ?></td>
		<td><form action="tel:<?php echo $data['phone_number']; ?>"><button type="submit">Call <?php echo $data['phone_number']; ?></button></form></td>
        <td><?php echo $data['reason']; ?></td>
        <td><?php echo $data['note']; ?></td>
    <td>   
   <a href="proses.php?id=<?php echo $data['id']; ?>&employee_id=<?php echo $_GET['id']; ?>&customer_id=<?php echo $data['id_customer']; ?>&aksi=hapusreport" class="btn btn-primary">DELETE</a>
          </td>
          </tr>
        </tbody>
        <?php 
  }
	}
	?>
      </table>
</div>
    </div>
  
    <?php include('footer.php');?>