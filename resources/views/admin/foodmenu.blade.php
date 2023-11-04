<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
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
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" style="border: 1px solid #ccc; padding: 20px; max-width: 400px; margin: 0 auto;">
    @csrf
        <div style="margin-bottom: 10px;">
            <label for="" style="display: block; font-weight: bold;">Food name</label>
            <input type="text" name="title" placeholder="Enter food name" required style="width: 100%; padding: 5px; color: black;">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="" style="display: block; font-weight: bold;">Price</label>
            <input type="number" name="price" placeholder="Enter price" required style="width: 100%; padding: 5px;  color: black;">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="" style="display: block; font-weight: bold;">Image</label>
            <input type="file" name="image" required style="width: 100%; padding: 5px;">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="" style="display: block; font-weight: bold;">Description</label>
            <input type="text" name="description" placeholder="Description" required style="width: 100%; padding: 5px;  color: black;">
        </div>
        <div style="margin-bottom: 10px;">
        <input type="submit" value="Submit" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">

        </div>
    </form>
    <div>
    <table style="border-collapse: collapse; width: 100%;">
        <tr>
            <th style="padding: 20px; border: 1px solid #000;">Food Name</th>
            <th style="padding: 20px; border: 1px solid #000;">Price</th>
            <th style="padding: 20px; border: 1px solid #000;">Description</th>
            <th style="padding: 20px; border: 1px solid #000;">Image</th>
            <th style="padding: 20px; border: 1px solid #000;">Delete</th>
            <th style="padding: 20px; border: 1px solid #000;">Update</th>
        </tr>

        @foreach($data as $data)
        <tr align="center">
            <td style="padding: 10px; border: 1px solid #000;">{{$data->title}}</td>
            <td style="padding: 10px; border: 1px solid #000;">{{$data->price}}</td>
            <td style="padding: 10px; border: 1px solid #000;">{{$data->description}}</td>
            <td style="padding: 10px; border: 1px solid #000;"><img src="/foodimage/{{$data->image}}" style="max-width: 100px; max-height: 100px;"></td>
            <td style="padding: 10px; border: 1px solid #000;"><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
            <td style="padding: 10px; border: 1px solid #000;"><a href="{{url('/updateview', $data->id)}}">Update</a></td>
        </tr>
        @endforeach
    </table>
</div>

</div>

    </div>
    @include("admin.adminscript")
  </body>
</html>
