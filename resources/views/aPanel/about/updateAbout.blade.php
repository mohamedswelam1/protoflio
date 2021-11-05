@include('aPanel.asstes.header')

<section class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="text-secondary">Add About Details</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
                        <li class="breadcrumb-item active">Update About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-9">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endif
                <form method="POST" action="{{ route('admin.create') }}" enctype="multipart/form-data" >
            @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Age</label>
                        <input type="text" name="age" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Job Title</label>
                        <input type="text"  name="title" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>From</label>
                        <input type="text" name="from" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Lives in</label>
                        <input type="text" name="lives_in" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      <div class="form-group">
                            <label for="imgUpdate">Img</label>
                            <input type="file" name="image"  class="form-control-file" id="imgUpdate" >
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      <div class="form-group">
                            <label>gender</label>
                            <textarea class="form-control" name="gender" rows="1" placeholder="Enter ..."></textarea>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="updateAbout" class="btn btn-warning">Update Details</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                  </div>

                </form>
              </div>
              
        </div>
        </div>
    </div>
</section>
<br>
<br>
@include('aPanel.asstes.footer')