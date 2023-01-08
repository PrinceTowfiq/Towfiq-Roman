@extends('admin.app')


@push('custom-style')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <style>
        label{
          margin: 10px 0px 5px 0px;
        }
      </style>
      
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
                                    </div>

                                    @if(session()->has('success'))

                                    <script>
                                      Swal.fire({
                                        title: 'Member information successfully Update.',
                                        icon: 'success',
                                        color: '#716add',
                                      })
                                    </script>
                                  @endif
                          
                                  @if(session()->has('error'))
                                    <script>
                                      Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Something went wrong! Please try again.',
                                      })
                                    </script>
                                  @endif
                          
                                    <div class="card-body">

                                        <form class="col-md-12 my-3" method="POST" action="{{route('admin.member-update', $memberData->id)}}" enctype="multipart/form-data" >
                                          @csrf
                              
                                          <div class="row">
                                  
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip01">Member ID:</label>
                                              <input type="text" class="form-control" name="member_id" value="{{ $memberData->member_id}}" required>
                                            </div>
                                  
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip02">Name:</label>
                                              <input type="text" class="form-control" name="name" value="{{ $memberData->name}}" required>
                                  
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip03">Father's Name:</label>
                                              <input type="text" class="form-control" name="father_name" value="{{ $memberData->father_name}}" required>
                                  
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip04">Mother's Name:</label>
                                              <input type="text" class="form-control" name="mother_name" value="{{ $memberData->mother_name}}" required>
                                            </div>
                              
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip06">Mobile No:</label>
                                              <input type="text" class="form-control" placeholder="01XXXXXXXXX" id="mobile_number" name="mobile_number" value="{{ $memberData->mobile_number}}" required>
                                  
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip07">Whatsapp No:</label>
                                              <input type="text" class="form-control" placeholder="01XXXXXXXXX" id="whatsapp_number" name="whatsapp_number" value="{{ $memberData->whatsapp_number}}" required>
                                              <span class="text-primary " style="float: right;" > <input type="checkbox" id="same_number" name="" value=""> same as mobile number</span>
                              
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip08">Email address:</label>
                                              <input type="text" class="form-control" placeholder="example@mail.com" name="email" value="{{ $memberData->email}}" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip09">Date of Birth:</label> <br>
                                              <input type="date" class="form-control" name="bob" value="{{ $memberData->bob}}" required>
                                            </div>
                              
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip05">Spouse Name:</label>
                                              <input type="text" class="form-control" name="spouse_name" value="{{ $memberData->spouse_name}}" required>
                                            </div>
                              
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip10">Spouse Date of Birth:</label> <br>
                                              <input type="date" class="form-control" name="spouse_dob" value="{{ $memberData->spouse_dob}}" required />
                                            </div>
                              
                                            <div class=" form-group row col-md-12 child_data">
                                                <div class="form-group col-md-6 " style="padding-right: 0; ">
                                                    <label for="">Child Name:</label>
                                                    <input type="text" class="form-control" name="child_name_1" value="" >
                                                </div>
                                                <div class="form-group col-md-6" style="padding-right: 0;">
                                                    <label for="">Date of Birth:</label> <br>
                                                    <input type="date" class="form-control" name="child_dob_1" value=""  />
                                                </div>
                                                <a href="#" id="addMore" class="change">add more</a>
                                            </div>
                                            
                              
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip10">Anniversary Date:</label> <br>
                                              <input type="date" class="form-control" name="anniversary_date" value="{{ $memberData->anniversary_date}}" required />
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip10"></label> <br>
                                            </div>
                                            <hr class="mt-3">
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip18">Profession:</label>
                                              <input type="text" class="form-control" placeholder="Ex: Private Job, Govt. Job , Business, etc. " name="profession" value="{{ $memberData->profession}}" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip19"> Designation: </label>
                                              <input type="text" class="form-control" placeholder="" name="designation" value="{{ $memberData->designation}}" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip20">Current Organisation/Company Name: </label>
                                              <input type="text" class="form-control" name="organization" value="{{ $memberData->organization}}" required>
                                            </div>
                                          
                              
                                            <div class="form-group col-md-6">
                                              <label for="">Blood Group</label>
                                              <select class="form-control" required name="blood_group" id="">
                                                <option value="">--select one--</option>
                                                <option {{ $memberData->blood_group == 'A+'?'selected':'' }} value="A+">A+</option>
                                                <option {{ $memberData->blood_group == 'A-'?'selected':'' }} value="A-">A-</option>
                                                <option {{ $memberData->blood_group == 'B+'?'selected':'' }} value="B+">B+</option>
                                                <option {{ $memberData->blood_group == 'B-'?'selected':'' }} value="B-">B-</option>
                                                <option {{ $memberData->blood_group == 'O+'?'selected':'' }} value="O+">O+</option>
                                                <option {{ $memberData->blood_group == 'O-'?'selected':'' }} value="O-">O-</option>
                                                <option {{ $memberData->blood_group == 'AB+'?'selected':'' }} value="AB+">AB+</option>
                                                <option {{ $memberData->blood_group == 'AB-'?'selected':'' }} value="AB-">AB-</option>
                                              </select>
                                            </div>
                              
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip11">NID Number:</label>
                                              <input type="text" class="form-control" name="nid" value="{{ $memberData->nid}}" required>
                                            </div>
                              
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip11">TIN Number:</label>
                                              <input type="text" class="form-control" name="tin" value="{{ $memberData->tin}}" required>
                                            </div>
                              
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip15">Tshirt Size:</label>
                                              <select class="form-control" required name="tshirt_size" id="">
                                                <option value="">--select one--</option>
                                                <option {{ $memberData->tshirt_size == 'S'?'selected':'' }} value="S">S</option>
                                                <option {{ $memberData->tshirt_size == 'M'?'selected':'' }} value="M">M</option>
                                                <option {{ $memberData->tshirt_size == 'L'?'selected':'' }} value="L">L</option>
                                                <option {{ $memberData->tshirt_size == 'XL'?'selected':'' }} value="XL">XL</option>
                                                <option {{ $memberData->tshirt_size == 'XXL'?'selected':'' }} value="XXL">XXL</option>
                                                <option {{ $memberData->tshirt_size == 'XXXL'?'selected':'' }} value="XXXL">XXXL</option>
                                              </select>
                                            </div>
                              
                                                          
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip12">Address (Where CECL will Communicate):</label>
                                              <input type="text" class="form-control" id="address" name="address" value="{{ $memberData->address}}" required>
                                            </div>
                              
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip13">Present address:</label>
                                              <input type="text" class="form-control" id="present_address" name="present_address" value="{{ $memberData->present_address}}" required>
                                              <span class="text-primary " style="float: right;" > <input type="checkbox" id="vehicle2" name="" value=""> same as address</span>
                                            </div>
                              
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip14" class="float-left">Permanent address:</label> 
                                              <input type="text" class="form-control" id="permanent_address" name="permanent_address" value="{{ $memberData->permanent_address}}" required>
                                              <span class="text-primary " style="float: right;" > <input type="checkbox" id="vehicle1" name="" value=""> same as address</span>
                                            </div>
                              
                                            @php
                                                $dd = json_decode($memberData->favorite_sports);
                                            @endphp 
                                           
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip16">Sports you played:</label>
                                              <select id="choices-multiple-remove-button" placeholder="Select upto 5 " name="favorite_sports[]" multiple>
                                                <option value="">--select one--</option>
                                                <option {{ in_array('Football', $dd) == TRUE?'selected':'' }} value="Football">Football</option>
                                                <option {{ in_array('Cricket', $dd) == TRUE?'selected':'' }} value="Cricket">Cricket</option>
                                                <option {{ in_array('Billiard', $dd) == TRUE?'selected':'' }} value="Billiard">Billiard</option>
                                                <option {{ in_array('Chess', $dd) == TRUE?'selected':'' }} value="Chess">Chess</option>
                                                <option {{ in_array('Badminton', $dd) == TRUE?'selected':'' }} value="Badminton">Badminton</option>
                                                <option {{ in_array('Tennis', $dd) == TRUE?'selected':'' }} value="Tennis">Tennis</option>
                                            </select> 
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                              <label for="cultural_engagement">Cultural Engagement:</label>
                                              <input type="text" class="form-control" required name="cultural_engagement" value="{{ $memberData->cultural_engagement}}" placeholder="Ex: Can- sing, play guitar, play drums, play key board, play harmonium, play other instruments"  >
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="">Member Photo:</label>
                                              <input type="file" class="form-control"  name="image">
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="validationTooltip17">Membership ID (referred by):</label>
                                              <input type="text" class="form-control" name="membership" value="{{ $memberData->membership}}" >
                                            </div>
                              
                              
                                            <button class="btn btn-primary mt-4" type="submit">Submit form</button>
                                  
                                  
                                          </div>
                                        </form>
                              
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script>

  
      $(document ).ready(function() {
  
        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
          removeItemButton: true,
          maxItemCount:5,
          searchResultLimit:5,
          renderChoiceLimit:5
        }); 
       
        max = 4;
        var i = 2;
  
        $('#addMore').click(function (e) { 
          e.preventDefault();
  
  
          html2 = '<div class=" form-group row col-md-12 child_data">' +
                  '<div class="form-group col-md-6">' +
                    '<label for="">Child Name:</label>' +
                    '<input type="text" class="form-control" name="child_name_'+i+'" value="" >' +
                  '</div>' +
                  '<div class="form-group col-md-6">' +
                    '<label for="">Dath of Birth:</label> <br>' +
                    '<input type="date" class="form-control" name="child_dob_'+i+'" value=""  />' +
                  '</div>' +
                  '<a href="#" class="remove" style="color:#bb0010;">-remove</a>' +
                '</div>';
  
  
          var html = $(".child_data").first().clone();
          if (i < max) {
            // $(html2).find(".change").html("<a class='remove' style='color:#bb0010;'>-remove</a>");
            $(".child_data").last().after(html2);
            i++;
          }
  
        });
        $("body").on("click",".remove",function(){ 
          if (i <=max) {
            $(this).parents(".child_data").remove();
            i--;
          }
        });
  
        $('#vehicle1').change(function(){
            if ($('#vehicle1').is(':checked') == true){
                var address = $('#address').val();
                $('#permanent_address').val(address).prop('readonly', true);
                console.log(address);
            } else {
                $('#permanent_address').val('').prop('readonly', false);
            }
        });
  
        $('#vehicle2').change(function(){
            if ($('#vehicle2').is(':checked') == true){
                var address = $('#address').val();
                $('#present_address').val(address).prop('readonly', true);
            } else {
                $('#present_address').val('').prop('readonly', false);
            }
        });
  
        $('#same_number').change(function(){
            if ($('#same_number').is(':checked') == true){
                var mobile_number = $('#mobile_number').val();
                $('#whatsapp_number').val(mobile_number).prop('readonly', true);
            } else {
                $('#whatsapp_number').val('').prop('readonly', false);
            }
        });
  
  
  
      });
  
    </script>
@endpush