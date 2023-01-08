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
                                                        <td>{{$member->father_name}}</td>
                                                        <td>
                                                            <a href="" data-toggle="modal" data-target="#exampleModal"
                                                            data-member_id="{{$member->member_id}}"
                                                            data-name="{{$member->name}}"
                                                            data-mobile_number="{{$member->mobile_number}}"
                                                            data-email="{{$member->email}}"
                                                            data-father_name="{{$member->father_name}}"
                                                            data-mother_name="{{$member->mother_name}}"
                                                            data-spouse_name="{{$member->spouse_name}}"
                                                            data-spouse_dob="{{$member->spouse_dob}}"
                                                            data-anniversary_date="{{$member->anniversary_date}}"
                                                            data-whatsapp_number="{{$member->whatsapp_number}}"
                                                            data-nid="{{$member->nid}}"
                                                            data-tin="{{$member->tin}}"
                                                            data-address="{{$member->address}}"
                                                            data-present_address="{{$member->present_address}}"
                                                            data-permanent_address="{{$member->permanent_address}}"
                                                            data-tshirt_size="{{$member->tshirt_size}}"
                                                            data-favorite_sports="{{$member->favorite_sports}}"
                                                            data-membership="{{$member->membership}}"
                                                            data-profession="{{$member->profession}}"
                                                            data-designation="{{$member->designation}}"
                                                            data-organization="{{$member->organization}}"
                                                            data-child_name_1="{{$member->child_name_1}}"
                                                            data-child_dob_1="{{$member->child_dob_1}}"
                                                            data-child_name_2="{{$member->child_name_2}}"
                                                            data-child_dob_2="{{$member->child_dob_2}}"
                                                            data-child_name_3="{{$member->child_name_3}}"
                                                            data-child_dob_3="{{$member->child_dob_3}}"
                                                            data-bob="{{$member->bob}}"
                                                            data-blood_group="{{$member->blood_group}}"
                                                            data-image="{{asset('uploads')}}/{{$member->image}}"
                                                            class="btn btn-info btn-sm"><i class=" fa fa-eye" ></i></a>
                                                            <a href="{{ route('admin.member-edit', $member->id)}}" class="btn btn-success btn-sm"><i class=" fa fa-edit" ></i></a>
                                                        </td>
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
                                                        <td> <img src="{{asset('uploads')}}/{{$member->image}}" width="150px;"> </td>
                                                        
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Member Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="my-3 text-center rounded-circle">
                <img class=" rounded-circle image" style="width: 100%; max-width:200px;" src="https://i.picsum.photos/id/702/200/200.jpg?hmac=_MUIgyTefzE4vp8ty09HrdKNmvqdpg5tbSxk6FpIfcE" alt="" srcset="">
            </div>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Member ID:</th>
                        <td class="member_id">Roman</td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td class="name" >Roman</td>
                    </tr>
                    <tr>
                        <th>Father's Name:</th>
                        <td class="father_name" >Roman</td>
                    </tr>
                    <tr>
                        <th>Mother's Name:</th>
                        <td class="mother_name" >Roman</td>
                    </tr>
                    <tr>
                        <th>Mobile No:</th>
                        <td class="mobile_number" >Roman</td>
                    </tr>
                    <tr>
                        <th>Whatsapp No:</th>
                        <td class="whatsapp_number" >Roman</td>
                    </tr>
                    <tr>
                        <th>Email address:</th>
                        <td class="email">Roman</td>
                    </tr>
                    <tr>
                        <th>Date of Birth:</th>
                        <td class="dob">Roman</td>
                    </tr>
                    <tr>
                        <th>Spouse Name:</th>
                        <td class="spouse_name">Roman</td>
                    </tr>
                    <tr>
                        <th>Spouse Date of Birth:</th>
                        <td class="spouse_dob">Roman</td>
                    </tr>
                    <tr>
                        <th>Child Name(1):</th>
                        <td class="child_name_1">Roman</td>
                    </tr>
                    <tr>
                        <th>Child Date of Birth (1):</th>
                        <td class="child_dob_1">Roman</td>
                    </tr>
                    <tr>
                        <th>Child Name(2):</th>
                        <td class="child_name_2">Roman</td>
                    </tr>
                    <tr>
                        <th>Child Date of Birth (2):</th>
                        <td class="child_dob_2">Roman</td>
                    </tr>
                    <tr>
                        <th>Child Name(3):</th>
                        <td class="child_name_3">Roman</td>
                    </tr>
                    <tr>
                        <th>Child Date of Birth (3):</th>
                        <td class="child_dob_3">Roman</td>
                    </tr>
                    <tr>
                        <th>Anniversary Date:</th>
                        <td class="anniversary_date">Roman</td>
                    </tr>
                    <tr>
                        <th>Profession</th>
                        <td class="profession" >Roman</td>
                    </tr>
                    <tr>
                        <th>Designation</th>
                        <td class="designation" >Roman</td>
                    </tr>
                    <tr>
                        <th>Organisation Name:</th>
                        <td class="organization" >Roman</td>
                    </tr>
                    <tr>
                        <th>Blood Group</th>
                        <td class="blood_group" >Roman</td>
                    </tr>
                    <tr>
                        <th>NID Number</th>
                        <td class="nid" >Roman</td>
                    </tr>
                    <tr>
                        <th>TIN Number</th>
                        <td class="tin" >Roman</td>
                    </tr>
                    <tr>
                        <th>Tshirt Size</th>
                        <td class="member_id" >Roman</td>
                    </tr>
                    <tr>
                        <th>Address (Where CECL will Communicate):</th>
                        <td class="address">Roman</td>
                    </tr>
                    <tr>
                        <th>Present Address:</th>
                        <td class="present_address">Roman</td>
                    </tr>
                    <tr>
                        <th>Permanent address:</th>
                        <td class="permanent_address">Roman</td>
                    </tr>
                    <tr>
                        <th>Sports:</th>
                        <td class="favorite_sports">Roman</td>
                    </tr>
                    <tr>
                        <th>Cultural Engagement:</th>
                        <td class="member_id">Roman</td>
                    </tr>

                </tbody>
            </table>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="" class="btn btn-info btn-sm" id="btnPrint">Print</a>
        </div>
      </div>
    </div>
  </div>
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
                $('#exampleModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    
                    var member_id = button.data('member_id') 
                    var name = button.data('name') 
                    var mobile_number = button.data('mobile_number') 
                    var email = button.data('email') 
                    var father_name = button.data('father_name') 
                    var mother_name = button.data('mother_name') 
                    var spouse_name = button.data('spouse_name') 
                    var spouse_dob = button.data('spouse_dob') 
                    var anniversary_date = button.data('anniversary_date') 
                    var whatsapp_number = button.data('whatsapp_number') 
                    var nid = button.data('nid') 
                    var tin = button.data('tin') 
                    var address = button.data('address') 
                    var present_address = button.data('present_address') 
                    var permanent_address = button.data('permanent_address') 
                    var tshirt_size = button.data('tshirt_size') 
                    var favorite_sports = button.data('favorite_sports') 
                    var membership = button.data('membership') 
                    var profession = button.data('profession') 
                    var designation = button.data('designation') 
                    var organization = button.data('organization') 
                    var child_name_1 = button.data('child_name_1') 
                    var child_name_2 = button.data('child_name_2') 
                    var child_name_3 = button.data('child_name_3') 
                    var child_dob_1 = button.data('child_dob_1') 
                    var child_dob_2 = button.data('child_dob_2') 
                    var child_dob_3 = button.data('child_dob_3') 
                    var bob = button.data('bob') 
                    var blood_group = button.data('blood_group') 
                    var image = button.data('image') 

                    console.log(image)

                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                    var modal = $(this)
                    // modal.find('.modal-title').text('New message to ' + recipient)
                    modal.find('.name').text(name)
                    modal.find('.member_id').text(member_id)
                    modal.find('.mobile_number').text(mobile_number)
                    modal.find('.email').text(email)
                    modal.find('.father_name').text(father_name)
                    modal.find('.mother_name').text(mother_name)
                    modal.find('.spouse_name').text(spouse_name)
                    modal.find('.spouse_dob').text(spouse_dob)
                    modal.find('.anniversary_date').text(anniversary_date)
                    modal.find('.whatsapp_number').text(whatsapp_number)
                    modal.find('.nid').text(nid)
                    modal.find('.tin').text(tin)
                    modal.find('.address').text(address)
                    modal.find('.present_address').text(present_address)
                    modal.find('.permanent_address').text(permanent_address)
                    modal.find('.favorite_sports').text(favorite_sports)
                    modal.find('.membership').text(membership)
                    modal.find('.profession').text(profession)
                    modal.find('.designation').text(designation)
                    modal.find('.organization').text(organization)
                    modal.find('.child_name_1').text(child_name_1)
                    modal.find('.child_name_2').text(child_name_2)
                    modal.find('.child_name_3').text(child_name_3)
                    modal.find('.child_dob_1').text(child_dob_1)
                    modal.find('.child_dob_2').text(child_dob_2)
                    modal.find('.child_dob_3').text(child_dob_3)
                    modal.find('.dob').text(bob)
                    modal.find('.blood_group').text(blood_group)
                    // modal.find('.image').text(image)
                    modal.find('.image').attr('src',image)
                    // modal.find('.modal-body input').val(recipient)
                })

                    $("#member-datatable").DataTable({
                        stripHtml: !1,
                        dom: 'Bfrtip',
                        buttons: ['copyHtml5', 'csvHtml5', 'pdfHtml5']
                    })
                    $('button').on('click', function(e) {
                        window.open('data:application/vnd.ms-excel,' + encodeURIComponent( document.getElementById('tableComments').outerHTML));
                    })

            } );       
    </script>
@endpush