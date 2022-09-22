
<?php 
date_default_timezone_set("Asia/Kuala_Lumpur");
// include("controller.core.php");
    if(isset($_POST['submit'])){
        $siteid     =cleanup($_POST['siteid']);
        $nott       =cleanup($_POST['nott']);
        $pictt      =cleanup($_POST['pictt']);
        $ttteam     =cleanup($_POST['ttteam']);
        $sow        =cleanup($_POST['sow']);
        $remark     =cleanup($_POST['remark']);
        $date = date('d-m-y');
        $time = date('H:i:s');

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
        header("location:https://api.whatsapp.com/send?phone=$urnumberphone//&text=Hi%20NOC,i%20want%20to%20login/out%0a%0aProject : 5G_DNB%0a%0aSITE%20:%20$cleansite%0a%0aNOC TT NO%20:%20$nott%0a%0aPIC DNB : %0a%0aPIC TT : $pictt%0a%0aTT TEAM : $ttteam%0a%0aSOW : $sow%0a%0aDATE : $date%0a%0aTIME IN : $time%0a%0aTime OUT : %0a%0aRemark : $remark");
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ericcson ClockIN ZO SITE">
    <title>CLOCKIN POST SYSTEM</title>
    <link rel="shortcut icon" href="https://previews.123rf.com/images/subhanbaghirov/subhanbaghirov1909/subhanbaghirov190900042/130565753-5g-icon-network-coverage-area-simple-flat-style-symbol-.jpg" type="image/x-icon">
    <link rel="stylesheet" href="<?php get_css("style.css") ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row ai-center jc-sb">
            <div class="header-logo">
                <a href=""><img src="https://t3.ftcdn.net/jpg/03/46/35/50/360_F_346355082_wC43Dhgik44OLF3lMS0N0b3mriwk51vr.jpg" class="img-thumb lg" alt=""></a>
            </div>
            </div>
        </div>
    </div>

    
    <div class="home fw">
        <div class="container">
            <div class="row jc-center">
                    <div class="col5">
                        <div class="form">
                        <form action="" method="post" target="">
                        <div class="form-group">
                        <label for="siteid">Site ID</label>
                        <input type="text" name="siteid" id="siteid" placeholder="Site ID" class="form-control">
                        <?php if(isset($errorsiteid)){?>
                        <small class="red"><?php echo $errorsiteid;?></small>
                        <?php }?>
                        </div>
                        <div class="form-group">
                        <label for="nott">No TT</label>
                        <input type="text" name="nott" id="nott" placeholder="TT NO" class="form-control">
                        <?php if(isset($errornott)){?>
                        <small class="red"><?php echo $errornott;?></small>
                        <?php }?>
                        </div>
                        <div class="form-group">
                        <label for="pictt">Pic TT</label>
                        <input type="text" name="pictt" id="pictt" placeholder="PIC TT" class="form-control">
                        <?php if(isset($errorsiteid)){?>
                        <small class="red"><?php echo $errorsiteid;?></small>
                        <?php }?>
                        </div>
                        <div class="form-group">
                        <label for="ttteam">TT Team</label>
                        <input type="text" name="ttteam" id="tteam" placeholder="TT Team" class="form-control">
                        <?php if(isset($errorsiteid)){?>
                        <small class="red"><?php echo $errorsiteid;?></small>
                        <?php }?>
                        </div>
                        <div class="form-group">
                        <label for="sow">SOW</label>
                        <input type="text" name="sow" id="sow" placeholder="SOW" class="form-control">
                        <?php if(isset($errorsiteid)){?>
                        <small class="red"><?php echo $errorsiteid;?></small>
                        <?php }?>
                        </div>
                        <div class="form-group">
                        <label for="remark">Remark</label>
                        <input type="text" name="remark" id="remark" placeholder="Remark" class="form-control">
                        <?php if(isset($errorsiteid)){?>
                        <small class="red"><?php echo $errorsiteid;?></small>
                        <?php }?>
                        </div>
                        <div class="form-group">
                        <button type="submit" name="submit" value="submit" class="btn-sbt">Submit</button>
                        </div>
                    </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
