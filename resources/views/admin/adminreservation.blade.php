<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    <div style="margin: 20px;">
    <table style="border-collapse: collapse; width: 100%;">
        <tr>
            <th style="padding: 10px; background-color: #007bff; color: #fff;">Name</th>
            <th style="padding: 10px; background-color: #007bff; color: #fff;">Email</th>
            <th style="padding: 10px; background-color: #007bff; color: #fff;">Phone</th>
            <th style="padding: 10px; background-color: #007bff; color: #fff;">Date</th>
            <th style="padding: 10px; background-color: #007bff; color: #fff;">Time</th>
            <th style="padding: 10px; background-color: #007bff; color: #fff;">Message</th>
        </tr>
        @foreach($data as $data)
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">{{$data->name}}</td>
            <td style="padding: 10px; border: 1px solid #000;">{{$data->email}}</td>
            <td style="padding: 10px; border: 1px solid #000;">{{$data->phone}}</td>
            <td style="padding: 10px; border: 1px solid #000;">{{$data->date}}</td>
            <td style="padding: 10px; border: 1px solid #000;">{{$data->time}}</td>
            <td style="padding: 10px; border: 1px solid #000;">{{$data->message}}</td>
        </tr>
        @endforeach
    </table>
</div>

    </div>
    @include("admin.adminscript")
  </body>
</html>
