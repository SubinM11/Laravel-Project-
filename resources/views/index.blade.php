<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
      h1{
        text-align: center;
        font-weight: 600;
        background-color: aquamarine;
        display: block;
      }
      body{
        background-color:lightblue;
      }
      .but{
        text-align: right;
        padding: 10px;
      }
    </style>
</head>

<body>
  <h1>CRUD Project</h1>
@if(session()->has('sucess'))
<div style="background-color: green;
color:aliceblue">
{{session('sucess')}}
</div>
@endif
 <div class="but" > <button ><a href="{{url('create')}}">Add</a></button></div>
<table class="table mt-4">

  <thead>
    <tr>
     <th scope="col">Sl.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Action</th>
    </tr>
 </thead>
 <tbody>
  
 @foreach($store as $student)
    <tr>
    <td>{{$student->id}}</td>  
    <td>{{$student->name}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->mobile}}</td>
    <td>
  <button class="btn btn-primary btn-sm my-2" ><a class="text-light" href="{{url('edit')}}/{{$student->id}}">Edit</a></button>
  <button class ="btn btn-danger btn-sm" ><a class="text-light"  href="{{url('delete')}}/{{$student->id}}">Delete</a></button>
</td>
    
    </tr>
    @endforeach
 
    
 
 </tbody>
    </table>
     
 </div> 
        

   
</body>
</html>