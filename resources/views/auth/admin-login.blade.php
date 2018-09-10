<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pipi Admin Login! | </title>

    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('adminLoginSubmit') }}">
                                    @csrf
              <h1>Admin Login</h1>
              <div>
                <input type="email" name="email" class="form-control" placeholder="მეილი" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="პაროლი" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" >შესვლა</button>
                <a class="reset_pass" href="{{ url('admin/password/reset') }}">დაგავიწყდა პაროლი?</a>
              </div>

              <div class="clearfix"></div>
              <div class="separator">           

                <div>
                  <a href="http://artweb.ge/"><h1 style="cursor: pointer;"><img src="http://artweb.ge/img/logo.png" width="70"></h1></a>
                  <a href="http://artweb.ge/"><p style="cursor: pointer;">©2018 საიტი დამზადებულია ვებ-სტუდია ArtWeb-ის მიერ, ყველა უფლება დაცულია</p></a>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>