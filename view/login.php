<?php include('partials/header.php'); ?>
<?php echo $result; ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">login</h5>
            <form action="" method="POST" class="form-signin">

              <div class="form-label-group">
              <label for="inputEmail">Email address</label>
                <input type="text" id="username" name="username" required="required" class="form-control" placeholder="Email address" required autofocus>
              </div>

              <div class="form-label-group">
              <label for="inputPassword">Password</label>
                <input type="password" id="password" name="password" required="required" class="form-control" placeholder="Password" required>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include('partials/footer.php'); ?>