<?php

function goto2($to,$Message){
	echo "<script language=\"JavaScript\">alert(\"".$Message."\") \n window.location = \"".$to."\"</script>";
}


function checkUType($u,$type=1){

    $servername="localhost";
    $user = "root";
    $passw="";
    $portno="3306";
    $database='dewi';
    require_once('settings.php');


    require_once('db.php');

    $conn = new mysqli($servername,$user,$passw);
    mysqli_select_db($conn,"dewi");
    $sql=" SELECT
    user_category_tbl.interface, user_category_tbl.usertype, users_tbl.name
    FROM
    user_category_tbl
    INNER JOIN users_tbl ON users_tbl.usertype = user_category_tbl.usertype 
    where username='".$u."' ";
    $result = mysqli_query($conn,$sql);
    if($rowtype = mysqli_fetch_assoc($result)){

        if($type==1){
            return $rowtype['usertype'];

        }
        else if($type==2){
            return $rowtype['interface'];
        }
        else if($type==3){

            return $rowtype['name'];
        }
    }
    else{
        
    }
}


function logincheck($u,$p){
    $servername="localhost";
	$user="root";
	$passw="";
	$portno="3306";
	$database='dewi';
    require_once('settings.php');
    require_once('db.php');
    $conn=new mysqli($servername,$user,$passw);
    mysqli_select_db($conn,"dewi");
    $sql=" SELECT count(username) as L FROM `users_tbl`  where username='".$u."'  and password='".$p."'";
    $stmt = mysqli_query($conn,$sql);
    if ($stmt===false){
       // return 0;
    }
    $row=mysqli_fetch_assoc($stmt); //i can call L or i can call using mysqli_fetch_row ,
    // when call $row[0]x 
    //echo $row[0];
    if ($row['L']==1){
        return 1;
    } 
    else {
        return 0;
    }
}


function createCookie($userid,$userpass){

    $useridcookieu="loginuser";
    $useridcookiep="loginpass";
    
    if ((isset($userid))&&(isset($userpass)))  
        {
            setcookie($useridcookieu,$userid,time()+(30*86400),"/");
            setcookie($useridcookiep,$userpass,time()+(30*86400),"/");
        }
    

}

function deleteCookie(){
    setcookie("loginuser","",time()-(30*86400),"/");
    setcookie("loginpass","",time()-(30*86400),"/");
}


function retrieveHome($id,$type=1){
    include('variable.php');
    $conn=new mysqli($servername,$user,$passw);
    mysqli_select_db($conn,"dewi");
    $sql=" SELECT *    FROM     webtitle
     where id=".$id;
     $result=mysqli_query($conn,$sql);
    $rowtype=mysqli_fetch_assoc($result);

    if ($type==1){
        return $rowtype['title'];
    }
    else if ($type==2){
        return $rowtype['header'];
     }
     else if ($type==3){
    return $rowtype['slogan'];
    }
    else if ($type==4){
        return $rowtype['content'];
        }
    else if ($type==5){
        return $rowtype['tool1'];
        }
    else if ($type==6){
        return $rowtype['tool2'];
        }
    else if ($type==7){
        return $rowtype['tool3'];
        }
    else if ($type==8){
        return $rowtype['tool4'];
        }
    else if ($type==9){
        return $rowtype['tool5'];
        }
    else if ($type==10){
        return $rowtype['tool6'];
        }
    else if ($type==11){
        return $rowtype['tool7'];
        }
    else if ($type==12){
         return $rowtype['startbutt'];
        }
    else if ($type==13){
         return $rowtype['videobutt'];
        }
    else if ($type==14){
         return $rowtype['Bgpic'];
       }
};

?>
