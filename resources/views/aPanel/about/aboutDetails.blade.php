@include('aPanel.asstes.header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="text-secondary">View About Details</h2>
                </div>
                
                
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">About list</h3>
                @if (Session::has('done'))
                
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('done') }}
                  </div>
                    
                @endif

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Img</th>
                      <th>Name</th>
                      <th>Age</th>
                      <th> Job Title </th>
                      <th>From</th>
                      <th> Lives in </th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($abouts as $about )

                      
                    <tr>
                      <td>{{ $about->id }}</td>
                      <td><img src="../dist/img/user2-160x160. " width="45px" alt="">{{ $about->image }}</td>
                      <td>{{ $about->name }}</td>
                      <td><span class="tag tag-success">{{ $about->age }}</span></td>
                      <td>{{ $about->title }}</td>
                      <td>{{ $about->from }}</td>
                      <td>{{ $about->live_in }}</td>   
                      <td><span class="text-wrap">{{ $about->description }}</span></td>
                      <td>
							<a href="#editEmployeeModal{{ $about->id }}" class="edit" data-toggle="modal" title="Edit">                           
                                <i class="text-warning  far fa-edit fa-2x" data-toggle="tooltip"></i>
                            </a>
                            
							<a href="#deleteEmployeeModal{{ $about->id }}" class="delete ml-2" data-toggle="modal">
                                <i class="text-danger far fa-trash-alt fa-2x" data-toggle="tooltip" title="Delete"></i>
                            </a>
                            @endforeach
						</td>
                        <!-- Edit Modal HTML -->
                    <div id="editEmployeeModal{{ $about->id }}" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST" action="{{ route('admin.update', $about->id ) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Update About Info</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-6">
                                            <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" value="{{ $about->name }}" class="form-control" required>
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                            <label>Age</label>
                                            <input type="number" value="{{ $about->age }}" class="form-control" required>
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                            <label>Title </label>
                                            <input type="text" value="{{ $about->title }}" class="form-control" required>
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                            <label>From</label>
                                            <input type="text" value="{{ $about->from }}" class="form-control" required>
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                            <label> Lives in</label>
                                            <input type="text" value="{{ $about->live_in }}" class="form-control" required>
                                            </div>
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="form-group">
                                            <label for="imgUpdate">Img</label>
                                            <input type="file"  class="form-control-file" id="imgUpdate">
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" value="{{ $about->description }}"  rows="3" ></textarea>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-info" value="update">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        <!-- Delete Modal HTML -->
                        <div id="deleteEmployeeModal{{ $about->id }}" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form>
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Employee</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete these Records?</p>
                                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
    </div>
    @include('aPanel.asstes.footer')