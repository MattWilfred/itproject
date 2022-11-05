<?php



    require '../Database/connect.php';
    

    if (isset($_POST['submit']))
    {
       

        $toothnumber = implode(", ", $_POST['tooth']);
        $description = $_POST['description'];
        $id = $_POST['id'];
        
        

        $query = "INSERT INTO diagnosis(tooth_number, description, userid) VALUES ('$toothnumber','$description', $id)";
        $query_run = mysqli_query($connection, $query);

        if ($query_run){
            echo '<script> alert("Data Saved"); </script>';
            header("Location: {$_REQUEST["url"]}");

        }
        else {
            die("Invalid query: " . $connection->error);
        }
    }

    if(isset($_POST['delete_account']))
{
    $cruzdentalclinic_id = mysqli_real_escape_string($connection,$_POST['delete_account']);

    $query = "DELETE FROM diagnosis WHERE `diagnosis_id`='$cruzdentalclinic_id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted";
        header("Location: patientdiagnosis.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: patientdiagnosis.php");
        exit(0);
    }
}


                       


?>