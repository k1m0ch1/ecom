<!DOCTYPE html>
<html>
<head>
  <title>Backend</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet">-->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/summernote.css')}}">
</head>
<body>
<div class="navbar navbar-inverse nav">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="navbar-brand" href="/">Book Store</a>
            <div class="navbar-brand">
              <ul class="nav navbar-nav" style="margin-top:-18px; padding-left:-15px;">
                  <li><a href="/backend/book"><i class="glyphicon glyphicon-book icon-white"></i> Buku</a></li>
                  <li><a href="/backend/order"><i class="glyphicon glyphicon-list icon-white"></i> Order</a></li>
                  <li><a href="/backend/history"><i class="glyphicon glyphicon-list icon-white"></i> History Order</a></li>
                  <li><a href="/backend/inventory"><i class="glyphicon glyphicon-th-list icon-white"></i> Inventory</a></li>
                  <li><a href="/backend/penulis"><i class="glyphicon glyphicon-user icon-white"></i> Penulis</a></li>
                  <li><a href="/backend/penerbit"><i class="glyphicon glyphicon-print icon-white"></i> Penerbit</a></li>
                  <li><a href="/backend/account"><i class="glyphicon glyphicon-random icon-white"></i> Account</a></li>
                  <li><a href="/logout"><i class="glyphicon glyphicon-off icon-white"></i> Logout</a></li>
              </ul>
            </div>
        </div>
    </div>
</div>

@yield('content')

  <script src="http://code.jquery.com/jquery.js"></script>
  <!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(function() {
    $('.dropdown-toggle').dropdown();

    $('.dropdown input, .dropdown label').click(function(e) {
      e.stopPropagation();
    });
  });
  
  @if(isset($error))
    alert("{{$error}}");
  @endif

  @if(Session::has('error'))
    alert("{{Session::get('error')}}");
  @endif

  @if(Session::has('message'))
    alert("{{Session::get('message')}}");
  @endif

  </script>

  <script src="{{asset('asset/js/summernote.min.js')}}"></script>
  @yield('js')
</body>
</html>