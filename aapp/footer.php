<style>
.footer_d{}
 
 
#waterdrop {
    height: 13px;
}
#waterdrop canvas {
    bottom: -70px !important;
}
.underWaterdropp{padding:12px;
    background-color:var(--bg-color) 
}
.jej3j{display: flex;
    padding: 60px 0; color:#fff;}
.jej3j-io{flex: 0 0 25%; max-width: 25%;}
.jej3j-io>h3{margin-bottom:12px}
.jej3j-io>ul>li>a{padding:4px;margin-bottom:4px;color:#fff;}




</style>




<section class="footer_d">
    <div id="waterdrop"></div>

    <div class="underWaterdropp">
        <div class="jej3j main_container">
            <div class="jej3j-io">1</div>
            <div class="jej3j-io">
                <h3>Company</h3>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Our Service</a></li>
                    <li><a href="">Affiliate</a></li>
                </ul>
            </div>
            <div class="jej3j-io"> 
                <h3>Support</h3>
                <ul>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms & Conditions</a></li> 
                </ul>
            </div>
            <div class="jej3j-io">1</div> 
        </div>
    </div>

</section>









<div>
  <script src="/static/cj/js.js?<?php echo $rs;?>"></script>

  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="/static/cj/raindrops.js?<?php echo $rs;?>"></script>
  <script>
    const rootStylesCss= getComputedStyle(document.documentElement);
    $(".a-o1").each(function(){var t=parseInt($(this).text());for(let i=1;i<=t;i++)setTimeout((function(){$(this).text(i+(i>=t?"+":""))}).bind(this),10*i)});
  </script>
  <script> jQuery('#waterdrop').raindrops({color: rootStylesCss.getPropertyValue('--bg-color'), canvasHeight:150, density: 0.1, frequency: 20});</script>
</div>