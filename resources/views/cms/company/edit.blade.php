@extends('cms.parent')

@section('title' , 'Admin')

@section('main-title' , 'Create Admin')

@section('sub-title' , 'create Admin')

@section('styles')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->

            <!-- /.card-header -->
            <!-- form start -->
            <form>

              <div class="card-body">
              <div class="row">

                <div class="form-group col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title"> Update logo </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                          <div class="card-body">
                            <div class="form-group">


                <div class="form-group ">
                    <label for="img">img</label>

                    <input type="file" class="form-control" id="img" name="img" placeholder="">
                </div>



                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="button" onclick="performUpdate({{$companies->id}})" class="btn btn-primary">update</button>
                            <a href="{{ route('companies.index') }}" type="button" class="btn btn-info">Return Back</a>

                          </div>
                        </form>
                      </div>


              <!-- /.card-body -->


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

      formData.append('img',document.getElementById('img').files[0]);
      storeRoute('/cms/product/update-companies/'+id ,formData);
    }

  </script>
@endsection

