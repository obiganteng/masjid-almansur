<?php include '../config/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<?php include '_header.php'; ?>
<?php 	
	$id_kb = @$_GET['id_kb'];
	$sql = mysqli_query($db, "select * from gallery_kb where id_kb = '$id_kb'") or die ($db->error);
	$data = mysqli_fetch_array($sql);
?>
<body>
	<div id="index-banner" class="parallax-container valign-wrapper">
	    <div class="section no-pad-bot">
	</div>
		  <div class="parallax"><img src="../img/parallax1.jpg" alt="Unsplashed background img 1">
	   </div>
	</div>
	<div class="container">
		<div class="row">
		<h3 class="thin-taxt center">Gallery <?php echo $data['id_kb']; ?></h3>
	      <p class="center"><?php echo $data['keterangan_kb']; ?></p>
	      <div class="row">
	      	<?php   
	              $sql = mysqli_query($db, "SELECT * FROM gallery_kb where id_kb = '$id_kb'") or die ($db->error);
	              while($data = mysqli_fetch_array($sql)) {
	        ?>
	        <div class="col l3 m8 offset-m2 s12">
	        <img class="materialboxed responsive-img" width="500" height="300" src="../img/k_bulanan/<?php echo $data['gambar_kb']; ?>">
	        </div>
	        <?php } ?>
	      </div>
	     <p class="thin-text-2 center">(Youtube Link)</p>
	    </div>
</div>
<?php include '_footer.php'; ?>
</html>