<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  
  <form class="inline-form" style="display:inline-flex" method='post' action='search-user'>
    @csrf
    
  <input class="form-control" type="search" name='search' placeholder="Search by name"><br>
  <button class="btn btn-primary">Search</button>
  
</form>

  <h2>User List</h2>
<a href="user" class="btn btn-primary">Add user</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php $i = 1; @endphp
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      <td><a class="btn btn-small btn-primary" href="edit-user/{{$user->id}}">Edit</a>
      <a class="btn btn-small btn-danger" href="delete-user/{{$user->id}}">Delete</a>
    </td>
    </tr>
    @php $i++;@endphp
    @endforeach
  </tbody>
</table>
{{$users->links()}}
</div>
<style>
  .w-5{
    width: 20px;
  }
</style>
</body>
</html>