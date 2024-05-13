<?php
include 'dbcon.php';
session_start();

?>
<?php
if(isset($_POST['add_mba_ib_marks'])){
    $s_name = $_POST['s_name'];
    $s_roll = $_POST['s_roll'];
    $mba1c01 = $_POST['MBA1C01'];
    $mba1c02 = $_POST['MBA1C02'];
    $mba1c04 = $_POST['MBA1C04'];
    $mba1c05 = $_POST['MBA1C05'];
    $mba1c07 = $_POST['MBA1C07'];
    $mba1c08 = $_POST['MBA1C08'];
    $mba1c09 = $_POST['MBA1C09'];
    $mba1c10 = $_POST['MBA1C10'];

    if($s_name == "" || empty($s_name)){
        header('location:mba_marks_ib_t.php?message=You need to fill in the first name');
        exit;
    }
    else if($s_roll == "" || empty($s_roll)){
        header('location:mba_marks_ib_t.php?message=You need to fill in the Roll Number');
        exit;
    }
    else if($mba1c01 == "" || empty($mba1c01)){
        header('location:mba_marks_ib_t.php?message=You need to fill in MBA1C01');
        exit;
    }
    else if($mba1c02 == "" || empty($mba1c02)){
        header('location:mba_marks_ib_t.php?message=You need to fill in MBA1C02');
        exit;
    }
    else if($mba1c04 == "" || empty($mba1c04)){
        header('location:mba_marks_ib_t.php?message=You need to fill in MBA1C04');
        exit;
    }
    else if($mba1c05 == "" || empty($mba1c05)){
        header('location:mba_marks_ib_t.php?message=You need to fill in MBA1C05');
        exit;
    }
    else if($mba1c07 == "" || empty($mba1c07)){
        header('location:mba_marks_ib_t.php?message=You need to fill in MBA1C07');
        exit;
    }
    else if($mba1c08 == "" || empty($mba1c08)){
        header('location:mba_marks_ib_t.php?message=You need to fill in MBA1C08');
        exit;
    }
    else if($mba1c09 == "" || empty($mba1c09)){
        header('location:mba_marks_ib_t.php?message=You need to fill in MBA1C09');
        exit;
    }
    else if($mba1c10 == "" || empty($mba1c10)){
        header('location:mba_marks_ib_t.php?message=You need to fill in MBA1C10');
        exit;
    }
    else{
        $query = "INSERT INTO mba_ib_marks (s_name, s_roll, MBA1C01, MBA1C02, MBA1C04, MBA1C05, MBA1C07, MBA1C08, MBA1C09, MBA1C10) VALUES ('$s_name', '$s_roll', '$mba1c01', '$mba1c02', '$mba1c04', '$mba1c05', '$mba1c07', '$mba1c08', '$mba1c09', '$mba1c10')";

        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query Failed!".mysqli_error($connection));
        }
        else{
            header('location: mba_marks_ib_t.php?insert_msg=Your data has been added successfully');
            exit;
        }
    }
}
?>
