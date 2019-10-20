
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://v4-alpha.getbootstrap.com/favicon.ico">

    <title>CRYSTEL ICT Glossary</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://v4-alpha.getbootstrap.com/examples/cover/cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h4 class="masthead-brand">CRYSTEL <b>ICT GLOSSARY</b></h4>
              <nav class="nav nav-masthead">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/api">API</a>
                <a class="nav-link active" href="/form">Submit</a>
                <a class="nav-link" href="/docs">Documentation</a>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h4 class="cover-heading">WORDS SUBMISSION</h4>
            <hr>
            @guest
            <h1 class="cover-heading">NEED AUTH!</h1>
            <hr>
            <p class="lead">This part is only for authrized persons</p>
            <hr>
            <p class="lead">
              <a href="{{ route('register') }}" class="btn btn-lg btn-secondary">LOGIN</a>
            </p>
            @else
            <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
            <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: white}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
            <div class="bootstrap-iso" style="background-color: transparent">
                <div class="container-fluid">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12" >
                            <form method="post" action="{{url('submit')}}">
                                {{ csrf_field() }}
                                <div class="form-group ">
                                    <label class="control-label requiredField" for="english">
                                    English
                                        <span class="asteriskField">
                                            *
                                        </span>
                                    </label>
                                    <input class="form-control" id="english" name="english" placeholder="English Word" type="text"/>
                                    <span class="help-block" id="hint_english">
                                        Word in English
                                    </span>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label requiredField" for="sinhala">
                                        Sinhala
                                        <span class="asteriskField">
                                            *
                                        </span>
                                    </label>
                                    <input class="form-control" id="sinhala" name="sinhala" placeholder="Sinhala Word" type="text"/>
                                    <span class="help-block" id="hint_sinhala">
                                        Word in Sinhala - Use Unicode
                                    </span>
                                </div>
                                <!--<div class="form-group ">-->
                                <!--    <label class="control-label requiredField" for="kw">-->
                                <!--        Keyword-->
                                <!--        <span class="asteriskField">-->
                                <!--            *-->
                                <!--        </span>-->
                                <!--    </label>-->
                                <!--    <input class="form-control" id="kw" name="kw" placeholder="kw Word" type="text"/>-->
                                <!--    <span class="help-block" id="hint_kw">-->
                                <!--        Search Keyword for the word-->
                                <!--    </span>-->
                                <!--</div>-->
                                <!--<div class="form-group ">-->
                                <!--    <label class="control-label requiredField" for="desc_s">-->
                                <!--        Description Sinhala-->
                                <!--        <span class="asteriskField">-->
                                <!--            *-->
                                <!--        </span>-->
                                <!--    </label>-->
                                <!--    <textarea class="form-control" cols="20" id="desc_s" name="desc_s" placeholder="Whats dat? Use Unicode" rows="3"></textarea>-->
                                <!--    <span class="help-block" id="hint_desc">-->
                                <!--        Small Description about the Word in Sinhala-->
                                <!--    </span>-->
                                <!--</div>-->
                                <!--<div class="form-group ">-->
                                <!--    <label class="control-label requiredField" for="desc">-->
                                <!--        Description English-->
                                <!--        <span class="asteriskField">-->
                                <!--            *-->
                                <!--        </span>-->
                                <!--    </label>-->
                                <!--    <textarea class="form-control" cols="20" id="desc_e" name="desc_e" placeholder="Whats dat?" rows="3"></textarea>-->
                                <!--    <span class="help-block" id="hint_desc_e">-->
                                <!--        Small Description about the Word in English-->
                                <!--    </span>-->
                                <!--</div>-->
                                <div class="form-group">
                                    <div>
                                        <button class="btn btn-primary btn-lg " name="submit" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endguest
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Made by <a href="https://dev.mickfrost.xyz">Winter Devs</a> at <a href="https://mickfrost.xyz">Mickfrost</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://v4-alpha.getbootstrap.com/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
