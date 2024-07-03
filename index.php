<?php include 'coff.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $rs=627;
        $headTitle = "";
        $headDescription = "";
        $headKeywords = "";
        include(site::head);?>
    <style type="text/css">
        .btbt_header{ 
            height:700px;}
        .header-shapes1{
            position: absolute;
            top: 0;
            left: 0;z-index: 2;
            right: 0;
            height:700px;overflow: hidden;
            bottom: 0;
        }
        .header-bg1-shape{ position: absolute;
        height: 160%; width: 80%; display: block;
        border-radius: 120px; background: linear-gradient(-47deg, #F956CB 0%, #F74B54 100%);
        bottom: 0; right: 0;
        -webkit-transform: translate(35%,-28%) rotate(-35deg); transform: translate(35%,-28%) rotate(-35deg);
        z-index: 0;}
        .v-main-tabpad{display:flex; max-width: 1140px !important;}
        .v-main-tabpad>.v-main-tabpad-1{flex: 0 0 33.333333%;-ms-flex-wrap: wrap;flex-wrap: wrap;
            max-width: 33.333333%; padding:12px; 
        }
        .v-main-tabpad>.v-main-tabpad-1>.v-main-tabpad-2{ border-radius: 1.5rem;padding:12px;-webkit-box-shadow: 0 3px 5px 0px rgba(0, 0, 0, 0.12);box-shadow: 0 3px 5px 0px rgba(0, 0, 0, 0.12);
            -webkit-transition: -webkit-transform 0.3s ease 0s; transition: -webkit-transform 0.3s ease 0s; transition: transform 0.3s ease 0s; transition: transform 0.3s ease 0s, -webkit-transform 0.3s ease 0s;}


        .v-main-tabpad>.v-main-tabpad-1:hover >.v-main-tabpad-2{-webkit-box-shadow: 0 3px 14px 0px rgba(0, 0, 0, 0.19);
            box-shadow: 0 3px 14px 0px rgba(0, 0, 0, 0.19);transform:translateY(-10px);
        }

        .v-main-tabpad-2-img{width:100%;max-width:100px;margin:auto;margin-bottom:13px;height:124px;display:flex;align-items:center;} 
            
            
            </style>
</head>



<body>
    
    <header >
        <div class="header-shapes1">
            <div class="header-bg1-shape"></div>
        </div>
        <div class="main_container  btbt_header" style=" ">
            <?php include(site::header);?>
        </div>
    </header> 
 

    <section class="main_container  " style=" ">
        <div class="main_container v-main-tabpad">
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div class="v-main-tabpad-2-img"><img src="<?php echo site::staticimg;?>/www.png?<?php echo $rs;?>"/></div>
                    <div>WEbWEbWEbWEb</div>
                </div>
            </div>
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div style="display:flex;">
                        <div class="v-main-tabpad-2-img"><img src="<?php echo site::staticimg;?>/android.png?<?php echo $rs;?>"/></div>
                        <div class="v-main-tabpad-2-img"><img src="<?php echo site::staticimg;?>/ios.png?<?php echo $rs;?>"/></div>
                    </div>
                    <div>Mobile</div>
                </div>
            </div>
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div class="v-main-tabpad-2-img"><img src="<?php echo site::staticimg;?>/www.png"/></div>
                    <div>Desktop</div>
                </div>
            </div>
        </div>
    </section>


    <footer><?php include(site::footer);?></footer>

</body>

</html>
