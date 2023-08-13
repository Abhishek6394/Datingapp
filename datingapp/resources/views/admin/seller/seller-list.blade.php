@extends('admin.layout.main')
@push('title')
Sellers
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
            <h1>Sellers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sellers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All seller with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<!-- <a href="{{url('admincon/sellerForm')}}"><button class="btn btn-primary float-right"> <i class="fa fa-plus"></i> Add New Seller</button></a> -->
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Image</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>



                  </tr>
                  </thead>
                  <tbody>
                 <!--  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>

                  </tr> -->
                   <?php foreach ($users as $key => $user) { $key++; ?>
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <td>
                                                 @if( $user['name'] != '')
                                                {{ $user['name'] }}
                                                @else
                                                -----------
                                                @endif
                                            </td>
                                            <td>{{ $user['mobile'] }}</td>
                                               <td>
                                                @if(isset($user['image']) && !empty($user['image']))
                                                <img src="{{ $user['image'] }}" height="100px" width="100px">
                                                @else
                                                ---------
                                                @endif
                                               </td>
                                            <td>
                                                 @if( $user['city'] != '')
                                                {{ $user['city'] }}
                                                @else
                                                --------------------------
                                                @endif
                                            </td>
                                            <td>
                                              <!--  @if( $user['gender'] == 'men')
                                               //{{ $user['city'] }}
                                                @else
                                                Female
                                                @endif -->
                                               {{ ucfirst($user['gender']) }}


                                            </td>
                                             <td>
                                                 @if( $user['price'] != '')
                                                ${{ $user['price'] }}
                                                @else
                                                --------------------------
                                                @endif
                                            </td> 
                                             {{-- <td>
                                                 @if( $user['matrital_status'] != '')
                                                {{ $user['matrital_status'] }}
                                                @else
                                                --------------------------
                                                @endif
                                            </td> --}}

                                            <td>
                                            @if($user['status'] == 1)
                                                <span class="label bg-green">Active</span>
                                            @else
                                                <span class="label bg-red">Inactive</span>
                                            @endif
                                            </td>
                                             <td>{{ $user['created_at'] }}</td>
                                            <td>
                                                <a href="javascript:void(0);" onClick="edituser('<?php echo base64_encode($user['id']) ?>')"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="javascript:void(0);" onClick="removeuser('<?php echo base64_encode($user['id']) ?>')"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <script type="text/javascript">
        var url = {!! json_encode(url('admincon/sellerForm')) !!}
        $('#addRow').click(function(){
            location.replace(url);
        });

        function edituser(id){
            var url = '<?php echo url('admincon/sellerForm') ?>'+'/'+id;
            swal({
                  title: `Are you sure you want to edit this record?`,
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                  location.replace(url);
                }
            });
        }

        function removeuser(id){
            var url = '<?php echo url('admincon/sellerDelete') ?>'+'/'+id;
            swal({
                  title: `Are you sure you want to delete this record?`,
                  text: "If you delete this, it will be gone forever.",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                  location.replace(url);
                }
            });
        }
    </script>


@endsection
