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
      .invalid{
        color:red;
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
                <form action="#" id="login-form">
                  <div class="form-group form_group_login">
                    <input class="form-control fs_12" type="text" name="email" id="username"  placeholder="Email">
                  </div>
                  <div class="form-group form_group_login">
                    <input class="form-control fs_12" type="password" name="password"  id="password" placeholder="Password">
                  </div>
                  <div class="form-group form_group_login">
                    <!-- <div class="custom-control custom-checkbox checkbox-primary">
                      <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                      <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                    </div> -->
                    
                  </div>
                  <div class="form-group form_group_login account-btn text-center mt-2">
                    <div class="col-12">
                        <button class="btn width-md btn-bordered btn-dark waves-effect waves-light fs_12">Login</button>
                      <!-- <a href="/home" class="btn width-md btn-bordered btn-dark waves-effect waves-light fs_12" type="submit">Log In</a> -->
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
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script>
            (function ($) {
      "use strict";
      $("#login-form").validate({
        rules: {
          email: {
            required: true,
            email:true
          },
          password: {
            required: true,
          }
        },
        messages: {
          email: {
            required: 'Please enter your email address',
            email:'Please enter valid Email address'
          },
          password: {
            required: 'Please enter your password'
          }
        },
        errorPlacement: function (error, element) {
          error.insertAfter(element.parent());
        }
      });
    })(jQuery);
    </script>
  </body>
</html>