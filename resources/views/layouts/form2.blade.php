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
      
    <form action="{{url('/')}}/register" method="POST">
  
      @csrf
      <pre>
        @php
            
            print_r($errors->all());
        @endphp
      </pre>
    <div class="container">
        <h1 class="text-center">Registration</h1>
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" id="" class="form-control" placeholder="" value="{{old('name')}}" aria-describedby="nameid">
          <small id="nameid" class="text-muted text-danger">
            @error('name')
            {{$message}}
              
          @enderror
        </small>
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control" placeholder="" value="{{old('email')}}" aria-describedby="emailid">
            <small id="emailid" class="text-muted text-danger">  @error('email')
              {{$message}}
                
            @enderror</small>
          </div>

          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="passwordid">
            <small id="passwordid" class="text-muted text-danger">  @error('password')
              {{$message}}
                
            @enderror</small>
          </div>

          <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" name="password_confirmation" id="" class="form-control" placeholder=""  aria-describedby="password_confirmation">
            <small id="password_confirmation" class="text-muted text-danger">  @error('password_confirmation')
              {{$message}}
                
            @enderror</small>
          </div>

        <button class="btn btn-primary">Submit</button>
    </div>
</form>
  </body>
</html>