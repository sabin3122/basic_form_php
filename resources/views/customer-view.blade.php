<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-body-tertiary" data-bs-theme='dark'>
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
    
    <a name="add" id="" class="btn btn-primary" style='--bs-btn-padding-x: .5rem;' href="{{route('customer.create')}}" role="button">Add</a>
    <div class="container">
       <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>State</th>
                <th>City</th>
                <th>Gender</th>
                <th>Dob</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cust as $customer)
            
            <tr>
                <td >{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->state}}</td>
                <td>{{$customer->city}}</td>
                <td>
                    @if($customer->gender=='m')
                    Male
                    @elseif($customer->gender=='f')
                    Female
                    @else
                    Other
                    @endif
                </td>
                <td>{{$customer->dob}}</td>
                <td>
                  <a href="{{route('customer.delete',['id'=>$customer->customer_id])}}">
                  <button type="button" class="btn btn-danger">Delete</button>
                  </a>
                  <a href="{{route("customer.edit,['id']")}}"><button type="button" class="btn btn-primary">Edit</button></a>
              </td>
            </tr>
            @endforeach
        </tbody>
       </table>
    </div>
</body>
</html>