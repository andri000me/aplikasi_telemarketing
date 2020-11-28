<?php 
include('header.php');
?>
<div class="row">
<div class="col s6">
<h5><b> <i class="material-icons">airplay</i></b>Form Customer</h5><br />
      <form action="proses.php?aksi=tambah" method="post">
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="name" id="name" class="validate">
          <label for="icon_prefix">Name</label>
        </div>
        <input id="icon_prefix" type="hidden" name="employee_id" value="1" id="employee_id" class="validate">
         
        <div class="input-field">
          <i class="material-icons prefix">starts</i>
          <input id="icon_telephone" type="text" name="phone_number" id="phone_number"  class="validate">
          <label for="icon_telephone">Phone Number</label>
        </div>
        
        
          <input  type="hidden" name="note" value="0">
          <input  type="hidden" name="employee_id" value="<?php echo $_SESSION['id']; ?>">
        <div class="input-field">
        <i class="material-icons prefix">message</i>
          <input class="btn waves-effect waves-light" type="submit" value="Simpan">
        </div>
      
    </form>
    </div>
</div>  
<?php include('footer.php');?>