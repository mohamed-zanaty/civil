<?php

function uploadNow($imgName, $r)
{
	$namefile = uniqid();
	$ext = strtolower($r->file($imgName)->getClientOriginalExtension());
  $availMime = explode(',',UPLOADPATTERN);
  if(!in_array($ext, $availMime)){
    return 'invalid_file';
  }
	$fullname = $namefile.'.'.$ext;
	$r->file($imgName)->move(UPLOADPATH,$fullname);
	return $fullname;
}

function multiUpload($r, $name){
    $list = [];
      $files = $r->file($name);
      foreach($files as $file){
        $namefile = uniqid();
        $ext = strtolower($file->getClientOriginalExtension());
			  $availMime = explode(',',UPLOADPATTERN);
        if(in_array(strtolower($ext), $availMime)){
          $fullname = $namefile.'.'.$ext;
          $file->move(UPLOADPATH,$fullname);
          $list[] = $fullname;
        }
      }
      return json_encode($list);
}


function removeImages($images, $imgs){
   foreach($images as $rimg){
    @unlink(UPLOADPATH.'/'.$rimg);
    $imgs = str_replace($rimg,'',$imgs);
  }
  $imgs = str_replace(['"",','""'],'',$imgs);
  $imgs = str_replace(',]',']',$imgs);
  return $imgs;
}
