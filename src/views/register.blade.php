
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>register</title>
</head>
<body>

        <div class="album py-3 ">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="card border-info " style="max-width: 35rem; padding:20px ;">
        <h1 class="text-center">Register!</h1>
    <div class="card-body">
<form action="register" method="POST">
    @csrf
            <div class="form-group  mt-3">
            <label for="title" class="labal-control"><b>TITLE</b></label>
            <input type="text" name="title" class="form-control">
            </div>

             <div class="form-group mt-3">
            <label for="other" class="labal-control"><b>OTHER</b></label>
            <input type="text" name="other" class="form-control">
             </div>

            <div class="form-group mt-3">
            <label for="category" class="labal-control"><b>CATEGORY</b></label>
            <input type="text" name="category" class="form-control">
            </div>



            <div class="form-group mt-3">
                <button type="submit" class="btn btn-info mt-4">submit</button>
                </div>

            </form>


</div>
 </div>
</div>
</div>

</body>
</html>

