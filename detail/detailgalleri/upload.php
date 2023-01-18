<?php 
if (isset($_POST['unggah']) && isset($_FILES['my_video'])) {
	include '../../database/galleri.php';
    $video_name = $_FILES['my_video']['name'];
    $tmp_name = $_FILES['my_video']['tmp_name'];
    $error = $_FILES['my_video']['error'];
    if ($error === 0) {
    	$video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
    	$video_ex_lc = strtolower($video_ex);
    	$allowed_exs = array("mp4", 'webm', 'avi', 'flv');
    	if (in_array($video_ex_lc, $allowed_exs)) {
    		$new_video_name = uniqid("video-", true). '.'.$video_ex_lc;
    		$video_upload_path = 'assets/videothumbnail/'.$new_video_name;
    		move_uploaded_file($tmp_name, $video_upload_path);

    		// Now let's Insert the video path into database
    		$id_video = $_POST ['id_video'];
    		$keterangan_galleri = $_POST ['keterangan_galleri'];
    		$tgl_aktivitas= $_POST ['tgl_aktivitas'];
    		$username = $_POST ['username'];
            $sql = "INSERT INTO detail_video (id_video,keterangan_galleri,video_url,tgl_aktivitas,username) VALUES ('$id_video','$keterangan_galleri','$new_video_name','$tgl_aktivitas','$username')";
            mysqli_query($koneksi, $sql);
            header("location:/gate/admin/detail/detailgalleri/?pesan=uploadvideo");
    	}
    }
}else{
	header("location:/gate/admin/detail/detailgalleri/");
}