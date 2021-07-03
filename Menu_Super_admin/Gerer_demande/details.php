<?php
  include 'action.php';
?>

  <meta charset="UTF-8">
  <meta site="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta site="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>demande App</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-3 bg-info p-4 rounded">
        <h2 class="bg-light p-2 rounded text-center text-dark">ID : <?= $vid; ?></h2>
        <div class="text-center">
          <img src="<?= $vphoto; ?>" width="300" class="img-thumbnail">
        </div>
        <h4 class="text-light">site : <?= $vsite; ?></h4>
        <h4 class="text-light">Nom : <?= $vNom; ?></h4>
        <h4 class="text-light">reception : <?= $vreception; ?></h4>
      </div>
    </div>
  </div>
</body>

</html>