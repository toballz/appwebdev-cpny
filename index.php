<?php include 'coff.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $rs=62247;
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


        .bragsheet{background-color:#ccc;margin-bottom:4rem;}
        .bragsheet1{padding:30px 20px;}
        .bragsheet1 ul{display:flex;}
        .bragsheet1 ul>li{ max-width: 20%;flex: 0 0 20%;text-align:center;}
        
        .v-main-tabpad{display:flex; max-width: 1140px !important;}
        .v-main-tabpad>.v-main-tabpad-1{flex: 0 0 33.333333%;-ms-flex-wrap: wrap;flex-wrap: wrap;
            max-width: 33.333333%; padding:12px; 
        }
        .v-main-tabpad>.v-main-tabpad-1>.v-main-tabpad-2{
            border-bottom: 1px solid red; border-radius: 1.5rem;padding:12px;-webkit-box-shadow: 0 3px 5px 0px rgba(0, 0, 0, 0.12);box-shadow: 0 3px 5px 0px rgba(0, 0, 0, 0.12);
            -webkit-transition: -webkit-transform 0.3s ease 0s; transition: -webkit-transform 0.3s ease 0s; transition: transform 0.3s ease 0s; transition: transform 0.3s ease 0s, -webkit-transform 0.3s ease 0s;}
        .v-main-tabpad>.v-main-tabpad-1:hover >.v-main-tabpad-2{-webkit-box-shadow: 0 3px 14px 0px rgba(0, 0, 0, 0.19);
            box-shadow: 0 3px 14px 0px rgba(0, 0, 0, 0.19);transform:translateY(-10px);
        }

        .v-main-tabpad-2-img{width:100%;max-width:100px;margin:auto;margin-bottom:13px;height:124px;display:flex;align-items:center;} 
        .v-main-tabpad-2 h2{text-align:center;margin:19px 0}
        .v-main-tabpad-2 ul{padding-left:1.3rem;}
        .v-main-tabpad-2 ul>li{margin:5px 0 13px;list-style-type: square}
        .a-o1{font-size:3rem;font-weight:700;margin:0;} 
        .more-o>a{padding:16px;background:red;border-radius:20px;margin:1.6rem 0 16px;text-align:center;color:#fff;}
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
 

    <section class="  " style=" ">
        <div class="bragsheet">
            <div class="main_container bragsheet1">
                <ul>
                    <li><p class="a-o1">900</p><p>Websites</p></li>
                    <li><p class="a-o1">500</p><p>Android Apps</p></li>
                    <li><p class="a-o1">500</p><p>IOS Apps</p></li>
                    <li><p class="a-o1">200</p><p>Windows Apps</p></li>
                    <li><p class="a-o1">100</p><p>Mac Apps</p></li>
                </ul>
            </div>
        </div>
        
        <div class="main_container v-main-tabpad">
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div style="display:flex;">
                        <div class="v-main-tabpad-2-img"><img src="<?php echo site::staticimg;?>/www.png?<?php echo $rs;?>"/></div>
                    </div>
                    <div>
                        <h2>Website</h2>
                        <ul>
                            <li>SEO Optimization</li>
                            <li>Responsive Design</li>
                            <li>E-commerce Integration</li>
                            <li>Analytics and Reporting</li>
                            <li>Security Features</li>
                            <li>Advertising Campaign</li>
                            <li>And More</li>
                        </ul>
                        <li class="more-o"><a href="">Try now</a></li>
                    </div>
                </div>
            </div>
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div style="display:flex;">
                        <div class="v-main-tabpad-2-img"><img src="<?php echo site::staticimg;?>/android.png?<?php echo $rs;?>"/></div>
                        <div class="v-main-tabpad-2-img"><img src="<?php echo site::staticimg;?>/ios.png?<?php echo $rs;?>"/></div>
                    </div>
                    <div>
                        <h2>Android/IOS</h2>
                        <ul>
                            <li>Cross-Platform Compatibility</li>
                            <li>Data Encryption and Security</li>
                            <li>Responsive Design</li>
                            <li>Calendar and Events</li>
                            <li>In-App Purchases</li>
                            <li>Push Notifications</li>
                            <li>And More</li> 
                        </ul>
                        <li class="more-o"><a href="">Try Now</a></li>
                    </div>
                </div>
            </div>
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div style="display:flex;">
                        <div class="v-main-tabpad-2-img"><img src="<?php echo site::staticimg;?>/desktop.png?<?php echo $rs;?>"/></div>
                    </div>
                    <div>
                        <h2>Desktop Apps</h2>
                        <ul>
                            <li>Cross-Platform Compatibility</li>
                            <li>Responsive User Interface</li>
                            <li>System Services</li>
                            <li>SEO Optimization</li>
                            <li>Security Features</li>
                            <li>Security Features</li>
                            <li>And More</li>
                        </ul>
                        <li class="more-o"><a href="">Try Now</a></li>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer><?php include(site::footer);?></footer>

</body>

</html>
