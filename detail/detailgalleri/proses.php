<?php
include '../../database/galleri.php';
if(isset($_POST['submit'])){
	$extension=array('jpeg','jpg','png','gif');
	foreach ($_FILES['image']['tmp_name'] as $key => $value) {
		$filename=$_FILES['image']['name'][$key];
		$filename_tmp=$_FILES['image']['tmp_name'][$key];
		echo '<br>';
		$ext=pathinfo($filename,PATHINFO_EXTENSION);
		$finalimg='';
		if(in_array($ext,$extension)){
			if(!file_exists('assets/albumfoto/'.$filename)){
			move_uploaded_file($filename_tmp, 'assets/albumfoto/'.$filename);
			$finalimg=$filename;
			}else{
				 $filename=str_replace('.','-',basename($filename,$ext));
				 $newfilename=$filename.time().".".$ext;
				 move_uploaded_file($filename_tmp, 'assets/albumfoto/'.$newfilename);
				 $finalimg=$newfilename;
			}
			$id_foto = $_POST ['id_foto'];
			$keterangan_galleri = $_POST ['keterangan_galleri'];
			$tgl_aktivitas = $_POST ['tgl_aktivitas'];
			$username = $_POST ['username'];
			//insert
			$insertqry="INSERT INTO detail_foto ( id_foto,keterangan_galleri,foto_detail,tgl_aktivitas,username) VALUES ('$id_foto','$keterangan_galleri','$finalimg','$tgl_aktivitas','$username')";
			mysqli_query($koneksi,$insertqry);
			header("location:/gate/admin/detail/detailgalleri/?pesan=uploadfoto");
		}else{
			//display error
		}
	}
}
?>