@extends('main')

@section('title', ' | Contact')

@section('content')
        <div class="row">
          <div class="col-md-12">
            <h2>Contact me</h2>
            <hr>
            <form>
              <div class="form-group">
                <label name="email">Email:</label>
                <input id="email" name="email" class="form-control">
              </div>

              <div class="form-group">
                <label name="subject">Subject:</label>
                <input id="subject" name="subject" class="form-control">
              </div>

              <div class="form-group">
                <label name="message">Message:</label>
                <textarea id="message" name="message" class="form-control">Type ypur message here...</textarea>
              </div>

              <input type="submit" value="Send message" class="btn btn-success">

            </form>
          </div>
        </div>
@endsection
   