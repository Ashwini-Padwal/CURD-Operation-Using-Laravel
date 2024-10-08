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

<div class="container col-sm-6 mt-3">
  <h2>User form</h2>
  <form action="/update-user/{{$users->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
  <div class="mb-3 mt-3">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" value="{{$users->name}}" placeholder="Enter Name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="{{$users->email}}" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" value="{{$users->password}}" placeholder="Enter password" name="password">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>
