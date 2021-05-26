<?php
        session_start();
        include "testingpdf.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IIITDM Dashboard</title>

        <!-- Styles -->                        
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">         
        <link href="https://www.iiitdm.ac.in/Profile/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="https://www.iiitdm.ac.in/Profile/assets/css/lib/bootstrap.min.css" rel="stylesheet"> 
	<link href="https://www.iiitdm.ac.in/Profile/assets/css/site.css" rel="stylesheet" type="text/css" />		
        <link href="https://www.iiitdm.ac.in/Profile/assets/css/style.css" rel="stylesheet">
		

		<style type="text/css">
		
	.carousel{	
background: rgba(52,57,87,0.9);
//background: url(images/background.jpg) no-repeat 0 35%;
    /* will also set the opacity of the link text */  

	position: absolute;
  z-index: -1;   
 
	}
		
		
	.carousel-control.right, .carousel-control.left {
   background-image: none;
   color: #ffffff;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; // remove the gap so it doesn't close
 }

  </style>
		
		
		
		
    </head>

    <body oncontextmenu="return false" >
  
        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="https://www.iiitdm.ac.in/Profile/dashboard.php"><img src="https://www.iiitdm.ac.in/Profile//assets/images/logo2.png" alt=""   width="230px" height="100px" /> </a></div>
                    <ul>
                        
                        
						<li><a class="sidebar-sub-toggle"><i class="fa fa-home"	 aria-hidden="true"></i>
  Dashboard  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
  
                            <ul>   






							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/PayRoll/EmployeeDetails.php"  ><i class='fa fa-user'></i>Employee Profile</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/Student/StudentData.php"  ><i class='fa fa-info-circle'></i>Student Info</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->

                                <!-- code start-->
                                <li><a href="../Profile/publications.php"> <i class="fa fa-user"></i>Publications</a></li>
								<li><a href="./searchpublications.php"><i class="fa fa-user">Search Publications</i></a></li>			
							</ul>
						</li> 
						 
						<li><a class="sidebar-sub-toggle"><i class="fa fa-university"	 aria-hidden="true"></i>
  Academics  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
  
                            <ul>   






							
                                <li><a href="http://www.iiitdm.ac.in/Profile/reg/reg_2101.php"  ><i class='fa fa-registered'></i>Registration</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/reg/elective_change_2101.php"  ><i class='fa fa-exchange'></i>Change of Elective</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/focus/StudAttendance.php"  ><i class='fa fa-clock-o'></i>Student Attendance</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/focus/StudLeave.php"  ><i class='fa fa-user'></i>Student Leave</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/TimeTable/Schedule.php"  ><i class='fa fa-pencil'></i>Examination</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/acad/feed/mid_sem_feedback_jan_2021.php"  ><i class='fa fa-comments'></i>Mid Sem FeedBack</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/acad/result.php"  ><i class='fa fa-user-circle'></i>Results</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
											
							</ul>
						</li> 
						 
						<li><a class="sidebar-sub-toggle"><i class="fa fa-user-circle"	 aria-hidden="true"></i>
  Admin  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
  
                            <ul>   


								
							</ul>
						</li> 
						 
						<li><a class="sidebar-sub-toggle"><i class="fa fa-briefcase"	 aria-hidden="true"></i>
  Finance & Accounts  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
  
                            <ul>   






							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/Student/FeeReceipt.php"  ><i class='fa fa-address-card'></i>Fee Receipt</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
											
							</ul>
						</li> 
						 
						<li><a class="sidebar-sub-toggle"><i class="fa fa-briefcase"	 aria-hidden="true"></i>
  Computer Center  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
  
                            <ul>   






							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/server/Complaints.php"  ><i class='fa fa-code-fork'></i>Service Request</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
											
							</ul>
						</li> 
						 


						
						
						
    
                        <li><a href="logout.php?logout"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Logout</a></li>
					



                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
						
												
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <ul>

                                <li class="header-icon dib"><i class="ti-bell"></i>
                                    <div class="drop-down">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">Recent Notifications</span>
                                        </div>
                                        <div class="dropdown-content-body">
                                            
                                        </div>
                                    </div>
                                </li>
                              
                                <li class="header-icon dib dropdown"><span class="user-avatar dropdown-toggle">Welcome BALISETTY NITHIN KUMAR                                        
                                        <span ><img src="https://lh3.googleusercontent.com/a/AATXAJwZjuToe6r0AWzGzCQaGHEZ9FMvA0_Z8O9mX57c=s96-c" alt="" style="width: 30px; height: 30px;object-fit: cover; border-radius: 50%;" /></span>                                        
                           <div class="dropdown-menu" style="z-index: 99999;">
    <a class="dropdown-item" href="https://www.iiitdm.ac.in/Profile/automation/PayRoll/EmployeeDetails.php"><i class="fa fa-user" aria-hidden="true"></i> <span style='font-size:14px; font-weight:bold'>Profile</span></a>
	<a href="http://www.iiitdm.ac.in/Profile/logout.php?logout" class="dropdown-item"><i class="fa fa-arrow-left" aria-hidden="true"></i><span  style='font-size:14px; font-weight:bold'>Logout</span></a>
	
    
  </div>              
                                        
                                        <i class="ti-angle-down f-s-10"></i></span>
                                    <div class="drop-down dropdown-profile">
                                        
                                        <div class="dropdown-content-body" >
                                            <ul style=" z-index:-1;">
                                                <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                                                <li><a href="logout.php?logout"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
							
							
							
							
							
                        </div>
						
						
                    </div>
                </div>
				</div>
   
				
				
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
  
				
				 		
				
				
				
           
				<style type="text/css">
				
				.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; // remove the gap so it doesn't close 
 }
				</style> <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-dark sticky-top" style="margin-left: -15px; background-color:#343A40">

	  <ul class="navbar-nav" style="height:20px; background-color:#343A40" >
    
		<!-- <li>Employee Personal Details</li> -->
        <li>Your Publications</li>
	

  </ul>
</nav>








<!-- code start -->



<?php
    if(isset($_POST["MANUALPOST"]) && $_POST["randcheck"]==$_SESSION['rand']){
        $strname="";
        $servername = 'localhost';
        $username = 'root';
        $dbname = 'internship';
        $conn=mysqli_connect($servername, $username,'', $dbname);
        if(!$conn) die();
        else{
            $query = 'SELECT COUNT(*) from `publications`;';
            $res=mysqli_query($conn,$query);
            $rows=0;
            while($row=mysqli_fetch_assoc($res)){ $rows=$row["COUNT(*)"]; }
            $str=''.($rows+1).',"'.$_POST["Title"].'","'.$_POST["ConferenceName"].'","'.$_POST["Source_Title"].'",'.$_POST["Vol"].','.$_POST["Pages"].','.$_POST["Year"].',"'.$_POST["Website"].'","'.$_POST["Link"].'","../uploads/Publications/'.($rows+1).'"';
            $query1="INSERT INTO publications (PID,Title,ConferenceName,Source_Title,Vol,Pages,Year,Website,Link,Filename) values(".$str.")";
            if(mysqli_query($conn,$query1)){
                //successfully inserted
                $i=9;
                while($i<=count($_POST)-2){
                    $query3 = 'SELECT EID from `users` where EMAIL="'.$_POST["Author".($i-8)].'";';
                    $res=mysqli_query($conn,$query3);
                    $temp=0;
                    while($row=mysqli_fetch_assoc($res)){ $temp=$row["EID"]; }
                    $query2= "INSERT INTO pubicationauthor (PID,EID,Noofauth) values(".($rows+1).",".$temp.",".(count($_POST)-10).")";
                    if(mysqli_query($conn,$query2)){
                        // succesfully inserted in publicationauthor table
                    }
                    else{
                        echo "<script>alert('Error in posting data.Please Try again');</script>";
                    }
                    $i++;
                }
            }
            else{
                echo "<script>alert('Error in inserting data.Please Try again');</script>";
            }
        }
        mysqli_close($conn);       
    }
    if(isset($_POST["uploadexcel"]) && $_POST["randcheck1"]==$_SESSION['rand1']){
        $target_dir = 'uploads/';
        $target_file = $target_dir . basename($_FILES["csvfile"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $arr = array("xlsx","xlsm","csv");
        if(!in_array($imageFileType,$arr)){
            echo "<script>alert('Not in xlsx or xlsm or csv format');</script>";
        }
        else{
        move_uploaded_file($_FILES["csvfile"]["tmp_name"], $target_file);
        require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php';
        $inputFileType = PHPExcel_IOFactory::identify($target_file);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($target_file);
        $i=2;
        $count=0;
        $strname="";
        $servername = 'localhost';
        $username = 'root';
        $dbname = 'internship';
        $conn=mysqli_connect($servername, $username,'', $dbname);
        if(!$conn) die();
        else{
            $query = 'SELECT COUNT(*) from `publications`;';
            $res=mysqli_query($conn,$query);
            $rows=0;
            while($row=mysqli_fetch_assoc($res)){ $rows=$row["COUNT(*)"]; }
        while($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue()!=''){
            $count++;
            //echo $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue();
            $id=$rows+$count;
            $title=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue();
            $confn=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue();
            $sourcet=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
            $vol=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
            $pages=$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getValue();
            $year=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getValue();
            $webname=$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getValue();
            $url=$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getValue();
            $str=''.$id.',"'.$title.'","'.$confn.'","'.$sourcet.'",'.$vol.','.$pages.','.$year.',"'.$webname.'","'.$url.'","../uploads/Publications/'.$id.'"';
            $query1="INSERT INTO publications (PID,Title,ConferenceName,Source_Title,Vol,Pages,Year,Website,Link,Filename) values(".$str.")";
            if(mysqli_query($conn,$query1)){
                //successfully inserted
                $col='I';
                $countt=0;
                while($objPHPExcel->getActiveSheet()->getCell($col.$i)->getValue()!=''){
                    $query3 = 'SELECT EID from `users` where EMAIL="'.$objPHPExcel->getActiveSheet()->getCell($col.$i)->getValue().'";';
                    $res=mysqli_query($conn,$query3);
                    $temp=0;
                    while($row=mysqli_fetch_assoc($res)){ $temp=$row["EID"]; }
                    $query2= "INSERT INTO pubicationauthor (PID,EID,Noofauth) values(".($id).",".$temp.",0)";
                    if(mysqli_query($conn,$query2)){
                        // succesfully inserted in publicationauthor table
                    }
                    else{
                        echo "<script>alert('Error in posting data.Please Try again');</script>";
                    }
                    $col++;
                    $countt++;
                }
                $upd=mysqli_query($conn,"UPDATE `pubicationauthor` SET Noofauth=$countt WHERE PID=$id;");
            }
            else{
                echo "<script>alert('Error in inserting data.Please Try again');</script>";
            }
            $i++;
                }
            }
        }
    }

    if(isset($_GET["q"])){
        $servername = 'localhost';
        $username = 'root';
        $dbname = 'internship';
        $conn=mysqli_connect($servername, $username,'', $dbname);
        if(!$conn) die();
        else{
            $query="DELETE FROM `pubicationauthor` where PID=".$_GET["q"].";";
            if(mysqli_query($conn,$query)){
                $queryy="DELETE FROM `publications` WHERE PID=".$_GET["q"].";";
                if(mysqli_query($conn,$queryy)){
                    //deleted query
                    echo "<script>window.location.href='./publications.php';</script>";
                }
            }
        }
    }


?>

<script type="text/javascript">
    function EDITbutton(element){
        console.log(element);
    }
    /*function DELETEbutton(element){
        //$("body").children().attr('z-index',-1000);
        //$('<div id="deleteclick"><div class="centreblock">mass mrnfkeefkfe</div></div>').appendTo("body");
        $("body").children().hide();
        $("#massmass").show();
    }*/
    function clickingchec(element){
        if(element.checked){
            $(".check").attr("disabled",true);
            $(element).removeAttr("disabled");
            $(".insertbutton").toggle();
            $('<div class="text-center EDbuttons mt-5"><button class="btn btn-primary mr-2" id="EDIT">EDIT</button><button class="btn btn-danger ml-2" id="DELETE">DELETE</button></div>').insertAfter("#fullcontainer");
            $("#EDIT").click(function(){
                EDITbutton(element);
            });
            $("#DELETE").click(function(){
                DELETEbutton(element);
            });
        }
        else{
            $(".check").removeAttr("disabled");
            $(".insertbutton").show();
            $(".EDbuttons").remove();
        }
    }
    function expand(ele){
       // $(ele.nextElementSibling).toggle(); 
       if($($('.excelform')[0].parentElement).css("display")!="none") $($('.excelform')[0].parentElement).css("display","none");
        $("#expand").toggle();
    }
    function excel(ele){
        //$(ele.previousElementSibling).toggle();
        if($("#expand").css("display")!="none") $("#expand").css("display","none");
        $($('.excelform')[0].parentElement).toggle();
    }

    ///////
    function dlgout(){
                $("#white-background").css("display","none");
                $("#dlgbox").css("display","none");
    }
    function dlgLogin(ele){
        console.log($("#fullcontainer>div").index($(ele.parentElement.parentElement)));
        window.location.href=window.location.href+"?q="+($("#fullcontainer>div").index($(ele.parentElement.parentElement))-1);
    }        
    function DELETEbutton(ele){
        var whitebg = document.getElementById("white-background");
        var dlg = document.getElementById("dlgbox");
        whitebg.style.display = "block";
        dlg.style.display = "block";
        
        var winWidth = window.innerWidth;
        var winHeight = window.innerHeight;
        
        dlg.style.left = (winWidth/2) - 480/2 + "px";
        dlg.style.top = "150px";
        $("#dlgLogin").click(function(){
            dlgLogin(ele);
        })
    }
    function insertC(ele){
        //console.log(ele);
        var beforeclone=document.getElementsByClassName("firstblock")[0];
        var element = beforeclone.cloneNode(true);
        element.children[2].children[0].innerHTML=element.children[2].children[0].innerHTML+'<i class="fa fa-minus-circle"style="color : red; font-size : 20px;" onclick="deleteC(this)"></i>';
        var str=ele.parentElement.parentElement.previousElementSibling.previousElementSibling.children[0].innerHTML;
        $(element.children[1].children[0].children[0]).attr("name","Author"+(parseInt(str.slice(7,str.length-2))+1));
        element.children[0].children[0].innerHTML="Author "+(parseInt(str.slice(7,str.length-2))+1)+" :";
        $(element).insertBefore("#appendbefore");
    }
    function deleteC(ele){
        $(ele.parentElement.parentElement.parentElement).remove();
    }
////

</script>

<style>
/* template start*/ 
#white-background{
    display: none;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0px;
    left: 0px;
    background-color: #fefefe;
    opacity: 0.7;
    z-index: 9999;
}
            
#dlgbox{
    /*initially dialog box is hidden*/
    display: none;
    position: fixed;
    width: 480px;
    z-index: 9999;
    border-radius: 10px;
    background-color: #7c7d7e;
}

#dlg-header{
    background-color: #214B8C;
    color: white;
    font-size: 20px;
    padding: 10px;
    margin: 10px 10px 0px 10px;
}

#dlg-body{
    background-color: white;
    color: black;
    font-size: 14px;
    padding: 10px;
    margin: 0px 10px 0px 10px;
}

#dlg-footer{
    background-color: #f2f2f2;
    text-align: right;
    padding: 10px;
    margin: 0px 10px 10px 10px;
}

#dlg-footer button{
    color: white;
}
/* template end*/
.para{
    background-color: #214B8C;
}
.row>div{
    border-left: 1px solid white;
    border-right: 0;
}
.row>div:first-child{
    border-right: 1px solid white;
    border-left: 0  ;
}
.after{
    background-color: #edeaea;
    border-bottom: 2px solid white;
}
#fullcontainer{
    
}
.EDbuttons{
}
.excelform{
    display: inline-block;
}
</style>
 <!-- dialog box --> 
<div id="white-background"></div>
<div id="dlgbox">
    <div id="dlg-header">You are deleting an entry.</div>
    <div id="dlg-body">Are you sure?</div>
    <div id="dlg-footer">
        <button class="btn btn-danger" id="dlgLogin">Yes</button>
        <button class="btn btn-primary" onclick="dlgout()">No</button>
    </div>
</div>
<!-- dialog box -->

<div class="container">
    <h2 class="" style="text-align:center; margin-top: 0">Publication Details</h2>
    <div class="container" id="fullcontainer" style="margin : 0;margin-top : 30px; font-size:18px;">
        <div class="row">
            <div class="para col-lg-1">
            </div>
            <div class="para col-lg-8">
            <p class="mb-2 mt-2 text-center text-white">Publication Title</p>
            </div>
            <div class="para col-lg-3">
            <p class="mb-2 mt-2 text-center text-white">Contributed with</p>
            </div>
        </div>
        <?php
            //userdetails already stored in a variables of php script
            $obj=new SQL();
            $conn=$obj->SQLi();
            if(!$conn) die("<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>");
            else{
                $mainarr=array();
                $quer = "SELECT Title,PID FROM publications WHERE PID in (SELECT PID from pubicationauthor where EID in (SELECT EID from users where EMAIL='sample1@gmail.com'))";
                $result = $obj->query($quer);
                if(!$result) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                else{
                    while($row = mysqli_fetch_assoc($result)) {
                        $subq = 'SELECT `ENAME` from `users` NATURAL JOIN `pubicationauthor` WHERE `PID`='.$row["PID"].' and `EMAIL`!="sample1@gmail.com"';
                        $str="";
                        $result1 = mysqli_query($conn, $subq);
                        while($row1= mysqli_fetch_assoc($result1)){
                            $str=$str.$row1["ENAME"].",";
                        }
                        array_push($mainarr,($row["PID"]));
                        if($str=="") echo '<div class="row after"><div class="col-lg-1 text-center align-self-center"><input type="checkbox" class="check" onclick="clickingchec(this)" ></div><div class="col-lg-8"><p class="mb-2 mt-2 text-center">'.$row["Title"].'</p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center">Fully Contibuted by you</p></div></div>';  
                        else  echo '<div class="row after"><div class="col-lg-1 text-center align-self-center"><input type="checkbox" class="check" onclick="clickingchec(this)" ></div><div class="col-lg-8"><p class="mb-2 mt-2 text-center">'.$row["Title"].'</p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center">'.substr($str,0,strlen($str)-1).'</p></div></div>'; 
                    }
                }
            }
        ?>
    </div>
    <div class="insertbutton text-center mt-5">
        <button class="btn btn-success mr-4" style="font-size:16px;" onclick="expand(this)">Insert</button>
        <button class="btn btn-success ml-4" onclick='excel(this)' style="font-size : 16px;">Excel</button>
    </div>
    <div id="expand" style="display :none;">
        <h3>Publication Details</h3>
        <hr class="mt-2">
        <form action="../Profile/publications.php" method="POST">
            <?php
                $rand=rand();
                $_SESSION['rand']=$rand;
            ?>
            <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
            <div class="row">
                <div class="col-lg-3">
                <label for="PName">Publication Name : <span style="color : red;">*</span></label>
                </div>
                <div class="col-lg-4">
                <input type="text" name="Title" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="SourceTi">Source Title :</label>
                </div>
                <div class="col-lg-4">
                <input type="text" name="Source_Title" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="ConName">Conference Name :</label>
                </div>
                <div class="col-lg-4">
                <input type="text" name="ConferenceName" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="ISSN">ISSN :</label>
                </div>
                <div class="col-lg-9">
                <input type="number" name="ISSN1" required style="display : inline-block;" min="1000" max="9999">
                <p style="display : inline-block;">-</p>
                <input type="number" name="ISSN2" required style="display : inline-block;" min="1000" max="9999">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="VolumeNo">Volume Number :</label>
                </div>
                <div class="col-lg-4">
                <input type="number" name="Vol" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Pages">Pages :</label>
                </div>
                <div class="col-lg-4">
                <input type="number" name="Pages" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Year">Year :</label>
                </div>
                <div class="col-lg-4">
                <input type="number" name="Year" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Year">Indexing :</label>
                </div>
                <div class="col-lg-9">
                    <select name="indexing" id="indexing">
                        <option value="Scopus">Scopus</option>
                        <option value="SCI">SCI</option>
                        <option value="Non-SCI">Non-SCI</option>
                        <option value="Openaccess">Open Access</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Website">Website Source :</label>
                </div>
                <div class="col-lg-4">
                <input type="text" name="Website" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Link">Publication website URL :</label>
                </div>
                <div class="col-lg-4">
                <input type="text" name="Link" required>
                </div>
            </div>
            <div class="row firstblock">
                <div class="col-lg-3">
                <label for="Link">Author 1 :</label>
                <span style="color:red;">(Enter email id)</span>
                </div>
                <div class="col-lg-auto" style="display: inline-block;">
                    <div style="margin-top: 7.5px;">
                        <input type="email" name="Author1" required>
                    </div>
                </div>
                <div style="display : inline-block;">
                        <div style="margin-top: 10px;">
                            <i class="fa fa-plus-circle" style="color : green; font-size : 20px;" onclick="insertC(this)"></i>
                        </div>
                </div>
            </div>
            <!-- function insertC(ele){
        //console.log(ele);
        var beforeclone=document.getElementsByClassName("firstblock")[0];
        var element = beforeclone.cloneNode(true);
        element.children[2].children[0].innerHTML=element.children[2].children[0].innerHTML+'<i class="fa fa-minus-circle"style="color : red; font-size : 20px;" onclick="deleteC(this)"></i>';
        var str=ele.parentElement.parentElement.previousElementSibling.previousElementSibling.children[0].innerHTML;
        $(element.children[1].children[0].children[0]).attr("name","Author"+(parseInt(str.slice(12,str.length-2))+1));
        element.children[0].children[0].innerHTML="Contributor "+(parseInt(str.slice(12,str.length-2))+1)+" :";
        $(element).insertBefore("#appendbefore");
    } -->
            <div class="text-center mt-4" id="appendbefore">
                <button type="submit" name="MANUALPOST" class="btn btn-success">POST THE DETAILS</button>
            </div>
        </form>
    </div>
    <div class="text-center" style="display: none;">
        <form action="../Profile/publications.php" method="post" enctype="multipart/form-data" class="excelform mt-5">
            <?php
                $rand1=rand();
                $_SESSION['rand1']=$rand1;
            ?>
            <input type="hidden" value="<?php echo $rand1; ?>" name="randcheck1" />
            <div class="row text-center">
                <div class="mt-2">
                    <input type="file" name="csvfile" required>
                </div>
                <div>
                    <button type="submit" name="uploadexcel" class="btn btn-info">Upload CSV</button>
                </div>
            </div>
        </form>
        <div class="text-center" style="color:red;">
            *Table columns must be in the order (Publication Title,Conference Name,Source Title,Volume,Pages,Year,Website name,URL of publication)
        </div>
    </div>
</div>
<!-- code end -->                        
<div class="content-wrap">
            <div class="main">
                <div class="container-fluid">

                </div>
            </div>
</div>
		
               <style type="text/css">

.footer {
  position: absolute;
  left: 0;
  bottom: -20;
  width: 100%;
  height:30px;
  background-color: #343A40;  
  color: white;
  text-align: center;
}
td{
 color: black;
}
</style> 


        <!-- jquery vendor -->
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/jquery.min.js"></script>
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller -->
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/menubar/sidebar.js"></script>
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/bootstrap.min.js"></script>
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
        
        <!-- scripit init-->

    </body>

</html>


<style>
	@media print {
		
  .header,
  .sidebar,
  .chat-sidebar,
  .control,
  .control-bar {
    display: none !important;
  }
  [contenteditable]:hover,
  [contenteditable]:focus {
    outline: none;
  }
  body{
  margin-left:0px;
  }
}
	</style>



					





                                                    





































