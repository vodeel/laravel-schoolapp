<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>shcoolapp</title>
</head>
<body>
<div class="container">

    <h4> Students list</h4>
    @include('alerts')
    <a  class="btn btn-primary mb-3" href="{{Route('view.addnewstudent')}}" role="button">Add New student</a>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">City</th>
      <th scope="col">Status</th>
      <th scope="col">View</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>

        @foreach ($data as $id => $student)
        <tr>
       <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->city}}</td>
        @if ($student->status)
        <td>{{ 'Active' }}</td>

        @else
        <td>{{'Inactive' }}</td>
        @endif
        <td> <a  class="btn btn-primary btn-sm" href="{{Route('view.student',['id'=>$student->id])}}" role="button">View Student</a> </td>
        <td> <a  class="btn btn-danger btn-sm" href="{{Route('delete.student',['id'=>$student->id])}}" role="button">Delete Student</a> </td>
        <td> <a  class="btn btn-warning btn-sm" href="{{Route('delete.student',['id'=>$student->id])}}" role="button">Update Student</a> </td>
    </tr>
        @endforeach



  </tbody>
</table>
<div class="mt-5">
    {{--$data->links('pagination::bootstrap-5')--}}
</div>
    </div>
</body>
</html>
