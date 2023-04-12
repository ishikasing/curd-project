<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>

</body>
</html>


<div class="album py-5">
    <div class="row justify-content-center">
     <div class="card border-primary" style="max-width: 55rem; padding:20px ;">
      <h1 class="text-center">Form Data</h1>
    <div class="card-body">
<a href="hlo" class="btn btn-primary">ADD new record</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
             <th>OTHER</th>
              <th>CATEGORY</th>

            <th>ACTION</th>
        </tr>
    </thead>
    @if(count($data)>0)
@foreach ($data as $value)
<tr>
      <td>{{$value['id']}}</td>
      <td>{{$value['title']}}</td>
      <td>{{$value['other']}}</td>
      <td>{{$value['category']}}</td>
    <td>
        <a class="btn btn-info " href={{"view/".$value['id']}}>view</a>
        <a class="btn btn-warning " href={{"edit/".$value['id']}}>Update</a>
        <a class="btn btn-danger" href={{"delete/".$value['id']}}>Delete</a>
    </td>
</tr>

@endforeach
@else
<tr>
    <td colspan="3">data not found</td>
</tr>
@endif

</table>



