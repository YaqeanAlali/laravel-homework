<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DashBoard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary"> --}}
      <nav class="navbar navbar-dark bg-dark">
       
      
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          {{-- //me-auto mb-2 mb-lg-0 --}}
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0 "> 
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.cats.index') }}">Categoty</a>
              </li>
            </ul>
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0 "> 
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.trainers.index') }}">Trainers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.courses.index') }}">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.students.index') }}">Students</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('admin.logout') }}">logout</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>