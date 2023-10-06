<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card">
    <div class="card-body py-4 px-md-5">
      <form method="POST" action="/terra-php/public/login.php">
        <?php echo $msgLogin; ?>
        <div class="form-outline mb-4">
          <input type="email" id="form2Example1" class="form-control" name="username" />
          <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <div class="form-outline mb-4">
          <input type="password" id="form2Example2" class="form-control" name="password" />
          <label class="form-label" for="form2Example2">Password</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
      </form>
    </div>
  </div>
</div>