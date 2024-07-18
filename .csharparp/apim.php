<?php
include_once("../../co.php");

Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed

header('Content-Type: application/json');
$isSession=false;
if(isset($_SESSION['logkin']) && $_SESSION['logkin'] == "ok" ){$isSession=true;} 

function setCrossSite(){
    $_SESSION['crosssite']=md5(rand()+time());
}
function getCrossSite(){
    return isset($_SESSION['crosssite'])?$_SESSION['crosssite']:false;
}
?>


<?php 
$response=array();

  
if( isset($_POST['cros']) && $_POST["cros"] != ""){ 

    if(isset($_POST['getDatesAppointmentsSpecDate']) && isset($_POST['dateFrom']) && $isSession){
        $tg=db::stmt("SELECT `hairstyle`,`image`,`hairstyle`,`rida`,`date`,`time` FROM schedulee WHERE `date` = '".$_POST['dateFrom']."' AND `haspaid`='1';");
 
        $i=0;
        while($rr=mysqli_fetch_assoc($tg)){
            $rd=DateTime::createFromFormat('Ymd', $rr['date']);
 
            $response[$i]['imageUrl']=  site::url(1)."/img/".$rr['image'].".jpg?93jv"; 
            $response[$i]['datetime']= $rd->format('Y F, l jS')." ".$rr['time'];
            $response[$i]['hairname']=$rr['hairstyle'];
            $response[$i]['orderId']=$rr['rida'];
              
            $i++; 
        }
    }
    if(isset($_POST['getDatesAppointmentsMoreThanDate']) && isset($_POST['dateTo']) && $isSession){
        $tg=db::stmt("SELECT `date` FROM schedulee WHERE `date` >= '".trim($_POST['dateTo'])."' AND `haspaid`='1' LIMIT 13;");
        $i=0;
        while($rr=mysqli_fetch_assoc($tg)){
            $rd=DateTime::createFromFormat('Ymd', $rr['date']);
            $response[$i]['year']=$rd->format('Y'); 
            $response[$i]['month']=$rd->format('m');
            $response[$i]['day']=$rd->format('j');
              
            $i++; 
        }
    }
    if(isset($_POST['getweeklyStatic']) && isset($_POST['had']) && $isSession){
        $tg=db::stmt("SELECT `description` FROM `availability` WHERE `namer`='weekly' AND `id`='1';");
 
        while($rr=mysqli_fetch_assoc($tg)){
            $response=json_decode($rr['description']);
               
        }
    }
    if(isset($_POST['updatesWeekly']) && isset($_POST['ajr']) && $isSession){
        $yfs="UPDATE `availability` SET `description`='".mysqli_real_escape_string(db::conn(),$_POST['updatesWeekly'])."' WHERE `namer`='weekly';";
        $tg=db::stmt($yfs);
        //echo $yfs;
        $response=array('a'=>true);
    }
    
    if(isset($_POST['receiptIIinfo']) && isset($_POST['j']) && $isSession){
        $tg=db::stmt("SELECT `price`,`time`,`hairstyle`,`email`,`phonne`,`customername`,`image`,`date`  FROM `schedulee` WHERE `rida`='".$_POST['receiptIIinfo']."' AND `haspaid`='1' ;");
        $response=mysqli_fetch_assoc($tg);
    }
    if(isset($_POST['getOverrideDates']) && isset($_POST['va']) && $isSession){
        $tg=db::stmt("SELECT `description` FROM `availability` WHERE `namer`='override';");
        $response=json_decode(mysqli_fetch_assoc($tg)['description']);
    }


    //
    //
    if(isset($_POST['stats']) && isset($_POST['sg']) && isset($_POST['beginingOfThisMonth']) && isset($_POST['beginingOfLastMonth']) && $isSession){
        $botm=trim($_POST['beginingOfThisMonth']);$botmbs=$botm+30;
        $bolm=trim($_POST['beginingOfLastMonth']); 
        $tg=db::stmt("SELECT 
        (SELECT COUNT(*) FROM `schedulee` WHERE `date` >= '$botm' AND `date` < '$botmbs' AND `haspaid`='1') AS beginingOfThisMonth,
        (SELECT COUNT(*) FROM schedulee WHERE `date` >= '$bolm' AND `date` < '$botm' AND `haspaid`='1') AS lastMonth,
        (SELECT COUNT(*) FROM schedulee WHERE `haspaid`='1') AS allToDate
            FROM schedulee; ");

            //
        $tg2=db::stmt("SELECT `hairstyle`,`image`, COUNT(*) AS appearance_count FROM schedulee  WHERE `haspaid`='1' GROUP BY `hairstyle` ORDER BY appearance_count DESC LIMIT 5");
            // 
        while($yts=mysqli_fetch_assoc($tg2)){
            $response['popularHairstyleBooked'][]=$yts; 
        }
        while($ys=mysqli_fetch_assoc($tg)){
            $response['beginingOfThisMonth']=$ys['beginingOfThisMonth'];
            $response['lastMonth']=$ys['lastMonth'];
            $response['allToDate']=$ys['allToDate'];
        }
    }

    //select date time
    if(isset($_POST['select_time_forDate']) &&  $_POST['getDate4Thd'] != "" && $isSession){

        $thisDAte=trim($_POST['getDate4Thd']);
        
        $thisDAte_dayInWeek = strtolower(date('l', strtotime($thisDAte))); // Output: Friday

        //get override
        //[{"date": "20240510", "time": "1530"}, {"date": "20240512", "time": "1130"}]
        $tg1=db::stmt("SELECT `description` FROM `availability` WHERE `namer` = 'override' LIMIT 1");
        $overrided_fetch_assoc=json_decode(mysqli_fetch_assoc($tg1)['description']);
        //get if person booked this date
        $tg2=db::stmt("SELECT `time` FROM `schedulee` WHERE `date` = '".$thisDAte."' AND `haspaid`='1';");
        $Persons_AlreadyBookedFot_thisDate=array();
        while($lo=mysqli_fetch_assoc($tg2)){
                $Persons_AlreadyBookedFot_thisDate[]=$lo['time'];
        } 
        //regular schedules
        //{"sunday":"1233,3413","monday":"0830, 1230","tuesday":"0837, 1230","wednesday":"0830, 1230","thursday":"0830, 1230","friday":"0830, 1230","saturday":"0830, 1230"}
        $tg3=db::stmt("SELECT `description` FROM `availability` WHERE `namer` = 'weekly' LIMIT 1;");
        $reqgularSchedule_fetch_assoc=json_decode(strtolower(mysqli_fetch_assoc($tg3)['description']));
        



       //
       //
       //when day of week "monday" isset
       if (isset($reqgularSchedule_fetch_assoc->$thisDAte_dayInWeek)) {
            $times_to_show_from_weekly=array_map('trim',explode(",",$reqgularSchedule_fetch_assoc->$thisDAte_dayInWeek));
            //$times_to_show=$get_weekly_schedule;

            //override wekly
            foreach ($overrided_fetch_assoc as $ovrrd) {
                if ($ovrrd->date === $thisDAte) {
                    //override weekly
                    $times_to_show_from_weekly= array_map('trim',explode(",",$ovrrd->time));
                    break;
                }
            }


            //times to show from weekly
            foreach($times_to_show_from_weekly as $ki=>$times){
                if(empty($times)){
                    unset($times_to_show_from_weekly[$ki]); 
                }
                
                // if user already booked
                if(in_array($times, $Persons_AlreadyBookedFot_thisDate)){
                    //remove times from times to show
                    foreach($times_to_show_from_weekly as $k=>$a ){
                        if($a == $times){
                            unset($times_to_show_from_weekly[$k]);
                            break;
                        }
                    }
               }
            };
            
            $response=$times_to_show_from_weekly;
        }
    }
    
    
    //sign log out
    if(isset($_POST['signlogout']) &&  $_POST['signlogout'] == "0" && $isSession){
        $_SESSION['logkin']=[];
        unset($_SESSION['logkin']);
        $response['code']=200;
        $response['message']="ok";
    }

    //select date time
    if(isset($_POST['save_contacts_64e']) && isset($_POST['co']) && isset($_POST['ord']) && $isSession){
        
        $hair=array_map('trim',explode("#",$_POST['ord']));
        $contactInfo=json_decode($_POST['co']);
        $ridaa=tools::generateRandomAlphanumeric(9); 

 
        //get hairstyle from $json
        //
        $hairFromJsonDb=array();
        foreach($haiecollection as $col=>$arr){
            foreach($arr as $i=>$p){
                if(isset($p[$hair[0]])){$hairTitle=$i;$ProductInfo=$p[$hair[0]];}
            }
        }
        $explodeInfo=explode("##",$ProductInfo);
        //
        $hairFromJsonDb_img=$hair[0];
        $hairFromJsonDb_title=$hairTitle." ".$explodeInfo[0];
        $hairFromJsonDb_price=$explodeInfo[$hair[1]];
        $hairFromJsonDb_timeRange=(explode("Time - ",$explodeInfo[1])[1]);
        //
        //
		  


        $yhd="INSERT INTO `schedulee` 
        (`rida`, `email`, `phonne`, `date`, `time`, `customername`,
         `image`, `price`, `timeRange`, `hairstyle`, `haspaid`) VALUES 
         ('$ridaa', '".$contactInfo->email."', '".$contactInfo->phone."', '".$contactInfo->date."', '".$contactInfo->time."', '".$contactInfo->fullname."',
         '$hairFromJsonDb_img', '$hairFromJsonDb_price', '$hairFromJsonDb_timeRange', '$hairFromJsonDb_title', '0');";
        //echo $yhd;
         $js = db::stmt($yhd);

        $payLink=tools::stripe_Create_Dynamic_Link_for_payments($contactInfo->email, 50.00, $ridaa,$contactInfo->fullname);
        $response['code']=301;
        $response['link']=$payLink;

    }

 //set override dates [{},{}]
 if(isset($_POST['updateOverrided']) && isset($_POST['cat']) && $_POST['cat'] != "" && $isSession){
        $cat4=trim($_POST['cat']);
    $he=db::stmt("UPDATE `availability` SET `description` = '$cat4' WHERE `id` = '3' AND `namer`='override';");
    
    $response['code']=200;
    $response['message']="ok";

}
    //delete appointment date haspaid=14
    if(isset($_POST['deleteAppointment']) && isset($_POST['ksy']) && $_POST['ksy'] != ""){
        $cat4=trim($_POST['ksy']);
    $he=db::stmt("UPDATE `schedulee` SET `haspaid` = '14' WHERE `schedulee`.`rida` = '$cat4';");

    $response['code']=200;
    $response['message']="ok";

    }
    

    
    //get message notification
    if(isset($_POST['get_messageNotifiy']) && isset($_POST['a']) && $isSession){
        $afa=db::stmt("SELECT `description` FROM `availability` WHERE `id` = '4' AND `namer`='message_notification';");
    
            $response=json_decode(mysqli_fetch_assoc($afa)['description']);
    }



    //login    
    if(isset($_POST['logine']) && isset($_POST['password']) && isset($_POST['email'])){
        $emal=db::escapeDB(base64_decode($_POST['email']));
        $pasw=md5(base64_decode($_POST['password']));
        
        $yhd="SELECT `id` FROM `availability` WHERE `accountEmail`='$emal' AND `accountPassword`='$pasw' AND `description`='--user';";
        //echo $yhd;
        $js = db::stmt($yhd);
        $isLoggedIn=(mysqli_num_rows($js) > 0);
        if($isLoggedIn){
            $response['code']=200;
            $response['message']="good";
            $_SESSION['logkin'] = "ok";
        }else{
            $response['code']=400;
            $response['message']="username or password is wrong";
        }
    }

    //check subscription
    if(isset($_POST['subscribed']) && isset($_POST['subscribed1']) && isset($_POST['subscribedr']) && $isSession){
        $yhd="SELECT `description` FROM `availability` WHERE `namer`='hasSubscribeMonthly' AND `id`='5';";
        //echo $yhd;
        $js = db::stmt($yhd);
        if(mysqli_fetch_assoc($js)['description'] == "true"){
            $response['code']=200;
            $response['message']="subscribed";
        }else{
            $response['code']=400;
            $response['message']="not subscribed";
        }
    }





//end all
    echo json_encode($response);

    
}




?>