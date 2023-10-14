
             
 <section class="about section" id="about">
  <div class="container">
       <div class="row">

               <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-4 col-md-10 mx-auto col-12">
                   <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are Gymso</h2>

                   <p data-aos="fade-up" data-aos-delay="400">You are NOT allowed to redistribute this HTML template downloadable ZIP file on any template collection site. You are allowed to use this template for your personal or business websites.</p>

                   <p data-aos="fade-up" data-aos-delay="500">If you have any question regarding <a rel="nofollow" href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Gymso Fitness HTML template</a>, you can <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">contact Tooplate</a> immediately. Thank you.</p>

               </div>
               @if ( count($data)>0)
               @foreach ( $data as $data )
                 
              
               <div class="ml-lg-auto col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                   <div class="team-thumb">
                       <img src="{{Storage::url($data->image)}}" class="img-fluid" alt="Trainer">

                       <div class="team-info d-flex flex-column">

                           <h3>{{$data->name}}</h3>
                           <span>{{$data->about}}</span>

                        
                       </div>
                   </div>
               </div>

               @endforeach

            

       </div>
  </div>
</section>

@else

<div class="ml-lg-auto col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
    <div class="team-thumb">
        <img src="https://images.pexels.com/photos/866366/pexels-photo-866366.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="Trainer">

        <div class="team-info d-flex flex-column">

            <h3>genna</h3>
            <span>cardio coach</span>

         
        </div>
    </div>
</div>
@endif
            