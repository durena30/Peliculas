<div class="modal" id="Login">
  <form method="POST" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login into PopCorn</h5>
        <button type="button" class="btn-close" id="closemodal1" aria-label="Close">
          <!-- <span aria-hidden="true"></span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid text-center"><?php if(isset($errormsg)){echo $errormsg;} ?></div>
        <div class="form-group">
          <div class="form-floating mb-3">
            <input type="email" name="log_user" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" name="log_pass" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="summit" name="login" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" id="closemodal2">Close</button>
      </div>
    </div>
  </form>
</div>

<!-- //Modal Singup -->
<div class="modal" id="Register">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Register into Popcorn movies and series</h5>
        <button type="button" class="btn-close" id="closemodalr1" aria-label="Close">
        </button>
      </div>
      <form method="POST" class="modal-body">
        <div class="container-fluid text-center"><?php if(isset($errormsgreg)){echo $errormsgreg;} ?></div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <div class="form-floating mb-3">
                <input type="email" name="reg_email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" name="reg_email2" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Confirm your Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="reg_pass" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="reg_pass2" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Confirm your Password</label>
              </div>
            </div>

          </div>
          <div class="col">
            <div class="form-group">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Name">
                <label for="floatingInput">Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                <label for="floatingInput">Last Name</label>
              </div>
              <!-- <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingPassword" placeholder="Celphone">
                <label for="floatingPassword">Celphone</label>
              </div> -->
              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingPassword" placeholder="Age">
                <label for="floatingPassword">Age</label>
              </div>
            </div>
           
          </div>

        </div>
        <div class="modal-footer">
              <button type="summit" name="register" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" id="closemodalr2">Close</button>
            </div>
      </form>
    </div>
  </div>
</div>