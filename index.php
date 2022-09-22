<?php 

include("controller/core.php");
$home="view/home.php";
$notfound="view/404.php";
if(empty($_GET['url'])){
    include ($home);
}else{
    if(isset($_GET['url'])){
        $url=cleanup($_GET['url']);
        $path="view/".$url.".php";
    
        if(file_exists($path)){
            include ($path);
        }else{
            include ($notfound);
        }
    }
}



?>