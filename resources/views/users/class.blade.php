
  <!-- CLASS -->
  <section class="class section" id="class">
    <div class="container">
         <div class="row">

                 <div class="col-lg-12 col-12 text-center mb-5">
                     <h6 data-aos="fade-up">Get A Perfect Body</h6>

                     <h2 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h2>
                  </div>
                  @if ( count($class)>0)
                  @foreach ($class as $data)
                      
                 <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                     <div class="class-thumb">
                         <img src="{{Storage::url($data->image)}}" class="img-fluid" alt="Class">

                         <div class="class-info">
                             <h3 class="mb-1">{{$data->class}}</h3>

                             <span class="class-price">{{$data->price}}</span>

                             <p class="mt-3">{{$data->content}}</p>
                         </div>
                     </div>
                 </div>


                 
                 @endforeach


                 

               
              

         </div>
    </div>
</section>

@else

<div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
    <div class="class-thumb">
        <img src="https://images.pexels.com/photos/414029/pexels-photo-414029.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="Class">

        <div class="class-info">
            <h3 class="mb-1">yoga</h3>

            <span class="class-price">40$</span>

            <p class="mt-3">u will have so much fun</p>
        </div>
    </div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
    <div class="class-thumb">
        <img src="https://images.pexels.com/photos/903171/pexels-photo-903171.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="Class">

        <div class="class-info">
            <h3 class="mb-1">cardio</h3>

            <span class="class-price">50$</span>

            <p class="mt-3">u will have so much fun</p>
        </div>
    </div>
</div>

@endif