<div class="discount" id="discount">
      <div class="content">
      </div>
    </div>
    <div class="form">
      <div class="content">
        <h2>Request A Discount</h2>
        <form action="{{url('discount')}}" method="POST">
          @csrf
          <input class="input" type="text" placeholder="Your Name" name="name">
          <input class="input" type="email" placeholder="Your email" name="email">
          <input class="input" type="text" placeholder="Your mobile" name="phone">
          <textarea class="input"  placeholder="Tell Us About Your Needs" name="comment"></textarea>
          <input type="submit" value="Send">
        </form>
      </div>
  </div>