




<div class="ml-auto col-lg-5 col-md-6 col-12">
    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

    <form action="{{ route('gym.storemessage') }}" method="POST" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
        @csrf
        <input type="text" class="form-control" name="name" placeholder="Name">

        <input type="email" class="form-control" name="email" placeholder="Email">

        <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>

        <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
    </form>
</div>