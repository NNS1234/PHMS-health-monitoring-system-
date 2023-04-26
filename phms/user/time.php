<?php
// include('includes/dbconnection.php');
include('includes/connect.php');
            $sqlget = "SELECT * FROM addmedication";
            $exec = mysqli_query($con, $sqlget);

            while ($res = mysqli_fetch_array($exec)) {
              $val1 = $res['medicine_name'];
              $val5 = $res['daily_dose'];
              $to_email = 'mallavenkatrn@gmail.com, testatus2022@gmail.com';
              date_default_timezone_set("America/Chicago");
              $timestamp = date("H:i");
              $hour = explode(":", $timestamp)[0];
              $min = (int)explode(":", $timestamp)[1];
            //   echo $timestamp;
            // morning
              if(
                   $val5 == 'morning' and $hour == "09" and $min > 01 and $min < 59
              )
              
              {
                $message = "take daily dose of your morning medicine " . $val1;
                $to_email = 'mallavenkatrn@gmail.com, testatus2022@gmail.com';
                $subject = 'Reminder!! to take medicine ';
                //$message = 'This mail is sent using the PHP mail function';
                $headers = 'From: noreply@pchms.com';
                $mail_status = mail($to_email, $subject, $message, $headers);
              }
// afternoon
              if(
                $val5 == 'noon' and $hour == "14" and $min > 01 and $min < 59
           )
           
           {
             $message = "take daily dose of your afternoon medicine " . $val1;
             $to_email = 'mallavenkatrn@gmail.com, testatus2022@gmail.com';
             $subject = 'Reminder!! to take medicine ';
             //$message = 'This mail is sent using the PHP mail function';
             $headers = 'From: noreply@pchms.com';
             $mail_status = mail($to_email, $subject, $message, $headers);
           }
//night 9-10
if(
    $val5 == 'night' and $hour == "21" and $min > 00 and $min < 59
)

{
 $message = "take daily dose of your night medicine " . $val1;
 $to_email = 'mallavenkatrn@gmail.com, testatus2022@gmail.com';
 $subject = 'Reminder!! to take medicine ';
 //$message = 'This mail is sent using the PHP mail function';
 $headers = 'From: noreply@pchms.com';
 $mail_status = mail($to_email, $subject, $message, $headers);
}

//night 10-11
if(
    $val5 == 'night' and $hour == "22" and $min > 00 and $min < 59
)

{
 $message = "take daily dose of your night medicine " . $val1;
 $to_email = 'mallavenkatrn@gmail.com, testatus2022@gmail.com';
 $subject = 'Reminder!! to take medicine ';
 //$message = 'This mail is sent using the PHP mail function';
 $headers = 'From: noreply@pchms.com';
 $mail_status = mail($to_email, $subject, $message, $headers);
}


            //   echo $timestamp;
            //   echo '<tr><td>' . $val1 . '</td><td>' . $val2 . '</td><td>' . $val3 . '</td><td>' . $val4 . '</td><td>' . $val5 . '</td></tr>';
            }

            ?>