


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
    <form method="post" action="{{url('update')}}">
      @csrf
    <input type="hidden" name="id" value="{{$stude->id}}"> 
  <div class="form-group my-3">
    <label > Name</label>
    <input type="text" class="form-control" name="name"  value="{{$stude->name}}">
  </div>

  <div class="form-group my-3 " >
    <label > Email</label>
    <input type="email" class="form-control" name="email" value="{{$stude->email}}" >
  </div>

  <div class="form-group my-3">
    <label > Mobile No</label>
    <input type="text" class="form-control" name="mobile"  value="{{$stude->email}}">
  </div>

  <div class="form-group my-3">
    <label > Password</label>
    <input type="password" class="form-control" name="password" value="{{$stude->password}}">
  </div>

<button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
</body>
</html>