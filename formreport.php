<?php 
include('header.php');
?>
<div class="row">
<div class="col s6">
<h5><b> <i class="material-icons">airplay</i></b>Form Report</h5><br />
      <form action="proses.php?aksi=report" method="post" >
      <div class="input-field ">
    <select id="select-id">
      <option value="" disabled selected>Choose your option</option>
      <option value="Berhasil Telepon">Berhasil Telepon</option>
      <option value="Gagal Telepon">Gagal telepon</option>
     
    </select>
    <label>Status Panggilan</label>
  </div>

  <div class="input-field box">
    <select id="select-id2">
      <option value="" disabled selected>Choose your option</option>
      <option value="Telepon Tidak Aktif">Telepon Tidak Aktif</option>
      <option value="Telepon Tidak Diangkat">Telepon Tidak Diangkat</option>
      <option value="Customer Menolak Pesanan">Customer Menolak Pesanan</option>
      <option value="Nomor Salah">Nomor Salah</option>
    </select>
    <label>Gagal Telpon</label>
  </div>
        <input id="icon_prefix" type="hidden" name="employee_id" value="1" id="employee_id" class="validate">
       
        <input  type="hidden" name="reason" id="reason">
          <input  type="hidden" name="employee_id" value="<?php echo $_GET['employee_id'];?>">
          <input  type="hidden" name="customers_id"  value="<?php echo $_GET['id'];?>">
        <div class="input-field">
        <textarea id="textarea1" class="materialize-textarea" name="note"></textarea>
          <label for="textarea1">Note</label>
        </div>

        <div class="input-field">
        <i class="material-icons prefix">message</i>
          <button class="btn waves-effect waves-light" id="btn" type="submit" >Simpan</button>
        </div>
      
      
    </form>
    </div>
</div>  
<?php include('footer.php');?>
<script>
         $(document).ready(function() {
            $('select').material_select();
         });
      </script>
<script type="text/javascript">
$(document).ready(function(){
    $("#select-id").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue == "Gagal Telepon"){
                $(".box").show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});


$("#select-id2,#select-id").change(function(){
        var vals = $(this).children("option:selected").val();

        console.log(vals);
        document.getElementById('reason').value = vals;
        console.log(document.getElementById('reason').value);
      });
</script>