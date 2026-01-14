<?php


if($_GET["action"]){
    if($_GET["action"] == 'getcorpid'){
  $id = $_GET['ID'];

   $arr = array();
   $i=0;


    
    $json = json_encode($arr);
    print_r($json);
        
}

}

?>