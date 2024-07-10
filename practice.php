<?php
require_once("connMysql.php");
session_start();
if(isset($_SESSION['loginMember']) && $_SESSION['loginMember']!=''){
    if($_SESSION['memberlevel'] == "member"){
        header("Location: member_center.php");
    }
    else{
        header("Location: member_admin.php");
    }  
}

