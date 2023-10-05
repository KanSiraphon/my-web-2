<?php include 'connectdb.php'; ?>

<?php
   header("content-type:text/html;charset=UTF-8");
   
   $T1Input = floatval($_POST['2T1']);

   $T2Input = floatval($_POST['2T2']);

   $G7Input = floatval($_POST['G7']);

   $result = '';
   
   if ($G7Input >= 5.00 && $T1Input >= 5.00 && $T2Input >= 5.00) {
       $result = 'ไม่สามารถพยากรณ์ได้';
   } else if ($G7Input > 1.815 && $T1Input > 0.650 && $T2Input > 1.360 && $T2Input > 2.855) {
       $result = 'สุดยอดมาก คุณมีโอกาสสูงที่จะสำเร็จการศึกษา';
   } else if ($G7Input > 1.815 && $T1Input > 0.650 && $T2Input > 1.360 && $T2Input <= 2.855 && $T2Input > 2.840 && $G7Input > 2.605 && $T1Input > 2.745) {
       $result = 'สุดยอดมาก คุณมีโอกาสสูงที่จะสำเร็จการศึกษา';
   } else if ($G7Input > 1.815 && $T1Input > 0.650 && $T2Input > 1.360 && $T2Input <= 2.855 && $T2Input > 2.840 && $G7Input > 2.605 && $T1Input <= 2.745) {
       $result = 'คุณมีโอกาสสูงที่จะไม่สำเร็จการศึกษา สู้ ๆ นะครับ';
   } else if ($G7Input > 1.815 && $T1Input > 0.650 && $T2Input > 1.360 && $T2Input <= 2.855 && $T2Input > 2.840 && $G7Input <= 2.605) {
       $result = 'สุดยอดมาก คุณมีโอกาสสูงที่จะสำเร็จการศึกษา';
   } else if ($G7Input > 1.815 && $T1Input > 0.650 && $T2Input > 1.360 && $T2Input <= 2.855 && $T2Input <= 2.840) {
       $result = 'สุดยอดมาก คุณมีโอกาสสูงที่จะสำเร็จการศึกษา';
   } else if ($G7Input > 1.815 && $T1Input > 0.650 && $T2Input <= 1.360 && $T1Input > 2.575) {
       $result = 'สุดยอดมาก คุณมีโอกาสสูงที่จะสำเร็จการศึกษา';
   } else if ($G7Input > 1.815 && $T1Input > 0.650 && $T2Input <= 1.360 && $T1Input <= 2.575 && $T2Input > 0.210) {
       $result = 'คุณมีโอกาสสูงที่จะไม่สำเร็จการศึกษา สู้ ๆ นะครับ';
   } else if ($G7Input > 1.815 && $T1Input > 0.650 && $T2Input <= 1.360 && $T1Input <= 2.575 && $T2Input <= 0.210 && $T1Input > 2.285) {
       $result = 'คุณมีโอกาสสูงที่จะไม่สำเร็จการศึกษา สู้ ๆ นะครับ';
   } else if ($G7Input > 1.815 && $T1Input > 0.650 && $T2Input <= 1.360 && $T1Input <= 2.575 && $T2Input <= 0.210 && $T1Input <= 2.285) {
       $result = 'สุดยอดมาก คุณมีโอกาสสูงที่จะสำเร็จการศึกษา';
   } else if ($G7Input > 1.815 && $T1Input <= 0.650 && $G7Input > 3.325) {
       $result = 'คุณมีโอกาสสูงที่จะไม่สำเร็จการศึกษา สู้ ๆ นะครับ';
   } else if ($G7Input > 1.815 && $T1Input <= 0.650 && $G7Input <= 3.325) {
       $result = 'สุดยอดมาก คุณมีโอกาสสูงที่จะสำเร็จการศึกษา';
   } else if ($G7Input <= 1.815) {
       $result = 'คุณมีโอกาสสูงที่จะไม่สำเร็จการศึกษา สู้ ๆ นะครับ';
   } else {
       $result = 'ไม่สามารถพยากรณ์ได้';
   }
   
   echo $result;
   //print($result);
   //echo '<a href="test_4.html">OK</a>';
   //echo '<a href="Homepage.html">OK</a>';
//
//
   //echo ("name :" .$m_name);
   //print_r($_POST);
   $year = $_POST['year'];

   $T1 = $_POST['2T1'];

   $T2 = $_POST['2T2'];

   $G7 = $_POST['G7'];

   $G8 = $_POST['G8'];

   $Total = $_POST['Total'];

   //$result = $_POST['result'];

   $results = mysqli_query($conn, "INSERT INTO `project_2` (`year`, `2T1`, `2T2`, `G7`, `G8`, `Total`) 
                              VALUES ('$year', '$T1', '$T2', '$G7', '$G8', '$Total')");
    if ($results) {

         //echo " บันทึกข้อมูลเรียบร้อย ";
     
      } else {
     
         echo " ผิดพลาด $sql";
     
      }

      

?>