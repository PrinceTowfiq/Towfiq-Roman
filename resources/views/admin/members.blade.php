@extends('admin.app')


@push('custom-style')
    <!-- DataTables -->
    <link href="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('admin/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
@endpush

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
        
                                        <table id="member-datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>S.N.</th>
                                                <th>Member ID</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Father Name</th>
                                                <th>Mother Name</th>
                                                <th>Spous Nname</th>
                                                <th>Spous DOB</th>
                                                <th>Anniversary Date</th>
                                                <th>whatsapp Number</th>
                                                <th>NID</th>
                                                <th>Address</th>
                                                <th>Present Address</th>
                                                <th>Permanent Address</th>
                                                <th>Tshirt Size</th>
                                                <th>Favorite Sports</th>
                                                <th>Membership</th>
                                                <th>Profession</th>
                                                <th>Designation</th>
                                                <th>Organization</th>
                                                <th>Child Name 1</th>
                                                <th>Child DOB 1</th>
                                                <th>Child Name 2</th>
                                                <th>Child DOB 2</th>
                                                <th>Child Name 3</th>
                                                <th>Child DOB 3</th>
                                                
                                                
                                                <th>DOB</th>
                                                <th>Photo</th>
                                                {{-- <th>Action</th> --}}
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
                                                        <td>{{$member->father_name}}</td>
                                                        <td>{{$member->mother_name}}</td>
                                                        <td>{{$member->spouse_name}}</td>
                                                        <td>{{$member->spouse_dob}}</td>
                                                        <td>{{$member->anniversary_date}}</td>
                                                        <td>{{$member->whatsapp_number}}</td>
                                                        <td>{{$member->nid}}</td>
                                                        <td>{{$member->address}}</td>
                                                        <td>{{$member->present_address}}</td>
                                                        <td>{{$member->permanent_address}}</td>
                                                        <td>{{$member->tshirt_size}}</td>
                                                        <td>{{$member->favorite_sports}}</td>
                                                        <td>{{$member->membership}}</td>
                                                        <td>{{$member->profession}}</td>
                                                        <td>{{$member->designation}}</td>
                                                        <td>{{$member->organization}}</td>
                                                        <td>{{$member->child_name_1}}</td>
                                                        <td>{{$member->child_dob_1}}</td>
                                                        <td>{{$member->child_name_2}}</td>
                                                        <td>{{$member->child_dob_2}}</td>
                                                        <td>{{$member->child_name_3}}</td>
                                                        <td>{{$member->child_dob_3}}</td>
                                                        <td>{{$member->bob}}</td>
                                                        <td> <img src=" {{asset('uploads')}}/{{$member->image}}" width="150px;"> </td>
                                                        {{-- <td>Edit</td> --}}
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

    <!-- Responsive examples -->
    <script src="{{asset('admin/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/pages/jquery.datatable.init.js')}}"></script>

    <script>
            $(document).ready(function() {
                    $('#member-datatable').DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                            ]
                    } );
            } );       
    </script>
@endpush