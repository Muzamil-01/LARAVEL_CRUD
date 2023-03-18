<!doctype html>
<html lang="en">

<head>
  <title>CRUD_LARAVEL</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<style>
    .bubble::after {
    content: '';
    border-top-left-radius: 80% 100%;
    border-top-right-radius: 80% 100%;
    position: absolute;
    bottom: 0;
    z-index: -1;
    width: 100%;
    background-color:rgb(230, 165, 0);
    height: 90%;
}
</style>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar- bg-" style="background-color: rgb(255, 255, 255)" >
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">

            <ul class="navbar-nav m-auto mt-2 mt-lg-0 p-3">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('/Add_employee')}}" aria-current="page" style="font-size:19px;color: rgb(230, 165, 0)">ADD <span class="visually-hidden"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="font-size:19px;color: goldenrod"></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:19px;color: goldenrod">VIEW</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                {{-- <a class="dropdown-item" href="#">Action 1</a>
                <a class="dropdown-item" href="#">Action 2</a> --}}
              </div>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>
  <main class="bubble">
    <div class="container mt-5">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-8">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Father-name</th>
                <th>City</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            @foreach ($employees as $employee)
                
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td> {{$employee->fname}} </td>
                <td> {{$employee->city}} </td>
                <td> {{$employee->image}} </td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>