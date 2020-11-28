<?php 
include 'database.php';
$db = new database();
include('header.php');

?>
<div class="row">
<div class="col s12">
<h5><b> <i class="material-icons">airplay</i></b>Data Employees</h5><br />
    <table class="highlight">
        <thead>
          <tr>
          <th data-field="no">No</th>
              <th data-field="name">Name</th>
              </tr>
        </thead>
<?php
  $no = 1;
  if($db->tampil_data_employee() != NULL ||$db->tampil_data_employee() != '' ){
	foreach($db->tampil_data_employee() as $data){
	?>
        <tbody>
          <tr>
        <td><?php echo $no++; ?></td>
		<td><?php echo $data['name']; ?></td>
		
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