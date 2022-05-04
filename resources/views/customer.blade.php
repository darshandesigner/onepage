<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
      

    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <a class="navbar-brand" href="#" style="color: white">OhhoWeb</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}" style="color: white" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/customer/create')}}" style="color: white" >Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/customer')}}" style="color: white">Customer</a>
                        </li>
                       
                    </ul>
                   
                </div>
            </nav>
        </div>
    </div>
    <form action="{{ $url }}" method="POST">
    {{-- <form action="{{ url('/') }}/customer" method="POST"> --}}

        @csrf
        <pre>
        @php
            
            print_r($errors->all());
        @endphp
      </pre>
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">
                {{$title}}
            </h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="" value="{{$customer->name}}">
                    <span class="text-danger"></span>

                </div>

                <div class="form-group col-md-6 required">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="" value="{{$customer->email}}">
                    <span class="text-danger"></span>

                </div>

                <div class="form-group col-md-6 required">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="" value="{{$customer->password}}">
                    <span class="text-danger"></span>

                </div>

                <div class="form-group col-md-6 required">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" id="" value="">
                    <span class="text-danger"></span>

                </div>

                <div class="form-group col-md-6 required">
                    <label for="country">Country</label>
                    <input type="text" name="country" class="form-control" id="" value="{{$customer->country}}">
                    <span class="text-danger"></span>

                </div>

                <div class="form-group col-md-6 required">
                    <label for="state">State</label>
                    <input type="text" name="state" class="form-control" id="" value="{{$customer->state}}">
                    <span class="text-danger"></span>

                </div>

                <div class="form-group col-md-12 required">
                    <label for="state">Address</label>
                    <textarea name="address" class="form-control" id="" cols="30" rows="10">{{$customer->adsress}}</textarea>
                    <span class="text-danger"></span>

                </div>

                <div class="form-group col-md-6 required">
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" value="M" id="" {{$customer->gender == "M" ? "checked" : ""}}>
                    
                    <label for="">Male</label>
                    <input type="radio" name="gender" value="F" id="" {{$customer->gender == "F" ? "checked" : ""}}>
                    <label for="">Fmale</label>
                    <input type="radio" name="gender" value="O" id="" {{$customer->gender == "O" ? "checked" : ""}}>
                    <label for="">Other</label>
                    <span class="text-danger"></span>

                </div>

                <div class="form-group col-md-6 required">
                    <label for="date">Date Of Birth</label>
                    <input type="date" name="dob" class="form-control" id="" value="{{$customer->dob}}">
                    <span class="text-danger"></span>

                </div>
            </div>

            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>
