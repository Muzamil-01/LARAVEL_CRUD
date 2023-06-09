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
    border-top-left-radius: 50% 100%;
    border-top-right-radius: 50% 100%;
    position: absolute;
    bottom: 0;
    z-index: -1;
    width: 100%;
    background-color:rgb(230, 165, 0);
    height: 85%;
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
              <a class="nav-link active" href="#" aria-current="page" style="font-size:19px;color: rgb(230, 165, 0)">ADD <span class="visually-hidden"></span></a>
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
        <form action="{{url('/add')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-5">
                <h2 class="text-dark">ADDING EMPLOYEES</h2>
                <div class="input-group">
                    <label for="#" class="input-group-text" style="background-color: rgb(230, 165, 0);color:white ;border-color: rgb(230, 0, 0);width:100px">Name.</label>
                    <input type="text" name="name" id="" class="form-control" value="{{old('name')}}">
                    <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="input-group mt-3">
                    <label for="#" class="input-group-text" style="background-color: rgb(230, 165, 0);color:white ;border-color:rgb(230, 0, 0) ;width:100px">Fname</label>
                    <input type="text" name="fathername" id="" class="form-control" value="{{old('fname')}}">
                    <span class="text-danger">
                        @error('fname')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="input-group mt-3">
                    <label for="#" class="input-group-text" style="background-color: rgb(230, 165, 0);color:white ;border-color:rgb(230, 0, 0) ;width:100px">City</label>
                   <select name="city" id="" class="form-control form-select">
                    <option  selected></option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Hyderabad">Karachi</option>
                   </select>
                   @error('city')
                   {{$message}}
                   @enderror
                </div>
                <div class="input-group mt-3">
                    <label for="#" class="input-group-text" style="background-color: rgb(230, 165, 0);color:white ;border-color:rgb(230, 0, 0) ;width:100px">Employee</label>
                    <input type="file" name="image" id="" class="form-control">
                    @error('image')
                    {{$message}}
                    @enderror
                </div>                    
                    <input type="submit" value="ADD-EMPLOYEE" class="btn btn-dark w-50 mt-3">
                </div>
            </div>
        </form>
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