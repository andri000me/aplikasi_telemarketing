<?php 
include 'database.php';
$db = new database();
include('header.php');
?>
<div class="row">
<div class="col s6">
<h5><b> <i class="material-icons">airplay</i></b> Form Edit Customer</h5><br />
      <form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $data){
?>
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="hidden" name="id" value="<?php echo $data['id']; ?>" id="id" class="validate">
          <input id="icon_prefix" type="hidden" name="employee_id" value="1" id="employee_id" class="validate">
          <input id="icon_prefix" type="text" name="name" id="name" value="<?php echo $data['name']; ?>" class="validate">
          <label for="icon_prefix">Name</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">stars</i>
          <input id="icon_telephone" type="text" name="phone_number" id="phone_number" value="<?php echo $data['phone_number']; ?>"  class="validate">
          <label for="icon_telephone">Phone Number</label>
        </div>
   
        <input  type="hidden" name="employee_id" value="<?php echo $_SESSION['id']; ?>">
          <input type="hidden" name="note" value="<?php echo $data['status']; ?>"  >
          <input  type="hidden" name="employee_id" value="<?php echo $data['employee_id']; ?>">
        <div class="input-field">
        <i class="material-icons prefix">message</i>
          <input class="btn waves-effect waves-light" type="submit" value="Update">
        </div>
        <?php } ?>
    </form>
  
    </div>
</div>  
<?php include('footer.php');?>