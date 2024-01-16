<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Export ooredoo</title>
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</head>

<body class=" p-4">
  <form action="csv.php" method="get">
    <?php
    if (isset($_GET["error"]) && $_GET["error"] == "noresult") {;
    ?>
      <div class="row p-1">

        <div class="col-12 col-md-4">
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">�</button>
            <h5><i class="icon fas fa-ban"></i> Attention !</h5>
            Aucun r�sultat trouv� pour cette date !
          </div>
        </div>
      </div>
    <?php
    };
    ?>

    <div class="row p-1">

      <div class="col-12 col-md-4">

        <div class="card">
          <div class="card-header">
            <h4>S�l�ctionnez une date</h4>
          </div>
          <div class="card-body">

            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="date">Du :</label>
                  <input type="date" class="form-control" name="date" value="<?php echo date("Y-m-d"); ?>">
                </div>
              </div> <!-- end col 1 -->
              <div class="col-12">
                <div class="form-group">
                  <label for="date1">Au :</label>
                  <input type="date" class="form-control" name="date1" value="<?php echo date("Y-m-d"); ?>">
                </div>
              </div> <!-- end col 2 -->
            </div> <!-- end row -->


          </div> <!-- end card body -->
          <div class="card-footer"><button type="submit" class="btn btn-primary float-right">T�l�charger</button></div>
        </div>


      </div>



    </div>
  </form>
</body>

</html>