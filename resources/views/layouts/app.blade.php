<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">

  <title>
    @yield('title')
  </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">Todos App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/todos">Todos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/new-todos">Create Todos <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container">


    @if(session()->has('success'))
    <div class="alert alert-success center-block my-1" style="width: 30%;" role="alert">
      {{ session()->get('success') }}
    </div>
    @endif
    @yield('content')





  </div>
</body>

</html>