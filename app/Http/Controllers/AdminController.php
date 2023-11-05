<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function user() {
        $data=user::all();
        return view("admin.users", compact("data"));
    }

    public function deleteuser($id) {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu() {
        $data = Food::all();
        return view("admin.foodmenu", compact('data'));
    }

    public function deletemenu($id) {
        $data=Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id) {
        $data=Food::find($id);
        return view("admin.update",compact("data","id"));
    }

    public function update(Request $request, $id) {
        $data = Food::find($id);

        if ($request->hasFile('image')) {
            // Get the uploaded image
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            // Move the new image to the desired directory
            $image->move('foodimage', $imagename);

            // Update the image field in your model
            $data->image = $imagename;
        }

        // Update other fields
        $data->title = $request->input('title');
        $data->price = $request->input('price');
        $data->description = $request->input('description');

        $data->save();

        return redirect()->back();
    }



    public function upload(Request $request) {
        $data = new Food;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

    public function reservation(Request $request) {
        $data = new Reservation;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

        $data->save();
        return redirect()->back();
    }

    public function viewreservation(){
        if(Auth::id()){
        $data = Reservation::all();
        return view("admin.adminreservation", compact('data'));
    } else {
        return redirect('login');
    }
    }

    public function viewchef() {
        $data=Foodchef::all();
        return view('admin.adminchef', compact('data'));
    }

    public function uploadchef(Request $request){
        $data = new Foodchef;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();
    }

    public function updatechef($id) {
        $data = Foodchef::find($id);
        return view('admin.updatechef',compact('data'));
    }

    public function updatefoodchef(Request $request, $id) {
        $data = Foodchef::find($id);

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            // Move the new image to the desired directory
            $image->move('chefimage', $imagename);

            // Update the image field in your model
            $data->image = $imagename;
        }

        $data->name = $request->input('name');
        $data->speciality = $request->input('speciality');
        $data->save();

        return redirect()->back();
    }

    public function deletechef($id) {
        $data=Foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orders() {
        $data=Order::all();
        return view('admin.orders', compact('data'));
    }

    public function search(Request $request) {
        $search = $request->search;
        $data = Order::where('name', 'Like', '%' . $search . '%')->orWhere('foodname', 'Like', '%' . $search . '%')->get();
        return view('admin.orders', compact('data'));
    }

}
