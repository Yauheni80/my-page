<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <title>PHP Practice</title>
</head>

<body>
  <div class="flex-container">

    <div class="header">
      <?php include 'logo.inc.php' ?>
      <?php include 'menu.inc.php' ?>
    </div>

    <div class="about_me">  
      <h1> <?php echo $z ?> </h1>

      <div class="data">

        <div class="myImg">
          <?php
          echo ' <img src="/img/2.png">';
          ?>
        </div>

        <div class="fullname"> 
          <p> My name is
            <?php
            echo $name, ' ', $surname . '<br>';
            echo 'city: ', ' ' , $city; ?>
          </p>

          <p> I am
            <?php echo $age;  ?>
            years old
          </p>
          <p> We learned how to crate variables </p>
          <p> We learned basic operations with them </p>
          <p><?php echo $kkk;  ?><p>
        </div>
      </div>

      <div class="knowledge">
        <?php include 'knowledge.inc.php' ?>
        <?php
        echo $a, ' ', $b,  ' ', $c; ?> <br>

        <?php
        $a = 10;
        $b = 20;
        echo 'The sum of ', $a , ' ', 'and ', $b, " is ";
        $c = $a + $b;
        echo $c;
        ?> <br>

        <?php echo $d , $price, $w; ?>
      </div>
    </div>
    <?php include 'footer.inc.php' ?>
  </div>
</body>
</html>