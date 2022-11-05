<!DOCTYPE html>
<html lang=e n dir="ltr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="patientprescription-style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="../css/navstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Patient Profile</title>


</head>

<body>
    <div class="side-menu">

    
       <!--mobile navigation bar start-->
       <div class="mobile_nav">
      <div class="nav_bar">
        <div class="left_area">
          <h3>Cruz Dental <span>Clinic</span></h3>
        </div>
        <i class="fa fa-bars nav_btn"></i>
      </div>

      <div class="mobile_nav_items">
        <a href="index.php"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
      
      
      
      <div class="menu"> 
         <div class="item">
        <a class="sub-btn"><i class="fa-solid fa-calendar-days"></i>Schedule<i class="fas fa-caret-down drop-down"></i></a>
        <div class="sub-menu">
            <a href="booksched.html"><i class="fas fa-envelope"></i><span>Calendar</span></a>
            <a href="ScheduleList.html"><i class="fas fa-envelope-square"></i><span>Schedule List</span></a>
           
        </div>
      </div>
</div>

<div class="menu"> 
 
  <div class="item">
    
 <a class="sub-btn"><i class="fa-solid fa-user-group"></i>Accounts<i class="fas fa-caret-down drop-down"></i></a>
 <div class="sub-menu">
     <a href="DentistAccount/index.php"><i class="fas fa-envelope"></i><span>Dentist</span></a>
     <a href="PatientAccount/index.php"><i class="fas fa-envelope-square"></i><span>Patients</span></a>
     <a href="AdminAccount/index.php"><i class="fas fa-envelope-square"></i><span>Administrator</span></a>
    
 </div>
</div>
</div>

      <a href="#"><i class="fa-solid fa-money-bill-wave"></i><span>Billing </span></a>
      <a href="announcement.php"><i class="fa-solid fa-bullhorn"></i><span>Announcements</span></a>
     
      <div class="logout">
        <li><a href="#logout"> <i class="fa-solid fa-right-from-bracket"></i> Logout </a></li>
        
    </div>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">

      <header>
        <div class="left_area">
         <img src="logo dental.png" alt="logo"><h3>Cruz Dental <span>Clinic</span></h3>
        </div>
      </header>

     


      <br><br><br><br><br><br>
      <a href="index.php"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
      <div class="menu"> 
         <div class="item">
        <a class="sub-btn"><i class="fa-solid fa-calendar-days"></i>Schedule<i class="fas fa-caret-down drop-down"></i></a>
        <div class="sub-menu">
            <a href="booksched.html"><i class="fas fa-envelope"></i><span>Calendar</span></a>
            <a href="ScheduleList.html"><i class="fas fa-envelope-square"></i><span>Schedule List</span></a>
           
        </div>
      </div>
</div>

<div class="menu"> 
  <div class="item">
 <a class="sub-btn"><i class="fa-solid fa-user-group"></i>Accounts<i class="fas fa-caret-down drop-down"></i></a>
 <div class="sub-menu">
     <a href="DentistAccount/index.php"><i class="fas fa-envelope"></i><span>Dentist</span></a>
     <a href="PatientAccount/patientlist.php"><i class="fas fa-envelope-square"></i><span>Patients</span></a>
     <a href="AdminAccount/index.php"><i class="fas fa-envelope-square"></i><span>Administrator</span></a>
    
 </div>
</div>
</div>

      <a href="#"><i class="fa-solid fa-money-bill-wave"></i><span>Billing </span></a>
      <a href="announcement.php"><i class="fa-solid fa-bullhorn"></i><span>Announcements</span></a>
     
      <div class="logout">
        <li><a href="#logout"> <i class="fa-solid fa-right-from-bracket"></i> Logout </a></li>
        
    </div>
    </div>
    <!--sidebar end-->


    </div>


    <div class="body_content">
        <h1>Patient Profile</h1>
    </div>



    <div class="container">
    <?php
            include '../Database/connect.php';
            $currentid = $_GET['id'];

            $sql = "SELECT * from persons where id = $currentid";
            $result = mysqli_query($connection,$sql);
    

            if(mysqli_num_rows($result)>0){
                while ($row = $result->fetch_assoc()){
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $email = $row['email'];

                }
                ?>

                <div class="patient-info">
                <img src="user-logo.png" alt="user logo">
                <h1><?php echo $fname ?> <?php echo $lname ?> </h1>
                <p><?php echo $email ?> </p>
                
            </div>
            <?php

            }


        
    ?>

 


        <div class="navbar">
                                            <div class="topnav">
                                                <a href="patientapphistory.html">Appointment History</a>
                                                <a href="patientmbg.html">Medical Background</a>
                                                <a href="patientdiagnosis.php? currentid=<?= $currentid; ?>" href="">Diagnosis</a>
                                                <a href="patientdbg.html">Dental Background</a>
                                                <a class="active">E-Prescription</a>
                                                <a href="patientreferral.html">Referral</a>
                                            </div>
                                            
        

            <div class="prescription">
                <div class="presc-header">
                    <h2>E-Prescription </h2>
                </div>
                <div class="addpresc-btn"><button type="button" data-bs-target="#exampleModal" data-bs-toggle="modal" class="presc-button">Add</button>
                </div>

                <div class="presc-cont">
                    <div class="data-containter">
                        <div class="each-presc">
                            <?php
                                include '../Database/connect.php';

                                $query_presc = "SELECT * from prescription WHERE user_id=$currentid ORDER by date_added DESC";
                                $res = mysqli_query($connection,$query_presc);

                                if(mysqli_num_rows($res)>0){

                                    while($row = mysqli_fetch_array($res)){
                            ?>
                                <!--for list view of prescriptions-->
                                <div class="presc-body">
                                  
                                    <div class="col1">
                                       
                                            <h5> Prescription Date: <?php echo $row['date_added'] ?>
                                            </h5>
        
                                    </div>
                                    

                                    <div class="actions">
                                        <button type="button" id="<?php echo $row['prescription_id'] ?>" class="viewbtn btn btn-primary btn-sm">View</button>
                                        <button type="button" id="<?php echo $row['prescription_id'] ?>" class="printbtn btn btn-primary btn-sm">Print</button>
                                    </div>
                                </div>





                                <?php
                                    }

                                }else {
                                  
                                    ?>
                                        <div class="no-presc">
                                            <h5>No prescriptions</h5>
                                        
                                        </div>
                                    <?php
                                }
                                ?>
                            

                        </div>
                    </div>


                </div>





            </div>



        </div>

        <!-- Modal for adding digital prescription -->
        <div class="modal fade" data-bs-backdrop="static" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content" id="add-img">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Prescription</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Form -->
                    <form action="addprescription.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $currentid?>">
                        <input type="hidden" name="url" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                        <div class="modal-body">
                            <label>Select Image File:</label>
                            <input type="file" name="image" class="form-control">
                            <label style="margin-top:2%;">Notes:</label>
                            <textarea type="text" name="notes" class="form-control" required></textarea>
                         

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <input type="submit" name="submit" class="uploadbtn btn btn-primary" value="Upload">
                        </div>
                    </form>

                </div>
            </div>
        </div>

            <!-- Modal for viewing prescription image -->
        <div class="modal fade" id="viewpresc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content" id="viewpresc-img">
                    <div class="modal-header">
                        <h5>Prescription Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body" id="presc-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </div>













    <!--script for nav menu-->
    <script>
        $('.sched-btn').click(function() {
            $('nav ul .sched-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        });
        $('.acct-btn').click(function() {
            $('nav ul .acct-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });
        $('nav ul li').click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>

    <!--script for viewing prescription-->
    <script type='text/javascript'>
         $(document).ready(function(){
            $('.viewbtn').click(function(){

                var userid = $(this).attr('id');
                
                $.ajax({
                    url: 'viewprescription.php',
                    type: 'post',
                    data: {userid: userid},
                     success: function(result){
                        $("#presc-body").html(result);
                        $('#viewpresc').modal('show'); 
                    }
                });
            });
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>


</body>

</html>