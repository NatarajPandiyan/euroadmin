<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Purchase Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <style type="text/css">
      #login{
        padding-bottom: 0px;
      }
    </style>
  </head>
  <body id="login">
    <div class="account-pages">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card">
              <div class="text-center account-logo-box">
                <div class="mt-2 mb-2">
                  <a href="#" class="text-success">
                    <span class="logo_head">
                      Euro ERP
                    </span>
                  </a>
                </div>
              </div>
              <div class="card-body login_card_body">
                <form action="#">
                  <div class="form-group form_group_login">
                    <input class="form-control fs_12" type="text" id="username" required="" placeholder="Username">
                  </div>
                  <div class="form-group form_group_login">
                    <input class="form-control fs_12" type="password" required="" id="password" placeholder="Password">
                  </div>
                  <div class="form-group form_group_login">
                    <!-- <div class="custom-control custom-checkbox checkbox-primary">
                      <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                      <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                    </div> -->
                    
                  </div>
                  <div class="form-group form_group_login account-btn text-center mt-2">
                    <div class="col-12">
                      <a href="/home" class="btn width-md btn-bordered btn-dark waves-effect waves-light fs_12" type="submit">Log In</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('js/vendor.min.js')}}"></script>
  </body>
</html>