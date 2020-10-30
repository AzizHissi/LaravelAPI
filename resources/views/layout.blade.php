<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="{{url('/')}}">Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{url('/medecins')}}">Medecins</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="{{url('/patients')}}">Patients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/patients')}}">RDVs</a>
      </li>
    </ul>
  
  </div>
</nav>
@yield('content')
<script src="{{ asset('js/app.js')  }}"></script>
</body>
</html>