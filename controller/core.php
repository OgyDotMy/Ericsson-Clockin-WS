<?php 

function get_header(){
    include("view/header.php");
}

function get_footer(){
    include("view/footer.php");
}

function get_css($css){
    echo "http://".$_SERVER['SERVER_NAME']."/assets/css/".$css;
}
function cleanup($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

?>