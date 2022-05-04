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
                <a class="navbar-brand" href="#" style="color: white">
                    @if (session()->has('user_name'))
                    {{ session()->get('user_name') }}
                        
                    @else
                        Guest
                    @endif
                    
                    {{ session()->get('user_name') }}
                </a>
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

    <div class="container">
        <a href="{{route('customer.create')}}">
        <button class="btn btn-primary d-inline-block m-2 float-right" >Add</button>
    </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Dob</th>
                    <th>state</th>
                    <th>country</th>
                    <th>Address</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $cm)
                    <tr>
                        <td>{{ $cm->name }}</td>
                        <td>{{ $cm->email }}</td>
                        <td>
                            @if ($cm->gender == 'M')
                                Male

                                @elseif($cm->gender == 'F')
                                Female
                                @else
                                Other
                                
                            @endif
                        </td>
                        {{-- <td>{{ get_formatted_date($cm->dob,"d-M-Y")}}</td> --}}
                        <td>{{ $cm->dob }}</td>
                        <td>{{ $cm->state }}</td>
                        <td>{{ $cm->country }}</td>
                        <td>{{ $cm->adsress }}</td>
                        <td>
                            @if ($cm->status == '1')
                           <a href=""> <span class="badge badge-success">Active</span></a>  
                               
                            @else
                            <a href=""> <span class="badge badge-danger">InActive</span> </a>

                            @endif
                        </td>
                        <td>
                            {{-- <a href="{{url('customer/delete/')}}/{{$cm->customers_id}}"> --}}
                            <a href="{{route('customer.delete',['id' => $cm->customers_id])}}">
                            <button class="btn btn-danger">Delete</button>
                        </a>

                        <a href="{{route('customer.edit',['id'=> $cm->customers_id])}}"><button class="btn btn-primary">Edit</button></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>
