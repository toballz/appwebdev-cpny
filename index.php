<?php include 'coff.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $rs= rand(); 
        $headTitle = "afd";
        $headDescription = "asd";
        $headKeywords = "";
        include(site::head);?>
    <style type="text/css">
        @-webkit-keyframes bounceHero { 0% { top: 0px; } 50% { top: 25px; } 100% { top: 0px; } }
        @keyframes bounceHero { 0% { top: 0px; } 50% { top: 25px; } 100% { top: 0px; } }

        .avrey-a{font-weight:600;overflow:hidden;position:relative;border: 2px solid #0167da;color: #0167da; box-shadow: 0 0 1px rgba(0, 0, 0, 0); padding: 16px 25px;width:13rem;border-radius:15px;}
        .avrey-a::before {z-index: -1; content: " "; display: block; position: absolute; top: 0; right: 0; bottom: 0; left: 0;inset: 0 0 0 0; background:  #0167da;
  transition: transform .5s ease;transition-timing-function:cubic-bezier(0.52, 1.64, 0.37, 0.66); transform: scaleX(0); transform-origin: bottom right;}
.avrey-a:hover::before { transform: scaleX(1); transform-origin: bottom left;}
.avrey-a:hover { color:#ffff !important}

.formschedule{position: relative;;padding:3rem;background:#fff;border-radius:15px; box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;}
.formschedule input,.formschedule textarea{width: 100%; padding: 12px;margin-bottom:24px; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);border:0; outline: none;}
.formschedule textarea{height:9rem;}
.formschedule-submit{transition:.3s all linear;cursor:pointer;background: #F74B54;border-radius:15px;color:#fff;margin-top:15px;padding:.9rem 0 !important;}
.formschedule-submit:hover{ transform: scale(1.05);}
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
                            <h1 style="margin:.9rem 0;font-size:2rem;"><p style="margin:0;">Web & App</p>Development Solutions: </h1>
                            <p style="margin:.9rem 0;">Empower Your Digital Presence with <b><?php echo site::name;?></b> Managing Every Detail.</p>
                            <p style="margin-bottom:1.3rem;">Cutting-Edge Solutions for Next-Gen Web & App Development: Elevating Your Online Impact</p>
                            <div>
                                <a href="#contactus" class="avrey-a">Let's Talk about your project</a>
                            </div>
                        </div>
                    </div>
                    <div style="flex:40%;max-width:40%;height: 100%;display:flex;align-items:center;justify-content:center;">
                        <div style="width:210px;position: relative;transform: rotate(316deg);-webkit-animation: bounceHero 3s infinite; animation: bounceHero 3s infinite;"><img alt="phone image" data-imgsrc="<?php echo site::staticimg.'/phone.png?'.$rs;?>"/></div>
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
                    <li><p class="a-o1">300</p><p>Websites</p></li>
                    <li><p class="a-o1">50</p><p>Android Apps</p></li>
                    <li><p class="a-o1">50</p><p>IOS Apps</p></li>
                    <li><p class="a-o1">100</p><p>Windows Apps</p></li>
                    <li><p class="a-o1">50</p><p>Mac Apps</p></li>
                </ul>
            </div>
        </div>
        
        <div class="main_container v-main-tabpad">
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div style="display:flex;">
                        <div class="v-main-tabpad-2-img"><img alt="website globe image" data-imgsrc="<?php echo site::staticimg;?>/web.svg?<?php echo $rs;?>"/></div>
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
                        <div class="more-o"><a href="#contactus">Try now</a></div>
                    </div>
                </div>
            </div>
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div style="display:flex;">
                        <div class="v-main-tabpad-2-img"><img alt="android image" data-imgsrc="<?php echo site::staticimg;?>/android.svg?<?php echo $rs;?>"/></div>
                        <div class="v-main-tabpad-2-img"><img alt="apple image" data-imgsrc="<?php echo site::staticimg;?>/apple.svg?<?php echo $rs;?>"/></div>
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
                        <div class="more-o"><a href="#contactus">Try Now</a></div>
                    </div>
                </div>
            </div>
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div style="display:flex;">
                        <div class="v-main-tabpad-2-img"><img alt="windows image" data-imgsrc="<?php echo site::staticimg;?>/windows.svg?<?php echo $rs;?>"/></div>
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
                        <div class="more-o"><a href="#contactus">Try Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div style="position:relative;background:red;">
        <div style="position:absolute;top:-1px;left:0;width:100%;height:9rem;z-index:2; transform: rotate(180deg);padding-top: 3rem;">
                <svg style="height: 100%;width: 100%;" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 170"><defs><linearGradient x1="49.253%" y1="85.804%" x2="49.253%" y2="43.074%" id="a"><stop stop-color="#FFF" offset="0%"></stop><stop stop-color="#FFF" offset="100%"></stop></linearGradient></defs><g fill="none"><path d="M1920 4.719v69.5c-362.63 60.036-692.797 55.536-990.5-13.5C565.833-23.615 256 12.813 0 170L1 4.719h1919z" fill="url(#a)" transform="rotate(180 960.5 87.36)"></path><path d="M1 170V99c269.033-70.44 603.533-66.44 1003.5 12C1494 207 1921 4.719 1921 4.719L1920 170H1z" fill-opacity=".3" fill="#FFF"></path><path d="M1 170.75V99C373.115 4.216 705.281-4.951 997.5 71.5c365.667 95.667 673.5 73.406 923.5-66.781l-1 166.031H1z" fill-opacity=".3" fill="#FFF"></path><path d="M1 170v-67C400.333-1.333 744.167-19 1032.5 50c432.5 103.5 754 19.219 888.5-45.281l-1 166.031L1 170z" fill-opacity=".35" fill="#FFF"></path></g></svg>
            </div>
        <div style="margin-top:1rem;display:flex; padding: 8rem 12px 35px 0;" id="contactus" class="main_container">
            <div style="max-width: 60%;flex: 40%;"><br/></div>
            <div style="max-width: 60%;flex: 40%; padding: 4rem;">
                <div style="" class="formschedule">
                    <h2 style="margin-bottom:24px;text-align:center;font-size:24px;"> Tell us about your business.</h2>
                    
                    <div id="loade1r">
                        <div id="bo1x"></div>
                        <div id="hil1l"></div>
                    </div>

                    <input type="text" placeholder="First & Last Name *" name="flname"/>
                    <input type="email" placeholder="Email: mail@example.com **" name="emname"/>
                    <input type="text" placeholder="Phone number **" name="pnumb"/>
                    <textarea placeholder="Explain your app idea. *" name="descr"></textarea>
                    <input type="button" value="Send Message" class="formschedule-submit"/>
                    <p style="text-align:center;">By clicking send message, you accept our <a href="/pages/tnc.php" target="_blank">Terms & Privacy Policy</a></p>
                </div>
            
            </div>
        </div>
    </div>

    <footer><?php include(site::footer);?></footer>

</body>

</html>
