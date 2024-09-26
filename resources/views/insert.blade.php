<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel Crud</title>
  </head>
  <body>
   

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add student data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('/') }}/insert" method="post">
        @csrf
      <div class="modal-body">
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="name" name="email" required>
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="name" name="password" required>
        </div>
        <div class="form-group mb-3">
            <label for="city">City</label>
            <input type="text" class="form-control" id="name" name="city" required>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Data</button>
      </div>
      </form>
    </div>
  </div>
</div>
    
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                @if (session ('status'))
                <div class="alert alert-success">{{session ('status')}}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                  <h2>Student Data
                    <button type="button" class="btn btn-primary float-end"data-bs-toggle="modal" data-bs-target="#exampleModal">Add student</button>
                  </h2>
                    </div>
                    <div class="card-body">
                       <table class="table table-bordered">
                         <thead>
                            <tr>
                            <th >id</th>
                            <th >Name</th>
                            <th >Email</th>
                            <th >City</th>
                            <th >Edit</th>
                            <th >Delete</th>
                            </tr>
                         </thead>
                         <tbody>
                             @foreach ($students as $student)
                             <tr>
                             <th >{{$student->id}}</th>
                             <td>{{$student->name}}</td>
                             <td>{{$student->email}}</td>
                             <td>{{$student->city}}</td>
                             <td>
                                 <a href="{{route('insert.edit',['id' => $student->id])}}"><button class="btn btn-sm btn-primary">Edit</button></a>
</td>
                                 <td>
                                 <a href="{{ url('/insert/delete/') }}/{{ $student->id }}"><button class="btn btn-sm btn-danger">Delete</button> </a>
</td>
                                  </tr>
                                   @endforeach
                                   </tbody>
                       </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>