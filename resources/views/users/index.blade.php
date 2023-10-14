@include('users\css')
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

   @include('users\nav')


    @include('users\header')


    <!-- ABOUT -->
 @include('users\coach')
   @include('users\class')


    
   
     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    @include('users\messages')

                  @include('users\map')
                    
               </div>
          </div>
     </section>


  @include('users\footer')



          @include('users.member')

         

 @include('users\script')
</body>
</html>