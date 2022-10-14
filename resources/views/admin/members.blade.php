@extends('admin.app')

@section('content')
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Members Information</h4>
                                        <p class="text-muted mb-4 font-13"> </p>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>S.N.</th>
                                                <th>Member ID</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>DOB</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                @foreach ($members as $member)
                                                    <tr>
                                                        <td>{{$loop->index + 1}}</td>
                                                        <td>{{$member->member_id}}</td>
                                                        <td>{{$member->name}}</td>
                                                        <td>{{$member->mobile_number}}</td>
                                                        <td>{{$member->email}}</td>
                                                        <td>{{$member->bob}}</td>
                                                        <td>Edit</td>
                                                    </tr>
                                                @endforeach
                                            
                                            </tbody>
                                        </table>        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        

                    </div><!--end card-body--> 
                    
                </div><!--end card--> 
            </div> <!--end col-->                               
        </div><!--end row-->  

    </div>
    <!-- container -->


@endsection

@push('custom-scripts')
    
    <!-- Required datatable js -->
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('admin/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/buttons.colVis.min.js')}}"></script>

    <script>
            $(document).ready(function() {
                    $('#datatable-buttons').DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                            ]
                    } );
            } );       
    </script>
@endpush