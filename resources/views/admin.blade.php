@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<body style="background-image:url('images/customizer/pattern/9.jpg')">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif

                    <div class="title"><h4>{{ __('You are logged in as Admin!') }}</h4></div>
                      <br/>

                      <div class="form-header"><h5>Create new instance.</h5></div>

                      <form class="row g-3">
                        <div class="col-md-4">
                          <label for="validationDefault01" class="form-label">Title</label>
                          <input type="text" class="form-control" id="validationDefault01" value="Title" required>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefault02" class="form-label">Region</label>
                          <input type="text" class="form-control" id="validationDefault02" value="Region" required>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefault02" class="form-label">Location</label>
                          <input type="text" class="form-control" id="validationDefault02" value="Location" required>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefault02" class="form-label">Room</label>
                          <input type="text" class="form-control" id="validationDefault02" value="Room/s" required>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefault02" class="form-label">Guest</label>
                          <input type="text" class="form-control" id="validationDefault02" value="Guest/s" required>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefault02" class="form-label">Details</label>
                          <input type="text" class="form-control" id="validationDefault02" value="Details" required>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefault02" class="form-label">Price</label>
                          <input type="text" class="form-control" id="validationDefault02" value="Price" required>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefault02" class="form-label">Thumbnail</label>
                          <input type="text" class="form-control" id="validationDefault02" value="Thumbnail" required>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefault02" class="form-label">Image1</label>
                          <input type="text" class="form-control" id="validationDefault02" value="Image1" required>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefault02" class="form-label">Image2</label>
                          <input type="text" class="form-control" id="validationDefault02" value="Image2" required>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefault02" class="form-label">Image3</label>
                          <input type="text" class="form-control" id="validationDefault02" value="Image3" required>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">Create</button>
                        </div>
                      </form>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
