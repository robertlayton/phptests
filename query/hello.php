<?php
  $name = "Tell me your name....";
  if (in_array("name", $_GET)){
      $name = $_GET['name'];
  }
?>

<html>
<head>
    <title>Hello, <?php $_GET['name'] ?></title>
</head>


<body>
    <h1>Hello, <?php $_GET['name'] ?></h1>
    <p>
    <?php
        if (in_array("birthday", $_GET)){
            $bday = date_parse($_GET['birthday']);
            $today = new DateTime('00:00:00');
            
            $diff = $today->diff($bday);
            print("You told me your birthday! You are:");
            printf('%d years, %d month, %d days old!', $diff->y, $diff->m, $diff->d);
        }else{
            print("If you tell me your <i>birthday</i> I'll tell you your age. Birthday needs to be in YYYYMMDD format, like this: 19901231.");
        }
    ?>
    </p>
</body>
</html>
