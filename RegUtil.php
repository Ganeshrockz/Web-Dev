
<?php
$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
{
    echo "Not Connected to Server";
}
if(!mysqli_select_db($con,'xceeddb'))
{
    echo "Database Not Selected";
}
$Name1=$_POST['name1'];
$Email1=$_POST['email1'];
$Face1=$_POST['fb1'];
$Numb1=$_POST['num1'];
$Coll1=$_POST['college1'];
$Name2=$_POST['name2'];
$Email2=$_POST['email2'];
$Face2=$_POST['fb2'];
$Numb2=$_POST['num2'];
$Coll2=$_POST['college2'];
$Name3=$_POST['name3'];
$Email3=$_POST['email3'];
$Face3=$_POST['fb3'];
$Numb3=$_POST['num3'];
$Coll3=$_POST['college3'];
$Name4=$_POST['name4'];
$Email4=$_POST['email4'];
$Face4=$_POST['fb4'];
$Numb4=$_POST['num4'];
$Coll4=$_POST['college4'];
require_once("C:\php\PHPMailer-PHPMailer-adb0197\class.phpmailer.php");
$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->isHTML(true);
$mail->Username="ganesh890370@gmail.com";
$mail->Password="9486428529";
$mail->SetFrom("ganesh890370@gmail.com");
$mail->Subject="TestMail";
$mail->Body="This is a automated mail.Dont reply";
$mail->AddAddress($Email1);
if(!$mail->Send())
echo "Error".$mail->ErrorInfo;
else {
    echo "Message Sent";
}
if(!empty($Email2))
{
require_once("C:\php\PHPMailer-PHPMailer-adb0197\class.phpmailer.php");
$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->isHTML(true);
$mail->Username="ganesh890370@gmail.com";
$mail->Password="9486428529";
$mail->SetFrom("ganesh890370@gmail.com");
$mail->Subject="TestMail";
$mail->Body="This is a automated mail.Dont reply";
$mail->AddAddress($Email2);
if(!$mail->Send())
echo "Error".$mail->ErrorInfo;
else {
    echo "Message Sent";
}
}
if(!empty($Email3))
{
require_once("C:\php\PHPMailer-PHPMailer-adb0197\class.phpmailer.php");
$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->isHTML(true);
$mail->Username="ganesh890370@gmail.com";
$mail->Password="9486428529";
$mail->SetFrom("ganesh890370@gmail.com");
$mail->Subject="TestMail";
$mail->Body="This is a automated mail.Dont reply";
$mail->AddAddress($Email3);
if(!$mail->Send())
echo "Error".$mail->ErrorInfo;
else {
    echo "Message Sent";
}
}
if(!empty($Email4))
{
require_once("C:\php\PHPMailer-PHPMailer-adb0197\class.phpmailer.php");
$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->isHTML(true);
$mail->Username="ganesh890370@gmail.com";
$mail->Password="9486428529";
$mail->SetFrom("ganesh890370@gmail.com");
$mail->Subject="TestMail";
$mail->Body="This is a automated mail.Dont reply";
$mail->AddAddress($Email4);
if(!$mail->Send())
echo "Error".$mail->ErrorInfo;
else {
    echo "Message Sent ";
}
}
$sql="INSERT INTO detail (Name1,Email1,Facebook1,Number1,College1,Name2,Email2,Facebook2,Number2,College2,Name3,Email3,Facebook3,Number3,College3,Name4,Email4,Facebook4,Number4,College4) VALUES ('$Name1','$Email1','$Face1','$Numb1','$Coll1','$Name2','$Email2','$Face2','$Numb2','$Coll2','$Name3','$Email3','$Face3','$Numb3','$Coll3','$Name4','$Email4','$Face4','$Numb4','$Coll4')";
if(!mysqli_query($con,$sql))
{
    echo "Not Inserted ";
}
else {
    echo "Successfully Inserted";
}
header("refresh:10; url=Reg.html");
?>