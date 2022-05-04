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
  <body>
      

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
    <form action="{{url('/')}}/register" method="POST">
  
      @csrf
      <pre>
        @php
            
            print_r($errors->all());
        @endphp
      </pre>
    <div class="container">
        <x-input type="text" name="name" label="Please Enter Your Name" />
        <x-input type="email" name="email" label="Please Enter Your Email" />
        <x-input type="password" name="password" label="Please Enter Your password" />
        <x-input type="password" name="password_confirmation" label="Please Enter Your Confirm Password" />
      
        <button class="btn btn-primary">Submit</button>
    </div>
</form>
  </body>
</html>