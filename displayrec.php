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
$sql="SELECt * FROM detail";
$record=mysqli_query($con,$sql);
?>
<html>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>XCEED'S REGISTRANTS</title>
</head>
<body>
    <div class="container">
        <div class="table-responsive">
             <table class="table table-hover">
                 <thead>
                <tr>
                    <th>S.No</th>
                    <th>Member1</th>
                    <th>Email1</th>
                    <th>Facebook1</th>
                    <th>Number1</th>
                    <th>College1</th>
                     <th>Member2</th>
                    <th>Email2</th>
                    <th>Facebook2</th>
                    <th>Number2</th>
                    <th>College2</th>
                   <th>Member3</th>
                    <th>Email3</th>
                    <th>Facebook3</th>
                    <th>Number3</th>
                    <th>College3</th>
                    <th>Member4</th>
                    <th>Email4</th>
                    <th>Facebook4</th>
                    <th>Number4</th>
                    <th>College4</th>
                    </tr>
                    </thead>
                  <tbody>
     <?php 
     while($employee=mysqli_fetch_assoc($record))
     {
       echo "<tr>";
       echo "<td>".$employee['S.No']."</td>";
         echo "<td>".$employee['Name1']."</td>";
           echo "<td>".$employee['Email1']."</td>";
             echo "<td>".$employee['Facebook1']."</td>";
               echo "<td>".$employee['Number1']."</td>";
                 echo "<td>".$employee['College1']."</td>";
         echo "<td>".$employee['Name2']."</td>";
           echo "<td>".$employee['Email2']."</td>";
             echo "<td>".$employee['Facebook2']."</td>";
               echo "<td>".$employee['Number2']."</td>";
                 echo "<td>".$employee['College2']."</td>";
                          echo "<td>".$employee['Name3']."</td>";
           echo "<td>".$employee['Email3']."</td>";
             echo "<td>".$employee['Facebook3']."</td>";
               echo "<td>".$employee['Number3']."</td>";
                 echo "<td>".$employee['College3']."</td>";
                          echo "<td>".$employee['Name4']."</td>";
           echo "<td>".$employee['Email4']."</td>";
             echo "<td>".$employee['Facebook4']."</td>";
               echo "<td>".$employee['Number4']."</td>";
                 echo "<td>".$employee['College4']."</td>";
                 echo "</tr>";
     }
     ?>
     </tbody>
       </table>
       </div>
       </div>
                    </body>
                    </html>