<style>
.footer_d {}


#waterdrop {
    height: 13px;
}

#waterdrop canvas {
    bottom: -70px !important;
}

.underWaterdropp {
    padding: 12px;
    background-color: #171b51
}

.jej3j {
    display: flex;
    padding: 60px 0 20px;
    color: #fff;
}

.jej3j-io {
    flex: 0 0 25%;
    max-width: 25%;
}

.jej3j-io>h3 {
    margin-bottom: 12px
}

.jej3j-io>ul>li>a {
    padding: 4px;
    margin-bottom: 4px;
    color: #fff;
}


.jlojlo {
    background: #12153e;
    color: #fff
}
</style>




<section class="footer_d">
    <div id="waterdrop"></div>

    <div class="underWaterdropp">
        <div class="jej3j main_container">
            <div class="jej3j-io"> </div>
            <div class="jej3j-io">
                <h3>Company</h3>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Our Service</a></li>
                </ul>
            </div>
            <div class="jej3j-io">
                <h3>Support</h3>
                <ul>
                    <li><a href="/pages/tnc.php#ppl" target="blank">Privacy Policy</a></li>
                    <li><a href="/pages/tnc.php?t=c" target="blank">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="jej3j-io"> </div>
        </div>
    </div>
    <div class="jlojlo">
        <div class="main_container">2024 &trade; <?php echo site::name;?></div>
    </div>

</section>









<div>
    <script src="/static/cj/js.js?<?php echo $rs;?>"></script>

    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="/static/cj/raindrops.js?<?php echo $rs;?>"></script>
    <script>

    </script>
    <script>
    jQuery('#waterdrop').raindrops({
        color: "#131642",
        canvasHeight: 150,
        density: 0.1,
        frequency: 20
    });
    </script>
</div>