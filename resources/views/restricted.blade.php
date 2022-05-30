
<?php

$fullURL = 'http://'.$_SERVER['HTTP_HOST'];


$arrUrl = explode('.',$fullURL);

// print_r($arrUrl);
$count = count($arrUrl);
if($count==1){
   $fullURL = 'http://'.$_SERVER['HTTP_HOST'];
}else{
   $fullURL ='http://'.$arrUrl[1];
}



$count = DB::table('school_details')->where('school_domain',$fullURL)->count();
    if($count>0){
        echo "
        <script>
            window.location.href = '".url()->previous()."'
        </script>

        ";
    }

?>

<h1>Restricted</h1>
