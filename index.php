<?php include 'coff.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $rs= rand(); 
        $headTitle = "afd";
        $headDescription = "asd";
        $headKeywords = "";
        include(site::head);?>
 
</head>



<body>

    <header style="position:relative;">
        <div class="header-shapes1">
            <div class="header-bg1-shape"></div>

            <div style="position:absolute;top:0;left:0;z-index: 111;width: 100%;height: 100%;">
                <div class="main_container" style="display:flex;height: 100%;">
                    <div
                        style="flex:60%;max-width:60%;height: 100%;padding:24px;display:flex;justify-content:center;align-items:center;">
                        <div style="">
                            <h1 style="margin:.9rem 0;font-size:2rem;">
                                <p style="margin:0;">Website & Mobile App</p>Development Solutions:
                            </h1>
                            <p style="margin:.9rem 0;">Empower Your Digital Presence with
                                <b><?php echo site::name;?></b> Managing Every Detail.
                            </p>
                            <p style="margin-bottom:1.3rem;">Cutting-Edge Solutions for Next-Gen Web & App Development:
                                Elevating Your Online Impact</p>
                            <div>
                                <a href="#contactus" class="avrey-a">Let's Talk about your project</a>
                            </div>
                        </div>
                    </div>
                    <div
                        style="flex:40%;max-width:40%;height: 100%;display:flex;align-items:center;justify-content:center;">
                        <div
                            style="width:710px;position: relative;=transform: rotate(316deg);-webkit-animation: bounceHero 3s infinite; animation: bounceHero 3s infinite;">
                            <img alt="phone image" data-imgsrc="<?php echo site::staticimg.'/phone1r.png?'.$rs;?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_container  btbt_header" style=" ">
            <?php include(site::header);?>
        </div>

    </header>


    <section class="main_container">
        <div class=" v-main-tabpad">
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div style="display:flex;">
                        <div class="v-main-tabpad-2-img"><img alt="website globe image"
                                data-imgsrc="<?php echo site::staticimg;?>/web.svg?<?php echo $rs;?>" /></div>
                    </div>
                    <div>
                        <h2>Website</h2>
                        <ul>
                            <li>SEO Optimization</li>
                            <li>Responsive Design</li>
                            <li>E-commerce Solutions</li>
                            <li>Analytics and Reporting</li>
                            <li>Security Features</li>
                            <li>Advertising Campaign</li>
                            <li>Website Maintenance and Support</li>
                            <li>Digital Marketing</li>
                            <li>And More</li>
                        </ul>
                        <div class="more-o"><a href="#contactus" onclick="$('.whatapp-c').val('app-website');">Talk to
                                Us</a></div>
                    </div>
                </div>
            </div>
            <div class="v-main-tabpad-1">
                <div class="v-main-tabpad-2">
                    <div style="display:flex;">
                        <div class="v-main-tabpad-2-img"><img alt="android image"
                                data-imgsrc="<?php echo site::staticimg;?>/android.svg?<?php echo $rs;?>" /></div>
                        <div class="v-main-tabpad-2-img"><img alt="apple image"
                                data-imgsrc="<?php echo site::staticimg;?>/apple.svg?<?php echo $rs;?>" /></div>
                    </div>
                    <div>
                        <h2>Android/IOS</h2>
                        <ul>
                            <li>App store/Google play Optimization</li>
                            <li>Cross-Platform Compatibility</li>
                            <li>Responsive User Interface</li>
                            <li>Data Encryption and Security</li>
                            <li>Custom App Development</li>
                            <li>In-App Purchases</li>
                            <li>Push Notifications</li>
                            <li>Offline Capabilities</li>
                            <li>And More</li>
                        </ul>
                        <div class="more-o"><a href="#contactus" onclick="$('.whatapp-c').val('app-mobile');">Talk to
                                Us</a></div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="bragsheet">
        <div class="main_container bragsheet1">
            <ul>
                <li>
                    <p class="a-o1">300</p>
                    <p>Websites</p>
                </li>
                <li>
                    <p class="a-o1">50</p>
                    <p>Android Apps</p>
                </li>
                <li>
                    <p class="a-o1">50</p>
                    <p>IOS Apps</p>
                </li> 
                <li>
                    <p class="a-o1">50</p>
                    <p>Mac Apps</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="main_container">
        <h3>Let's Grow Your Brand.</h3>
        <div>We have a team of experts working together to fufil you project needs.</div>
        
    </section>



    <section class="main_container">
        <h3>Have an idea.</h3>
    </section>





 
 


    <div class="hgr5">
        <div class="hgr5-oo">
            <svg class="hgr5-oo-svg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                viewBox="0 0 1920 170">
                <defs>
                    <linearGradient x1="49.253%" y1="85.804%" x2="49.253%" y2="43.074%" id="a">
                        <stop stop-color="#FFF" offset="0%"></stop>
                        <stop stop-color="#FFF" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <g fill="none">
                    <path
                        d="M1920 4.719v69.5c-362.63 60.036-692.797 55.536-990.5-13.5C565.833-23.615 256 12.813 0 170L1 4.719h1919z"
                        fill="url(#a)" transform="rotate(180 960.5 87.36)"></path>
                    <path d="M1 170V99c269.033-70.44 603.533-66.44 1003.5 12C1494 207 1921 4.719 1921 4.719L1920 170H1z"
                        fill-opacity=".3" fill="#FFF"></path>
                    <path
                        d="M1 170.75V99C373.115 4.216 705.281-4.951 997.5 71.5c365.667 95.667 673.5 73.406 923.5-66.781l-1 166.031H1z"
                        fill-opacity=".3" fill="#FFF"></path>
                    <path
                        d="M1 170v-67C400.333-1.333 744.167-19 1032.5 50c432.5 103.5 754 19.219 888.5-45.281l-1 166.031L1 170z"
                        fill-opacity=".35" fill="#FFF"></path>
                </g>
            </svg>
        </div>
        <div id="contactus" class="main_container hgr5-ia">

            <div class="hgr5-ia-l">  
                <h2 style="color:#fff">Grow Your Business with Our Custom Website Development Solutions</h2>
                <p style="color:#e9e9e9">We specialize in creating high-performing websites/mobile-apps tailored to meet your
                    unique business goals. Our custom development solutions are designed not just to look good, but to
                    drive sales and engage customers effectively. Here’s how our advanced features deliver results:</p>
                <h3 style="color:#e9e9e9">E-commerce Functionality</h3>
                <p style="color:#e9e9e9">We build secure, user-friendly online stores with a smooth shopping experience, from adding items to
                    checkout, and flexible payment options which customers and easily use.</p>

                <h3 style="color:#7d7d7d">Live Chat Support & Chatbots</h3>
                <p style="color:#7d7d7d">Give your customers the answers they need, instantly. Our 24/7 chat and chatbot options enhance
                    customer satisfaction and reduce bounce rates, creating a seamless shopping experience that
                    converts.</p>

                <h3 style="color:#896b6b">Email and SMS Marketing Integration</h3>
                <p style="color:#896b6b">Drive more traffic to your site and keep your customers coming back with personalized marketing. We
                    integrate targeted email and SMS campaigns that deliver timely promotions, reminders, and updates,
                    helping you connect with your audience on a personal level.</p>
  
                <h3 style="color:#896b6b">Social Media Integration</h3>
                <p style="color:#7d7d7d">Connect your business with the world! With built-in social media integration, customers can easily
                    share products, engage with your brand, and spread the word, bringing you more traffic and
                    visibility.</p>

                <p style="color:#000">Partner with us to launch a app that not only showcases your brand but actively drives sales.
                    Let’s transform your business into an online powerhouse!</p>
 
            </div>

            <div class="hgr5-ia-ll">
                <div class="formschedule">
                    <h2 style="margin-bottom:24px;text-align:center;font-size:24px;"> Tell us about your business.</h2>
 
                    <input type="text" placeholder="First & Last Name *" name="flname" />
                    <input type="email" placeholder="Email: mail@example.com **" name="emname" />
                    <input type="text" placeholder="Phone number **" name="pnumb" />
                    <select name="whatapp" class="whatapp-c">
                        <option value="o--o">What app do you want?</option>
                        <option value="app-mobile">Creating Mobile App</option>
                        <option value="app-website">Creating a Website</option>
                        <option value="app-desktop">Creating Desktop App</option>
                    </select>
                    <textarea placeholder="Tell us about your website/mobile app idea. *" name="descr"></textarea>
                    <input type="button" value="Book Consultation" class="formschedule-submit" />
                    <p style="text-align:center;">By booking a consultation, you accept our <a style="color:blue;" href="/pages/tnc.php?t=c"
                            target="blank">Terms & Privacy Policy</a></p>
                </div>

            </div>
        </div>
    </div>

    <footer><?php include(site::footer);?></footer>

</body>

</html>