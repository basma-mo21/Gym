        
        
            <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
  
          <div class="modal-content">
            <div class="modal-header">
  
              <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>
  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        
        <div class="modal-body">
    <form class="membership-form webform" role="form" method="POST" action="{{ route('gym.store') }}">
        @csrf
        <input type="text" class="form-control" name="name" placeholder="John Doe">

        <input type="email" class="form-control" name="email" placeholder="Johndoe@gmail.com">

        <input type="number" class="form-control" name="phone" placeholder="123-456-7890"  required>

        <textarea class="form-control" rows="3" name="message" placeholder="Additional Message"></textarea>

        <button type="submit" class="form-control" id="submit-button" name="submit">Submit Button</button>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="signup-agree">
            <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms &amp;Conditions</a>
            </label>
        </div>
    </form>
  </div>



  <div class="modal-footer"></div>

</div>
</div>
</div>