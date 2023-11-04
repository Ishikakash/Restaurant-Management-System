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
    <div style="margin: 20px;">
    <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data" style="border: 1px solid #ccc; padding: 20px; max-width: 400px; margin: 0 auto;">
    @csrf
        <div style="margin-bottom: 10px;">
            <label for="" style="display: block; font-weight: bold;">Food name</label>
            <input type="text" name="title" value="{{$data->title}}"  style="width: 100%; padding: 5px; color: black;">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="" style="display: block; font-weight: bold;">Price</label>
            <input type="number" name="price" value="{{$data->price}}"  style="width: 100%; padding: 5px;  color: black;">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="" style="display: block; font-weight: bold;">Description</label>
            <input type="text" name="description" value="{{$data->description}}"  style="width: 100%; padding: 5px;  color: black;">
        </div>

        <div style="margin-bottom: 10px;">
            <label for="" style="display: block; font-weight: bold;">Old Image</label>
            <img src="/foodimage/{{$data->image}}" style="width: 100%; padding: 5px;">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="" style="display: block; font-weight: bold;">Update Image</label>
            <input type="file" name="image" style="width: 100%; padding: 5px;">
        </div>
        <div style="margin-bottom: 10px;">
        <input type="submit" value="Submit" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
        </div>
    </form>
    <div>
    </div>
    @include("admin.adminscript")
  </body>
</html>
