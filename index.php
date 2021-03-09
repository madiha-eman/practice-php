<?php 
$title = 'PHP';
$heading = 'first one php demo';
$name = array('asma', 'areeba', 'seema', 'tooba');
// $name = $email = " ";
// if($_SERVER["REQUEST_METHOD"] == "POST"){

// }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel='stylesheet' href='style.css'/>
    

</head>
<body>
    <h1><?php echo $heading ?></h1>
    <div class='form'>
    <form method='POST' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
        <input type='text' name='name' placeholder='Username'/><br/><br/>
        <input type='text' name='email' placeholder='Email'/><br/><br/>
        <button type='submit'>send</button><br/><br/>
        <?php 
        // $name = array('asma', 'areeba', 'seema', 'tooba');
        // foreach ($name as $va) {
        //     echo " <li>$va";
        //   }
       
        ?>
        <br/>
        <br/>
<ul>
<?php foreach($name as $value) {?>
<li><?php echo $value. '<br>';?></li>
    <?php } ?>
</ul>
<!-- <?php
date_default_timezone_set("Asia/Seoul");
echo "The time is " . date("h:i:sa");
?>
<?php
echo "The time is " . date("h:i:sa");
?>
<br>
<br>
<?php
$d=strtotime("next-day");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?> -->
<!-- <?php 
$mon = strtotime("Feb 2020");
$mon2 = date("m-y");
$end = $mon - $mon2;
echo $end
?> -->
<!-- <?php
$startdate = strtotime("Feb 17 2020");
$enddate = strtotime("+month", $startdate);

  echo date("M");


?> -->
<?php
$d1=strtotime("feb 17 2020");
$d2=round(($d1-time())/60/60/24);
$end = $d2   * 12 / 365 ;
$end2 = round(-$end);
echo $end2
?>
<br>
<br>
<?php 

?>
</form>
</div>
</body>
</html>