<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/public">

    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include("admin.navigation")

    <div style="position: relative; top: 60px; right: -150px;">

        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Title</label>
                <input style="color: #221199" type="text" name="title" value="{{$data->title}}" required>
            </div>

            <div>
                <label>Price</label>
                <input style="color: #221199" type="num" name="price" value="{{$data->price}}" required>
            </div>

            <div>
                <label>Description</label>
                <input style="color: #221199" type="text" name="description" value="{{$data->description}}" required>
            </div>

            <div>

                <label>old Image</label>
                <img height="100" width="100" src="/foodimage/{{$data->image}}">

            </div>

            <div>
                <label> New Image</label>
                <input type="file" name="image" required>
            </div>

            <div>
                <input style="color: #000000" type="submit" value="Save">
            </div>
        </form>


        <div>

</div>
@include("admin.adminscripts")
</body>
</html>
