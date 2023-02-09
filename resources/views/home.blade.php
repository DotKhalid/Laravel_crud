@extends("layout.master")


@section('content')

<div class="container">
  <h2>Student Record</h2>

  <button class="btn btn-primary" >Insert</button>
            
  <br>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>
          <button class="btn btn-primary btn-sm">EDIT</button>
          <button class="btn btn-danger btn-sm">DELETE</button>

          
        </td>
      </tr>
      
    </tbody>
  </table>
</div>


</div>




@endsection