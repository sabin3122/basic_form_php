<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/customer')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/customer/view')}}">Customers</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<form action="{{url("/")}}/customer" method="post">
      @csrf
      <div class="container">
          <h1 class="text-center">Registration</h1>
            
          <div class="form-group">
            <label for="Name">Full Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('name')}}">
            <span class="text-danger">
              @error('name')
                {{$message}}
              @enderror
            </span>
          </div>

          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('email')}}">
            <span class="text-danger">
              @error('email')
                {{$message}}
              @enderror
            </span>
          </div>

          <div class="form-group">
            <label for="">password</label>
            <input type="Password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId" value="">
            <span class="text-danger">
              @error('password')
                {{$message}}
              @enderror
            </span>
          </div>

          <div class="form-group">
            <label for="">confirm password</label>
            <input type="Password" name="password_confirmation" id="" class="form-control" placeholder="" aria-describedby="helpId" value="">
            <span class="text-danger">
              @error('password_confirmation')
                {{$message}}
              @enderror
            </span>
          </div>

          <div class="form-group">
            <label for="">State</label>
            <input type="text" name="state" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('state')}}">
            <span class="text-danger">
              @error('state')
                {{$message}}
              @enderror
            </span>
          </div>

          <div class="form-group">
            <label for="">City</label>
            <input type="text" name="city" id="" class="form-control" placeholder="enter your city" aria-describedby="helpId" value="{{old('city')}}">
            <span class="text-danger">
              @error('city')
                {{$message}}
              @enderror
            </span>
          </div>

          <div class="form-group">
            <label for="">Gender</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value='m'>
              <label class="form-check-label" for="flexRadioDefault2">
                Male
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value='f'>
              <label class="form-check-label" for="flexRadioDefault2">
                Female
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value='o'>
              <label class="form-check-label" for="flexRadioDefault2">
                Other
              </label>
            </div> 
            <span class="text-danger">
              @error('gender')
                {{$message}}
              @enderror
            </span>        
          </div>

          <div class="form-group">
            <label for="">Date of birth</label>
            <input type="date" name="dob" id="" class="form-control" placeholder="enter your city" aria-describedby="helpId" value='{{old('dob')}}'>
            <span class="text-danger">
              @error('dob')
                {{$message}}
              @enderror
            </span>
          </div>

          <button class="btn btn-primary btn-center"> 
            Submit

          </button>
      </div>
  </form>

</body>
</html>