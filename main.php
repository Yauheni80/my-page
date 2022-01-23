<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css" />
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
            echo 'City: ', ' ', $city . '<br>';

            echo 'Age: ', $age, ' years old';
            ?>
          </p>
          <div class="myspec">

            <p style="font-size: 23px;font-weight: bold"> Researcher, programer, software developer </p>
            <p> Specialization: </p>
            <p> - Metaheuristics algorithms and discrete-event simulation </p>
            <p> - Mathematical modelling </p>
            <p> - Hydrodynamics </p>
            <p> - Combinatorial optimization </p>
            <p> - Machine learning (ML) and neural networks (NN)</p>

          </div>

        </div>
      </div>

      <div class="knowledge">
        <?php include 'knowledge.inc.php' ?>
        <?php
        echo $a, ' ', $b,  ' ', $c; ?> <br>

        <?php
        $a = 10;
        $b = 20;
        echo 'The sum of ', $a, ' ', 'and ', $b, " is ";
        $c = $a + $b;
        echo $c;
        ?> <br>

        <?php echo $d, $price, $w; ?> <br>

        <?php
        echo 'Residual from division of ', $j, ' and ', $f,  ' is ', $r; ?> <br>

        <?php
        echo 'Type of ', $cc, ' is ';
        echo gettype($cc);
        echo ', while ', $gg, ' is an';
        echo gettype($gg);
        ?> <br>

        <?php
        echo 'Date: ', $currentDate; ?> <br>

        <?php
        echo 'Path to project on server: ', $path; ?> <br>

        <?php
        echo 'OS info: ', $uname; ?> <br>




      </div>
    </div>
    <?php include 'footer.inc.php' ?>
  </div>
</body>

</html>