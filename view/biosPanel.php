<?php include('partials/header.php'); ?>

<div class="container-fluid">
      <div class="row">
        <?php require_once('partials/dashboardPanel.php'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Bioscopen Dashboard</h1>
          </div>
            <button type="button" class="btn btn-primary btn-lg"><a class="nav-link" href="/Gameplayparty/adminController/addBios">Bioscoop toevoegen</a></button>
            <button type="button" class="btn btn-primary btn-lg"><a class="nav-link" href="#">Bioscoop aanpassen</a></button>
            <button type="button" class="btn btn-primary btn-lg"><a class="nav-link" href="#">Bioscoop verwijderen</a></button>
        </main>
      </div>
    </div>
<?php include('partials/footer.php'); ?>