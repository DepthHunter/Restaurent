<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/public">

    @include('admin.admincss')
</head>
<body>
<div class="container-scroller">
    @include('admin.navbar')

    <form action="{{url('/updatefoodchef',$data->id)}}"  method="post"  enctype="multipart/form-data" >

        @csrf
        <div>
            <label>Name</label>
            <input style="color: black" type="text" name="name" value="{{$data->name}}">

        </div>

        <div>
            <label>Speciality</label>
            <input style="color: black" type="text" name="speciality" value="{{$data->speciality}}">

        </div>

        <div>
            <label>Old Image</label>
            <img width="200" height="200" src="{{$data->image}}">

        </div>

        <div>
            <label>New Image</label>
            <input type="file" name="image">

        </div>

        <div>

            <input style="color: red" type="submit" value="Update" required="">

        </div>


    </form>

</div>

@include('admin.adminscript')


</body>
</html>
