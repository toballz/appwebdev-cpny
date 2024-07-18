//use https://www.uglifyjs.net/ minifyer
//reload page after gaining back focus
window.addEventListener('focus', function() {
     //location.reload();
 });
//BASE URL    
var ba="ckros" ;
///page loader change to what ever
loader={
    start: function(){$("body").append('<div id="loaderstartstop" style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:1212;background: rgb(0 0 0 / 69%);display:flex;justify-content: center;align-items:center;">'+
        '<div style="height:95px;width:95px"><svg style="width:100%;height:100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="200" height="200" style="shape-rendering: auto; display: block; background: rgb(255, 255, 255);" xmlns:xlink="http://www.w3.org/1999/xlink"><g><rect x="19" y="19" width="20" height="20" fill="#505378">'+
        '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0s" calcMode="discrete"></animate>'+
        '</rect><rect x="40" y="19" width="20" height="20" fill="#505378">'+
        '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.125s" calcMode="discrete"></animate>'+
        '</rect><rect x="61" y="19" width="20" height="20" fill="#505378">'+
        '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.25s" calcMode="discrete"></animate>'+
        '</rect><rect x="19" y="40" width="20" height="20" fill="#505378">'+
        '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.875s" calcMode="discrete"></animate>'+
        '</rect><rect x="61" y="40" width="20" height="20" fill="#505378">'+
        '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.375s" calcMode="discrete"></animate>'+
        '</rect><rect x="19" y="61" width="20" height="20" fill="#505378">'+
        '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.75s" calcMode="discrete"></animate>'+
        '</rect><rect x="40" y="61" width="20" height="20" fill="#505378">'+
        '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.625s" calcMode="discrete"></animate>'+
        '</rect><rect x="61" y="61" width="20" height="20" fill="#505378">'+
        '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.5s" calcMode="discrete"></animate>'+
        '</rect><g></g></g> </svg></div>'+
        '</div>');
    },
    stop:function(){
        setTimeout(function(){ $("#loaderstartstop").remove(); },1245);
    } 
}

!(function(ar,rootStylesCss,bH){
// Definer ************************************************** */

  //get response from https
    function httpResponse(httpResData, getFunction){
        if(getFunction && (httpResData.code in getFunction) ){
            getFunction[httpResData.code]();
            console.log(getFunction );
            return;
        } 
        if(httpResData.code == 301){
            if(httpResData.message == "reload"){
                location.reload();
            }else{
                window.location.href=httpResData.message;
            }
        }else{
            alert(httpResData.message);
        }  
    }
    //share product
   $(".clicktosharebutton").click(async function(){ await navigator.share({ title: document.title, text: document.title, url: window.location.href,});});

   //img lazyload
   //create a better lazyload on scroll
    $("[data-imgsrc]").each(function(){
        var ts=$(this);
        ar(function(){
            ts.attr("src",ts.attr("data-imgsrc"));
            ts.attr("data-imgsrc","");
        },600);
    });

 // END definer ************************************************** */
 //
 //
 //
 


//number index page
 $(".a-o1").each(function(){var t=parseInt($(this).text());for(let i=1;i<=t;i++)ar((function(){$(this).text(i+(i>=t?"+":""))}).bind(this),10*i)});
//submit app description
$(".formschedule-submit").click(function(){
    var fname=$('[name="flname"]'),emname=$('[name="emname"]'),pnumb=$('[name="pnumb"]'),descr=$('[name="descr"]'),vc=$('meta[name="'+ba+'"]').attr('content'),err=false;
    emname.add(descr).add(fname).css("border","none");
      
    
    if(fname.val().length  <= 3){
        err="Invalid name.";
        fname.css("border","3px solid "+rootStylesCss.getPropertyValue('--info-error'));
    }
    var so=emname.val().split("@");
    if((emname.val().length  <= 3) || (so.length < 2) || (so[1].length < 5) || (so[1].indexOf(".") === -1)){
        err="Input a valid email";
        emname.css("border","3px solid "+rootStylesCss.getPropertyValue('--info-error'));
    }
    if(descr.val().length  <= 3){
        err="Write a few words about your project.";
        descr.css("border","3px solid "+rootStylesCss.getPropertyValue('--info-error'));
    }


    if(err){
        alert(err);
    }
    //alert(vc);
});









 

//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//end
}(setTimeout,getComputedStyle(document.documentElement)),document.baseURI);  
 
