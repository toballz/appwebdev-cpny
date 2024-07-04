<?php include '../coff.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $rs= rand(); 
        $headTitle = "";
        $headDescription = "";
        $headKeywords = "";
        include(site::head);?>
     <style>
        .v-tnc-tabpad{border-radius:20px;-webkit-box-shadow: 0 3px 14px 0px rgba(0, 0, 0, 0.19);box-shadow: 0 3px 14px 0px rgba(0, 0, 0, 0.19);padding:15px;margin:12px auto;max-width:667px;}
        .v-tnc-tabpad a{display:inline;}
        .v-tnc-tabpad ul{padding-left:20px;margin-bottom:12px}
        .v-tnc-tabpad h1{font-weight:700; font-size: 25px}
        .v-tnc-tabpad h2{font-weight:700;margin-bottom: 12px;font-size: 20px}
        .v-tnc-tabpad h3{font-weight:700;margin: 12px 0;font-size: 17px;padding-left: 12px}
        .v-tnc-tabpad  p{padding-left: 13px}
     </style>
</head>



<body>
    
    <header > 
        <div class="main_container   " style=" ">
            <?php include(site::header);?>
        </div>
    </header> 
 

    <section class="main_container" style=" ">
         
            <div class="v-tnc-tabpad"><h1><?php echo site::name;?> Terms & Conditions</h1></div>
            <div class="v-tnc-tabpad"><h2>Terms of use</h2>By accessing the website at <?php echo site::url("server");?>, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</div>
            <div class="v-tnc-tabpad">
                <section>
                    <h2>Privacy Policy - Effective Date: [Date]</h2>
                    <p><strong><?php echo site::name;?></strong> ("we", "our", "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website <a href="<?php echo site::url("domain");?>"><?php echo site::url("server");?></a> (the "Site") and when you use our services.</p>

                    <p>Please read this Privacy Policy carefully. By accessing or using our Site or services, you agree to this Privacy Policy. If you do not agree with this Privacy Policy, do not access or use our Site or services.</p>
                </section>

                <section>
                    <h2>1. Information We Collect</h2>

                    <h3>1.1. Personal Information</h3>
                    <p>We may collect personal information that you voluntarily provide to us when you:</p>
                    <ul>
                        <li>Register on our Site</li>
                        <li>Subscribe to our newsletter</li>
                        <li>Fill out a form</li>
                        <li>Contact us through our Site</li>
                    </ul>
                    <p>The types of personal information we may collect include:</p>
                    <ul>
                        <li>Name</li>
                        <li>Email address</li>
                        <li>Phone number</li>
                        <li>Mailing address</li>
                        <li>Payment information (if applicable)</li>
                    </ul>

                    <h3>1.2. Non-Personal Information</h3>
                    <p>We may also collect non-personal information about you automatically when you access or use our Site. This may include:</p>
                    <ul>
                        <li>Browser type</li>
                        <li>Language preference</li>
                        <li>Referring site</li>
                        <li>Date and time of visit</li>
                        <li>Pages viewed</li>
                        <li>Clicks</li>
                    </ul>
                </section>

                <section>
                    <h2>2. Use of Information</h2>
                    <p>We may use the information we collect in the following ways:</p>
                    <ul>
                        <li>To provide, operate, and maintain our Site and services</li>
                        <li>To improve, personalize, and customize your experience</li>
                        <li>To understand and analyze how you use our Site and services</li>
                        <li>To develop new products, services, features, and functionality</li>
                        <li>To communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the Site, and for marketing and promotional purposes</li>
                        <li>To process your transactions and manage your orders</li>
                        <li>To send you emails</li>
                        <li>To find and prevent fraud</li>
                        <li>To comply with legal obligations</li>
                    </ul>
                </section>

                <section>
                    <h2>3. Sharing of Information</h2>
                    <p>We may share your information with third parties only in the following circumstances:</p>
                    <ul>
                        <li>With your consent</li>
                        <li>To comply with laws</li>
                        <li>To protect our rights</li>
                        <li>With service providers who perform services on our behalf</li> 
                    </ul>
                </section>

                <section>
                    <h2>4. Security of Information</h2>
                    <p>We use reasonable administrative, technical, and physical security measures to protect your personal information. However, no method of transmission over the internet or method of electronic storage is completely secure.</p>

                    <p>3rd parties</p>
                    <p>Our website may link to external sites that are not operated by us. Please be aware that we have no control over the content and practices of these sites, and cannot accept responsibility or liability for their respective privacy policies. You are free to refuse our request for your personal information, with the understanding that we may be unable to provide you with some of your desired services.</p>
                </section>

                <section>
                    <h2>5. Your Choices</h2>
                    <p>You have the right to:</p>
                    <ul>
                        <li>Opt-out of receiving marketing communications</li>
                        <li>Access, correct, update, or delete your personal information</li>
                        <li>Restrict processing of your personal information</li>
                        <li>Object to processing of your personal information</li>
                        <li>Data portability</li>
                    </ul>
                </section>

                <section>
                    <h2>6. Changes to This Privacy Policy</h2>
                    <p>We may update this Privacy Policy from time to time in order to reflect changes to our practices or for other operational, legal, or regulatory reasons.</p>
                </section>

                <section>
                    <p>Your continued use of our website will be regarded as acceptance of our practices around privacy and personal information. If you have any questions about how we handle user data and personal information, feel free to contact us.</p>
                    <p>If you have any questions about this Privacy Policy or our privacy practices, please contact us at:</p>
                    <p><strong>[Your Company Name]</strong><br>
                        [Address]<br>
                        [City, State, Zip Code]<br>
                        [Email Address]<br>
                        [Phone Number]</p>
                </section> 
            </div>
    </section>


    <footer><?php include(site::footer);?></footer>

</body>

</html>
