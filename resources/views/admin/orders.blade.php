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
    <div class="container">
    <form action="{{url('/search')}}" method="get" style="text-align: center;">
    @csrf
    <input type="text" name="search" style="padding: 5px; border: 1px solid #ccc; border-radius: 3px; color: black;" placeholder="Search">
    <input type="submit" value="Search" style="padding: 5px 10px; background-color: #007bff; color: #fff; border: none; border-radius: 3px; cursor: pointer;">
</form>

    <table style="border-collapse: collapse; width: 100%; margin: 0 auto;">
    <tr style="background-color: #007bff; color: #fff;">
        <td style="padding: 10px;">Name</td>
        <td style="padding: 10px;">Phone</td>
        <td style="padding: 10px;">Address</td>
        <td style="padding: 10px;">Foods</td>
        <td style="padding: 10px;">Price</td>
        <td style="padding: 10px;">Quantity</td>
        <td style="padding: 10px;">Total</td>
    </tr>
    @foreach($data as $data)
    <tr>
        <td style="padding: 10px; border: 1px solid #000;">{{$data->name}}</td>
        <td style="padding: 10px; border: 1px solid #000;">{{$data->phone}}</td>
        <td style="padding: 10px; border: 1px solid #000;">{{$data->address}}</td>
        <td style="padding: 10px; border: 1px solid #000;">{{$data->foodname}}</td>
        <td style="padding: 10px; border: 1px solid #000;">{{$data->price}}</td>
        <td style="padding: 10px; border: 1px solid #000;">{{$data->quantity}}</td>
        <td style="padding: 10px; border: 1px solid #000;">Rs. {{$data->price * $data->quantity}}</td>
    </tr>
    @endforeach
</table>
</div>

    </div>
    @include("admin.adminscript")
  </body>
</html>
