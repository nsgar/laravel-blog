@extends('../layouts.main')

@section('content')
<div class="bd-example bd-example-tabs">
    <div class="row">
      <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Create Post</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

          Profile

          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
             

            <form class="form-horizontal" role="form" method="post" action="index.php">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                </div>
              </div>
              <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="4" name="message"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <! Will be used to display an alert to the user>
                </div>
              </div>
            </form>

          </div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
       
            Message

          </div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            
            Setting

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection