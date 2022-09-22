<!-- <?php 
// include("controller.core.php");
    if(isset($_POST['submit'])){
    date_default_timezone_set("Asia/Kuala_Lumpur");
        $siteid     =cleanup($_POST['siteid']);
        $nott       =cleanup($_POST['nott']);
        $pictt      =cleanup($_POST['pictt']);
        $ttteam     =cleanup($_POST['ttteam']);
        $sow        =cleanup($_POST['sow']);
        $remark     =cleanup($_POST['remark']);
        $date = date('d-m-y');
        $time = date('h:i:s');

        if(empty($siteid)){
            $errorsiteid = "Site ID need to input";
        }else{
            $cleansite=$siteid;
        }
        if(empty($nott)){
            $errornott = "No TT need to input";
        }else{
            $cleantt=$nott;
        }

        // echo $siteid.$nott.$pictt.$ttteam.$sow;
        // header("location:http://checkingalarm.test/view/send.php");
        // header("location:https://api.whatsapp.com/send?phone=60176127934&text=Hi%20NOC,i%20want%20to%20login/out%0a%0aProject : 5G_DNB%0a%0aSITE%20:%20$cleansite%0a%0aNOC TT NO%20:%20$nott%0a%0aPIC DNB : %0a%0aPIC TT : $pictt%0a%0aTT TEAM : $ttteam%0a%0aSOW : $sow%0a%0aDATE : $date%0a%0aTIME IN : $time%0a%0aTime OUT : %0a%0aRemark : $remark");
        // header("locationL/index.php?url-home");
        // exit();
        // $urlweb="https://wa.me/60176127934?text=site&id'.$siteid.";

    }else{
        // header("location:http://checkingalarm.test/index.php?url=1");
        // exit();
        // $verser=$_SERVER['SERVER_NAME']
        // header("location:home.php");

    }

// include("view/home.php");

// header("location:https://api.whatsapp.com/send?phone=60176127934&text=Hi%20NOC,i%20want%20to%20login/out%0a%0aProject : 5G_DNB%0a%0aSITE%20:%20$cleansite%0a%0aNOC TT NO%20:%20$nott%0a%0aPIC DNB : %0a%0aPIC TT : $pictt%0a%0aTT TEAM : $ttteam%0a%0aSOW : $sow%0a%0aDATE : $date%0a%0aTIME IN : $time%0a%0aTime OUT : %0a%0a Remark : $remark");
?> -->