<?php
    session_start();
    require 'dbcon.php';
?>
    <!DOCTYPE html>
    <html lang=e n dir="ltr">

    <head>
        <link rel="stylesheet" href="editprofile-style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dental Clinic Web Page">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <title>Doctor Accounts</title>

    </head>


    <body>
        <nav>
            <header>
                <div class="logo"> <img src="../logo dental.png" alt="dental logo"></div>
                Cruz Dental Clinic
            </header>


            <ul>

                <li>
                    <a href="../index.html">
                        <i class="fa-solid fa-house"></i> Dashboard
                    </a>
                </li>

                <li>
                    <a href="#" class="sched-btn">
                        <i class="fa-solid fa-calendar-days"></i> Schedule
                        <span class="fas fa-caret-down first"></span>
                    </a>
                    <ul class="sched-show">
                        <li><a href="#">Calendar</a></li>
                        <li><a href="#">Schedule List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="acct-btn">
                        <i class="fa-solid fa-user-group"></i> Accounts
                        <span class="fas fa-caret-down second"></span>
                    </a>
                    <ul class="acct-show">
                        <li><a href="../admin/DoctorAccont/index.php">Dentist</a></li>
                        <li><a href="../admin/PatientAccount/index.php">Patients</a></li>
                        <li><a href="../admin/AdminAccount/index.php">Administrator</a></li>
                    </ul>
                </li>

                <li>
                    <a href="../admin/Billing/index.php"> <i class="fa-solid fa-money-bill-wave"></i> Billing </a>
                </li>
                <li><a href="../announcement.html"><i class="fa-solid fa-bullhorn"></i> Announcements </a></li>
            </ul>


            <div class="logout">
                <li>
                    <a href=""> <i class="fa-solid fa-right-from-bracket"></i> Logout </a>
                </li>

            </div>
        </nav>



        <!--Edit Profile-->
        <div class="main-profile">

             <!--Add Picture -->
             <div class="profile-pic-div">
                <img src="adminsample.png" id="photo">
                <input type="file" id="file">
                <label for="file" id="uploadBtn">Choose Photo</label>
                
            </div>

        <br><br><br><br>


            <div class="reg-form">
                <div class="container">
                    <div class="content">
                        <form action="" method="POST">
                            <div>
                                <h4>ACCOUNT INFORMATION</h4>
                            </div>

                            
    <?php
    include 'connect.php';    
    $currentid = $_GET['id'];
    $sql = "SELECT * from admins where admin_id = $currentid";
    $result= mysqli_query($connection, $sql);
    $count= mysqli_num_rows($result);

    if( $count > 0){

	//get all the data from a row of the data
	while($row = mysqli_fetch_assoc($result)){
		$admin_first_name = $row['admin_first_name'];
		$admin_surname = $row['admin_surname'];
		$admin_email_address = $row['admin_email_address'];
		$admin_contact_number = $row['admin_contact_number'];
        $admin_birthdate = $row['admin_birthdate'];
	}
}


    ?><br><br>
                             <div class="user-details">
                                <div class="input-box">
                                    <span class="details">First Name</span>
                                    <p id="rcorners2"><?php echo $admin_first_name;?></p>
                                </div>   
                                
                                <div class="input-box">
                                    <span class="details">Last Name</span>
                                    <p id="rcorners2"><?php echo $admin_surname;?></p>
                                </div>

                            
                                <div class="input-box">
                                    <span class="details">Email Address</span>
                                    <p id="rcorners2"><?php echo $admin_email_address;?></p>
                                </div>  
 
                                <div class="input-box">
                                    <span class="details">Birth Date</span>
                                    <p id="rcorners2"><?php echo $admin_birthdate;?></p>
                                </div>

                                <div class="input-box">
                                    <span class="details">Phone Number:</span>
                                    <p id="rcorners2"><?php echo $admin_contact_number;?></p>
                                </div>  
                               


                               
                            </div>
                     
                         

                            <div class="buttons">
                            <a href="index.php">
                            <button type="button" id="closebtn" class="btn btn-secondary">Close</button>
                            </a>
                            <a href="editpatientprofile.php">
                            <button id="submit" type="button"class="btn btn-success btn-sm">Edit Profile</button>
                            </div>
            
                        </form>
                    </div>


                </div>



            </div>


        </div>

        <script src="app.js"></script>

    </body>

    </html>
