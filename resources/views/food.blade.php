<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of food with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach($data as $data)
                    <form action="{{url('/addcart', $data->id)}}" method="post">
                        @csrf
                    <div class="item">
                        <div class='card' style="background-image:url('/foodimage/{{$data->image}}');">
                            <div class="price"><h6>Rs. {{$data->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->title}}</h1>
                              <p class='description'>{{$data->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                        <input type="number" name="quantity" min="1" value="1" style="padding: 5px; border: 1px solid #ccc; border-radius: 3px; width: 60px;">
                        <input type="submit" value="Add to cart" style="background-color:orangered; color: black; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;  font-size: 12px;">

                    </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
