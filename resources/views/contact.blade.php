@extends("main")
@section("title","|contact")
@section("content")

<div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="jumbotron">
  <h1>Contact Us</h1>
  <hr>
  <form>
  <div class="form-group">
 <label name="email">Email:</label>
 <input id="email" name="email" class="form-control">

   <label name="subject">Subject:</label>
 <input id="subject" name="subject" class="form-control">

   <label name="message">Message:</label>
 <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
  </div>
  <input type="submit" value="send message" class="btn btn-success">
  </form>
</div>
    </div>
    </div>
@endsection
   