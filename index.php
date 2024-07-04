<?php include 'coff.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $rs= rand(); 
        $headTitle = "";
        $headDescription = "";
        $headKeywords = "";
        include(site::head);?>
    <style type="text/css">
        @-webkit-keyframes bounceHero { 0% { top: 0px; } 50% { top: 25px; } 100% { top: 0px; } }
        @keyframes bounceHero { 0% { top: 0px; } 50% { top: 25px; } 100% { top: 0px; } }
    </style>
</head>



<body>

    <header style="position:relative;">
        <div class="header-shapes1">
            <div class="header-bg1-shape"></div>

            <div style="position:absolute;top:0;left:0;z-index: 111;width: 100%;height: 100%;">
                <div class="main_container" style="display:flex;height: 100%;">
                    <div style="flex:60%;max-width:60%;height: 100%;padding:24px;display:flex;justify-content:center;align-items:center;">
                        <div style="">
                            <h1 style="margin:.9rem 0;font-size:2rem;"><p style="margin:0;">Next-Gen</p> Web & App Development Solutions: </h1>
                            <p style="margin:.9rem 0;">Powering Your Digital Presence</p>
                            <p style="margin-bottom:1.3rem;">Crafting immersive digital experiences with cutting-edge technologies to elevate your business.</p>
                            <div>
                                <a href="" style="border: 2px solid #0167da;color: #0167da; box-shadow: 0 0 1px rgba(0, 0, 0, 0); padding: 16px 25px;width:13rem;border-radius:15px;">Let's Talk about your project</a>
                            </div>
                        </div>
                    </div>
                    <div style="flex:40%;max-width:40%;height: 100%;display:flex;align-items:center;justify-content:center;">
                        <div style="width:210px;position: relative;transform: rotate(316deg);-webkit-animation: bounceHero 3s infinite; animation: bounceHero 3s infinite;"><img src="<?php echo site::staticimg.'/phone.png?'.$rs;?>"/></div>
                    </div>
                </div>
            </div>
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
                        <div class="v-main-tabpad-2-img"><img src="<?php echo site::staticimg;?>/web.svg?<?php echo $rs;?>"/></div>
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
                        <div class="more-o"><a href="">Try now</a></div>
                    </div>
                </div>
            </div>
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div style="display:flex;">
                        <div class="v-main-tabpad-2-img"><img src="<?php echo site::staticimg;?>/android.svg?<?php echo $rs;?>"/></div>
                        <div class="v-main-tabpad-2-img"><img src="<?php echo site::staticimg;?>/apple.svg?<?php echo $rs;?>"/></div>
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
                        <div class="more-o"><a href="">Try Now</a></div>
                    </div>
                </div>
            </div>
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div style="display:flex;">
                        <div class="v-main-tabpad-2-img"><img src="<?php echo site::staticimg;?>/windows.svg?<?php echo $rs;?>"/></div>
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
                        <div class="more-o"><a href="">Try Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer><?php include(site::footer);?></footer>

</body>

</html>
