@extends('admin.layout.main')
@push('title')
Update Seller
@endpush
@section('main-section')
<?php $pagename = 'all-seller-list'  ?>
  


             <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Seller Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Seller Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="{{route('save.seller')}}" method="POST" > 
    	@csrf
      <div class="row">
          
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Personal Information</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>

            <input  type="hidden" name="id" value="<?php if(isset($seller['id']) && !empty($seller['id'])){
            	echo $seller['id']; } ?>">

            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text"  class="form-control" value="<?php if(isset($seller['name']) && !empty($seller['name'])){
            	echo $seller['name']; }  ?>" name="name" onkeyup="Validatename()" id="name"   placeholder="Enter your name" pattern="[A-Z a-z]{3,}" required >
				<span id="namewarning" style="color: red"></span> 
              </div>
             
              
              <div class="form-group">
                <label for="inputClientCompany">price in $</label>
                <input type="text" class="form-control" value="<?php if(isset($seller['price']) && !empty($seller['price'])){
            	echo $seller['price']; } ?>" name="price" placeholder="price" maxlength="6">
              </div>
              
              
              <div class="form-group">
                <label for="inputProjectLeader">Mobile</label>
                <input type="text"  class="form-control" value="<?php if(isset($seller['mobile']) && !empty($seller['mobile'])){
            	echo $seller['mobile']; }  ?>" name="mobile" placeholder="Enter mobile number" onkeyup="Validatemobile()" id ="mobile"  pattern="[0-9]{10,}" title="mobile number must be a valid formate" required >
				<span id="sp" style="color:red"></span>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender"  value="men" <?php if(isset($seller['gender']) && $seller['gender'] == 'men'){ echo "checked";  } ?> > Male
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender"   value="women" <?php if(isset($seller['gender']) && $seller['gender'] == 'women'){ echo "checked"; } ?>> Female
              </div>
             

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Address Details</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="inputProjectLeader">Date of Birth</label>
                <input type="date"  class="form-control" value="<?php if(isset($seller['birthday']) && !empty($seller['birthday'])){
                echo $seller['birthday'];} ?>" name="birthday" required >
				<span id="currentaddresswarning" style="color: red"></span> 
              
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">City</label>
                <input type="text"  class="form-control" value="<?php if(isset($seller['city']) && !empty($seller['city'])){
            	echo $seller['city']; }  ?>" name="city" id="city" onkeyup="Validatecity()"  placeholder="Enter Address" required >
				<span id="citywarning" style="color: red"></span> 
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
      
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection