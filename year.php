<?php include 'connectdb.php'; ?>
<?php
    header("content-type: text/html; charset=UTF-8");

    $result = mysqli_query($conn, "SELECT * FROM `year_1`");
    $num_rows= $result->num_rows;

    if ($num_rows == 0){
        echo "notdata";
    }else{
        $a = [];
        while ($item = $result->fetch_object())
        {	
            array_push($a,$item);
        } 
    // print_r($a);
        echo json_encode($a);
    }
?>