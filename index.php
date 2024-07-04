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
