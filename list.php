<?php 
include 'database.php';
$db = new database();
include('header.php');
?>

<div class="row">
<div class="col s12">
<h5><b> <i class="material-icons">airplay</i></b>Data Customers</h5><br />
<a href="input.php" title="Tambah Data" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
      <table class="highlight table-responsive" >
        <thead>
          <tr>
          <th data-field="no">No</th>
              <th data-field="name">Name</th>
              <th data-field="phone_number">Phone Number</th>
             
              </tr>
        </thead>
<?php
  $no = 1;
  if($db->tampil_data($_GET['id']) != NULL ||$db->tampil_data($_GET['id']) != '' ){
	foreach($db->tampil_data($_GET['id']) as $data){
	?>
        <tbody>
          <tr>
        <td><?php echo $no++; ?></td>
		<td><?php echo $data['name']; ?></td>
		<td><form action="tel:<?php echo $data['phone_number']; ?>"><button type="submit">Call <?php echo $data['phone_number']; ?></button></form></td>
	
    <td>   
      <a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit" class="btn-floating yellow darken-2"><i class="material-icons">mode_edit</i></a>
      <a href="proses.php?id=<?php echo $data['id']; ?>&employee_id=<?php echo $_SESSION['id']; ?>&aksi=hapus" class="btn-floating green"><i class="material-icons">delete</i></a>
      <a href="formreport.php?id=<?php echo $data['id']; ?>&employee_id=<?php echo $_SESSION['id']; ?>" class="btn-floating blue"><i class="material-icons">comment</i></a>
     
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