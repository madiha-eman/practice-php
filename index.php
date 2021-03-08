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
     

</form>
</div>
</body>
</html>