<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,500;1,700&display=swap" rel="stylesheet">
    
    @include("admin.admincss");
</head>
<body>
<div class="container-scroller">
@include("admin.navigation")
    <div style="position: relative; top: 60px; right: -150px;">

        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Title</label>
                <input style="color: #221199" type="text" class="form-control" name="title" placeholder="Write a Title" required>
            </div>

            <div>
                <label>Price</label>
                <input style="color: #221199" type="num" name="price" class="form-control" placeholder="price" required>
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <div>
                <label>Description</label>
                <input style="color: #221199" type="text" class="form-control" name="description" placeholder="Description" required>
            </div>
<br>
       <div class="col-12">
    <button class="btn btn-primary" type="submit" name="save">Submit</button>
  </div>
    </form>
        <br>
<div>





        </form>


        <div>

            <table style="color: #221199; background-color: #0a0a0a">
                <tr>
                    <th style="padding: 30px;">Food Name</th>
                    <th style="padding: 30px;">Price</th>
                    <th style="padding: 30px;">Description</th>
                    <th style="padding: 30px;">Image</th>
                    <th style="padding: 30px;">Action</th>
                    <th style="padding: 30px;">Action2</th>
                </tr>

                @foreach($data as $data)

                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="100" width="200" src="/foodimage/{{$data->image}}"></td>

                    <td><a href="{{url('deletemenu', $data->id)}}"> Delete </a></td>

                    <td><a href="{{url('updateview', $data->id)}}"> Update </a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>




</div>
@include("admin.adminscripts")
</body>
</html>
