<!DOCTYPE html>
<html>
<head>
  <title>Backend</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet">
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
            <a class="brand" href="/">Book Store</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                  <li class="divider-vertical"></li>
                  <li><a href="/"><i class="icon-home icon-white"></i> Frontend</a></li>
                  <li><a href="/backend/book"><i class="icon-book icon-white"></i> Book List</a></li>
                  <li><a href="/backend/order"><i class="icon-user icon-white"></i> Order List</a></li>
                  <li><a href="/backend/inventory"><i class="icon-th-list icon-white"></i> Inventory</a></li>
                  <li><a href="/backend/account"><i class="icon-user icon-white"></i> Account</a></li>
                  <li><a href="/logout"><i class="icon-off icon-white"></i> Logout</a></li>
              </ul>
            </div>
        </div>
    </div>
</div>

@yield('content')

  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
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
</body>
</html>