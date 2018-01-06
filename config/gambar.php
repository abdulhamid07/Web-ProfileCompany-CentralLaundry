<?php
function gambar($fupload_name){
  //direktori gambar
  $vdir_upload1 = "../../../images/";

  $vfile_upload1 = $vdir_upload1 . $fupload_name;

  $TipeFile1   = $_FILES['image1']['type'];

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["image1"]["tmp_name"], $vfile_upload1);

  //identitas file asli  
  if ($TipeFile1=="image/jpeg" ){
      $im_src1 = imagecreatefromjpeg($vfile_upload1);
      }elseif ($TipeFile1=="image/png" ){
      $im_src1 = imagecreatefrompng($vfile_upload1);
      }elseif ($TipeFile1=="image/gif" ){
      $im_src1 = imagecreatefromgif($vfile_upload1);
      }elseif ($TipeFile1=="image/wbmp" ){
      $im_src1 = imagecreatefromwbmp($vfile_upload1);
    }
    
  $src_width1 = imageSX($im_src1);
  $src_height1 = imageSY($im_src1);


  $dst_width = 119;
  $dst_height = 88;



 //proses perubahan ukuran
  $im1 = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im1, $im_src1, 0, 0, 0, 0, $dst_width, $dst_height, $src_width1, $src_height1);


  //Simpan gambar
   if ($_FILES["image1"]["type"]=="image/jpeg" ){
      imagejpeg($im1,$vdir_upload1,$fupload_name);
      }
    elseif ($_FILES["image1"]["type"]=="image/png" ){
      imagepng($im1,$vdir_upload1,$fupload_name);
      }
    elseif ($_FILES["image1"]["type"]=="image/gif" ){
      imagegif($im1,$vdir_upload1,$fupload_name);
      }
    elseif($_FILES["image1"]["type"]=="image/wbmp" ){
      imagewbmp($im1,$vdir_upload1,$fupload_name);
      }

  
  //Hapus gambar di memori komputer
  imagedestroy($im_src1);
  imagedestroy($im1);


}

function gambar2($fupload_name2){
  //direktori gambar
  $vdir_upload2 = "../../../../images/socmed/";

  $vfile_upload2 = $vdir_upload2 . $fupload_name2;
 
  $TipeFile2   = $_FILES['image2']['type'];

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["image2"]["tmp_name"], $vfile_upload2);

  //identitas file asli  
     if ($TipeFile2=="image/jpeg" ){
      $im_src2 = imagecreatefromjpeg($vfile_upload2);
      }elseif ($TipeFile2=="image/png" ){
      $im_src2 = imagecreatefrompng($vfile_upload2);
      }elseif ($TipeFile2=="image/gif" ){
      $im_src2 = imagecreatefromgif($vfile_upload2);
      }elseif ($TipeFile2=="image/wbmp" ){
      $im_src2 = imagecreatefromwbmp($vfile_upload2);
    }

  $src_width2 = imageSX($im_src2);
  $src_height2 = imageSY($im_src2);

  $dst_width4 = 371;
  $dst_height4 = 372;
 //proses perubahan ukuran
 

  $im3 = imagecreatetruecolor($dst_width4,$dst_height4);
  imagecopyresampled($im3, $im_src2, 0, 0, 0, 0, $dst_width4, $dst_height4, $src_width2, $src_height2);

        //Simpan gambar
   if ($_FILES["image2"]["type"]=="image/jpeg" ){
      imagejpeg($im3,$vdir_upload2."".$fupload_name2);
      }
    elseif ($_FILES["image2"]["type"]=="image/png" ){
      imagepng($im3,$vdir_upload2."".$fupload_name2);
      }
    elseif ($_FILES["image2"]["type"]=="image/gif" ){
      imagegif($im3,$vdir_upload2."".$fupload_name2);
      }
    elseif($_FILES["image2"]["type"]=="image/wbmp" ){
      imagewbmp($im3,$vdir_upload2."".$fupload_name2);
      }

  //Hapus gambar di memori komputer
  imagedestroy($im_src2);
 
  imagedestroy($im3);

}

function gambar3($fupload_name3){
  //direktori gambar

  $vdir_upload3 = "../../../../images/slider/";

  $vfile_upload3 = $vdir_upload3 . $fupload_name3;
 
  $TipeFile3   = $_FILES['image3']['type'];

  move_uploaded_file($_FILES["image3"]["tmp_name"], $vfile_upload3);

  //identitas file asli  
    if ($TipeFile3=="image/jpeg" ){
      $im_src3 = imagecreatefromjpeg($vfile_upload3);
      }elseif ($TipeFile3=="image/png" ){
      $im_src3 = imagecreatefrompng($vfile_upload3);
      }elseif ($TipeFile3=="image/gif" ){
      $im_src3 = imagecreatefromgif($vfile_upload3);
      }elseif ($TipeFile3=="image/wbmp" ){
      $im_src3 = imagecreatefromwbmp($vfile_upload3);
    }
 

  $src_width3 = imageSX($im_src3);
  $src_height3 = imageSY($im_src3);

  $dst_width5 = 185;
  $dst_height5 = 207;

 //proses perubahan ukuran
  $im5 = imagecreatetruecolor($dst_width5,$dst_height5);
  imagecopyresampled($im5, $im_src3, 0, 0, 0, 0, $dst_width5, $dst_height5, $src_width3, $src_height3);

        //Simpan gambar
   if ($_FILES["image3"]["type"]=="image/jpeg" ){
      imagejpeg($im5,$vdir_upload3,$fupload_name3);
      }
    elseif ($_FILES["image3"]["type"]=="image/png" ){
      imagepng($im5,$vdir_upload3,$fupload_name3);
      }
    elseif ($_FILES["image3"]["type"]=="image/gif" ){
      imagegif($im5,$vdir_upload3,$fupload_name3);
      }
    elseif($_FILES["image3"]["type"]=="image/wbmp" ){
      imagewbmp($im5,$vdir_upload3,$fupload_name3);
    }
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src3);
  imagedestroy($im5);

}
function gambar4($fupload_name7){
  //direktori gambar
  $vdir_upload7 = "../../../../images/";

  $vfile_upload7 = $vdir_upload7 . $fupload_name7;

  $TipeFile7   = $_FILES['image7']['type'];

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["image7"]["tmp_name"], $vfile_upload7);

  //identitas file asli  
  if ($TipeFile7=="image/jpeg" ){
      $im_src7 = imagecreatefromjpeg($vfile_upload7);
      }elseif ($TipeFile7=="image/png" ){
      $im_src7 = imagecreatefrompng($vfile_upload7);
      }elseif ($TipeFile7=="image/gif" ){
      $im_src7 = imagecreatefromgif($vfile_upload7);
      }elseif ($TipeFile7=="image/wbmp" ){
      $im_src7 = imagecreatefromwbmp($vfile_upload7);
    }
    
  $src_width7 = imageSX($im_src7);
  $src_height7 = imageSY($im_src7);


  $dst_width = 119;
  $dst_height = 88;



 //proses perubahan ukuran
  $im7 = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im7, $im_src7, 0, 0, 0, 0, $dst_width, $dst_height, $src_width7, $src_height7);


  //Simpan gambar
   if ($_FILES["image7"]["type"]=="image/jpeg" ){
      imagejpeg($im7,$vdir_upload7,$fupload_name7);
      }
    elseif ($_FILES["image7"]["type"]=="image/png" ){
      imagepng($im7,$vdir_upload7,$fupload_name7);
      }
    elseif ($_FILES["image7"]["type"]=="image/gif" ){
      imagegif($im7,$vdir_upload7,$fupload_name7);
      }
    elseif($_FILES["image7"]["type"]=="image/wbmp" ){
      imagewbmp($im7,$vdir_upload7,$fupload_name7);
      }

  
  //Hapus gambar di memori komputer
  imagedestroy($im_src7);
  imagedestroy($im7);


}
?>