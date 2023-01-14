<?php
error_reporting(0);
// multiple recipients
 $to  =$_POST['email'] . ', '; // note the comma
 $to .= 'Organizer <masli@ifpan.edu.pl>' . ',  ';
 $to .= 'Organizer2 <phamdinhquochuy@gmail.com>';
$title=$_POST['title'];
$fname=$_POST['first_Name'];
$lname=$_POST['family_Name'];
$affiliation=$_POST['affiliation'];
$address=$_POST['address'];
$city_code=$_POST['city_code'];
$city=$_POST['city'];
$country=$_POST['country'];
$email=$_POST['email'];
$tel=$_POST['Tel'];
$fax=$_POST['Fax'];
$web=$_POST['Website'];
$food=$_POST['Food'];
$attending_day15=$_POST['attending_day15'];
$attending_day16=$_POST['attending_day16'];
$attending_day17=$_POST['attending_day17'];
$presentation=$_POST['presentation'];
$invited_talk=$_POST['invited_talk'];
$upfile_invited=$_FILES["file"]["name"];
$poster_presentation=$_POST['poster_presentation'];
$hotel14=$_POST['hotel14'];
$hotel14=$_POST['hotel15'];
$hotel14=$_POST['hotel16'];
$hotel14=$_POST['hotel17'];
$hotel14=$_POST['hotel18'];
$hotel_room=$_POST['Hotel_room'];
$roommate=$_POST['roommate'];
// subject
$subject = 'Registration for ICCST 2014';

 // message
 $message = "
Dear $title $fname $lname,\r\n
Thank you for your registration the details of which are given below.
 We hope to see you in Warsaw soon.\r\n
Best regards\r\n
Organizers\r\n
\r\n
Registration informations:\r\n
Title: $title\r\n
Full name: $fname $lname\r\n
Affiliation: $affiliation\r\n
Adress: $address, $city_code, $city, $country\r\n
Email: $email\r\n
Tel: $tel\r\n
Fax: $fax\r\n
Website: $web\r\n
\r\n
Food: $food\r\n
Attending days:\r\n
May 15: $attending_day15\r\n
May 16: $attending_day16\r\n
May 17: $attending_day17\r\n
\r\n
Presentation type: $presentation  $invited_talk\r\n
File uploaded: $upfile_invited\r\n
\r\n

 ";

                                                   // To send HTML mail, the Content-type header must be set
//                                                   $headers  = 'MIME-Version: 1.0' . "\r\n";
//                                                   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                                                   // Additional headers
//                                                   $headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
                                                   $headers .= 'From: ICCST-2014' . "\r\n";
//                                                   $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//                                                   $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

                                                   // Mail it
                                                   mail($to, $subject, $message, $headers);
echo "Thank you for your registration. <br><br>";
echo "You have just registered with following informations <br>";
echo "Full name: $fname $lname<br>";
echo "Title: $title<br>";
echo "Affiliation: $affiliation<br>";
echo "Adress: $address $city_code $city $country <br>";
echo "Email: $email<br>";
echo "Tel: $tel<br>";
echo "Fax: $fax<br>";
echo "Attending day(s)<br>";
echo "May 15: $attending_day15<br>";
echo "May 16: $attending_day16<br>";
echo "May 17: $attending_day17<br>";
echo "Presentation type: $presentation  $invited_talk<br>";
echo "File uploaded: $upfile_invited<br><br>";
echo "An email containing above informations has also been sent to you email adress.<br><br>";

  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
 #   echo "Upload: " . $_FILES["file"]["name"] . "<br>";
 #   echo "Type: " . $_FILES["file"]["type"] . "<br>";
 #   echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
 #   echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("/home/masli/public_html/www/upload/" . $_FILES["file"]["name"]))
      {
      echo "WARNING! ". $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "/home/masli/public_html/www/upload/" . $_FILES["file"]["name"]);
#      echo "Stored in: " . "/home/masli/public_html/www/upload/" . $_FILES["file"]["name"];
      }
    }

echo "<br>";

                                                 
  ?>

