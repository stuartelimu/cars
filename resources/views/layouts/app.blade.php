<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cars</title>

    <!-- styles for this template -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- fontawesome5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">
      <header class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="/">Cars <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cars/create">Create</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">Cars</h3>
      </header>

      <main role="main">
        @include('includes.messages')
        @yield('content')

      </main>

      <footer class="footer">
        <p>&copy; Company <script>document.write(new Date().getFullYear());</script></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
