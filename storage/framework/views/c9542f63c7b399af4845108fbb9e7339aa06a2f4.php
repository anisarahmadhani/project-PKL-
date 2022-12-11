<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body class="bg-primary bg-opacity-25">
    <section>
      <div
        class="d-flex flex-column min-vh-100 justify-content-center"
      >
        <div class="container">
          <div class="row" >
<div class="col-sm-12 col-md-10 mx-auto bg-white rounded shadow">
              <div class="row">
                <div class="col-md-6">
                  <div class="m-5 text-center"><h1>Welcome!</h1></div>

                  <form action="/login" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-2">
                      <label class="form-label" for="username">Username</label>
                      <input class="form-control" type="text" id="username" name="email"/>
                    </div>
                    <div class="mb-2">
                      <label class="form-label" for="password">Password</label>
                      <input
                        class="form-control"
                        type="password"
                        id="password" name="password"
                      />
                    </div>

                    <div class="">
                      <input
                        type="submit"
                        class="form-control btn btn-primary mt-3 mb-5"
                      />
                    </div>
                  </form>
                </div>
                <div class="col-md-6">
                  <div>
                    <img
                      src="/img/login.png"
                      alt="login"
                      class="img-fluid p-5"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
<?php /**PATH D:\Laragon\laragon\www\ProjectAnisa\resources\views/login.blade.php ENDPATH**/ ?>