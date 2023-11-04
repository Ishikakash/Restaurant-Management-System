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
    <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data" style="max-width: 400px; margin: 0 auto; padding: 20px; ">
    @csrf
    <div style="margin-bottom: 10px;">
        <label for="" style="display: block; font-weight: bold;">Name</label>
        <input type="text" required placeholder="Enter the name" name="name" style="width: 100%; padding: 5px; color: black;">
    </div>
    <div style="margin-bottom: 10px;">
        <label for="" style="display: block; font-weight: bold;">Speciality</label>
        <input type="text" required placeholder="Enter speciality" name="speciality" style="width: 100%; padding: 5px; color: black;">
    </div>
    <div style="margin-bottom: 10px;">
    <label for="" style="display: block; font-weight: bold;">Image</label>
        <input type="file" required name="image" style="width: 100%; padding: 5px;">
    </div>
    <div>
        <input type="submit" value="Save" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    </div>
</form>

<table style="border-collapse: collapse; width: 100%;">
    <tr>
        <th style="padding: 10px; background-color: #007bff; color: #fff;">Name</th>
        <th style="padding: 10px; background-color: #007bff; color: #fff;">Speciality</th>
        <th style="padding: 10px; background-color: #007bff; color: #fff;">Image</th>
        <th style="padding: 10px; background-color: #007bff; color: #fff;">Update</th>
        <th style="padding: 10px; background-color: #007bff; color: #fff;">Delete</th>
    </tr>
    @foreach($data as $data)
    <tr>
        <td style="padding: 10px; border: 1px solid #000;">{{$data->name}}</td>
        <td style="padding: 10px; border: 1px solid #000;">{{$data->speciality}}</td>
        <td style="padding: 10px; border: 1px solid #000;"><img src="/chefimage/{{$data->image}}" alt="" width="200" height="200"></td>
        <td style="padding: 10px; border: 1px solid #000;"><a href="{{url('/updatechef', $data->id)}}" style="text-decoration: none; color: #007bff;">Update</a></td>
        <td style="padding: 10px; border: 1px solid #000;"><a href="{{url('/deletechef', $data->id)}}" style="text-decoration: none; color: #007bff;">Delete</a></td>
    </tr>
    @endforeach
</table>

    </div>
    @include("admin.adminscript")
  </body>
</html>
