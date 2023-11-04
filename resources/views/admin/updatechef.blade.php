<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- plugins:css -->
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    <form action="{{url('/updatefoodchef', $data->id)}}" style="max-width: 400px; margin: 0 auto; padding: 20px;" method="post" enctype="multipart/form-data">
    @csrf
    <div style="margin-bottom: 10px;">
        <label for="" style="display: block; font-weight: bold;">Chef name</label>
        <input type="text" name="name" id="" value="{{$data->name}}" style="width: 100%; padding: 5px; color: black;">
    </div>
    <div style="margin-bottom: 10px;">
        <label for="" style="display: block; font-weight: bold;">Speciality</label>
        <input type="text" name="speciality" id="" value="{{$data->speciality}}" style="width: 100%; padding: 5px; color: black;">
    </div>
    <div style="margin-bottom: 10px;">
        <label for="" style="display: block; font-weight: bold;">Old Image</label>
        <img height="200" width="200" src="/chefimage/{{$data->image}" alt="">
    </div>
    <div style="margin-bottom: 10px;">
        <label for="" style="display: block; font-weight: bold;">New Image</label>
        <input type="file" style="width: 100%; padding: 5px;" name="image">
    </div>
    <div>
        <input type="submit" value="Update details" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    </div>
</form>

    </div>
    @include("admin.adminscript")
  </body>
</html>
