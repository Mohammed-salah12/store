@extends('cms.parent')

@section('title' , 'Admin')

@section('main-title' , 'Edit Admin')

@section('sub-title' , 'Edit Admin')

@section('styles')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Data of Admin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>

              <div class="card-body">
              <div class="row">

                <div class="form-group col-md-6">
                  <label for="name">First Name of Admin</label>
                  <input type="text" class="form-control" id="name" name="name"
                  value="{{$categories->name ?? ""}}" placeholder="Enter First Name of Admin">
                </div>

                <div class="form-group col-md-6">
                  <label for="last_name">Last Name of Admin</label>
                  <input type="text" class="form-control" id="descrpition" name="descrpition"
                  value="{{$categories->descrpition ?? ""}}" placeholder="Enter Last Name of Admin">
                </div>
              </div>







                      </select>
                    </div>





              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{$categories->id}})" class="btn btn-primary">Store</button>
                <a href="{{ route('categories.index') }}" type="button" class="btn btn-info">Return Back</a>

              </div>
            </form>
          </div>
          <!-- /.card -->


        </div>
        <!--/.col (left) -->


        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

@endsection


@section('scripts')
  <script>
    function performUpdate(id){

      let formData = new FormData();
      formData.append('name',document.getElementById('name').value);
      formData.append('descrpition',document.getElementById('descrpition').value);


      storeRoute('/cms/product/update-categories/'+id , formData);
    }

  </script>
@endsection
