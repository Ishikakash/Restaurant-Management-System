<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- plugins:css -->
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")

    <div style="padding: 10px;">
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <th style="border: 1px solid #000; padding: 5px;">User</th>
            <th style="border: 1px solid #000; padding: 5px;">Email</th>
            <th style="border: 1px solid #000; padding: 5px;">Delete</th>
        </tr>
        @foreach($data as $data)
        <tr>
            <td style="border: 1px solid #000; padding: 5px;">{{$data->name}}</td>
            <td style="border: 1px solid #000; padding: 5px;">{{$data->email}}</td>
            @if($data->usertype=="0")
            <td style="border: 1px solid #000; padding: 5px;"><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
            @else
            <td><a>Not allowed</a></td>
            @endif
        </tr>
        @endforeach
    </table>
</div>


    </div>



    @include("admin.adminscript")

  </body>
</html>

</body>
</html>
