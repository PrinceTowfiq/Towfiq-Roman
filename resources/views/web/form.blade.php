@extends('web.app')

<style>
  label{
    margin: 10px 0px 5px 0px;
  }
</style>

@section('content')
  <div class="container my-4" >
    <div class="row" style="margin-top: 10%;">
      <div class="card my-4">
        <div class="card-header text-center">
          Member Information Form
        </div>

        @if(session()->has('success'))

          <script>
            Swal.fire({
              title: 'Member information successfully save.',
              icon: 'success',
              color: '#716add',
              background: '#fff url(/images/trees.png)',
              backdrop: `
                rgba(0,0,123,0.4)
                url("https://sweetalert2.github.io/images/nyan-cat.gif")
                left top
                no-repeat
              `
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

          <form class="col-md-12 my-3" method="POST" action="{{route('storeMemberData')}}" enctype="multipart/form-data" >
            @csrf

            <div class="row">
    
              <div class="form-group col-md-6">
                <label for="validationTooltip01">Member ID:</label>
                <input type="text" class="form-control" name="member_id" value="" required>
              </div>
    
              <div class="form-group col-md-6">
                <label for="validationTooltip02">Name:</label>
                <input type="text" class="form-control" name="name" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip03">Father's Name:</label>
                <input type="text" class="form-control" name="father_name" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip04">Mother's Name:</label>
                <input type="text" class="form-control" name="mother_name" value="" required>
              </div>

              <div class="form-group col-md-6">
                <label for="validationTooltip06">Mobile No:</label>
                <input type="text" class="form-control" placeholder="01XXXXXXXXX" name="mobile_number" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip07">Whatsapp No:</label>
                <input type="text" class="form-control" placeholder="01XXXXXXXXX" name="whatsapp_number" value="" required>
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip08">Email address:</label>
                <input type="text" class="form-control" placeholder="example@mail.com" name="email" value="" required>
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip09">Date of Birth:</label> <br>
                <input type="date" class="form-control" name="bob" value="" required>
              </div>

              <div class="form-group col-md-6">
                <label for="validationTooltip05">Spouse Name:</label>
                <input type="text" class="form-control" name="spouse_name" value="" required>
              </div>

              <div class="form-group col-md-6">
                <label for="validationTooltip10">Spouse Date of Birth:</label> <br>
                <input type="date" class="form-control" name="spouse_dob" value="" required />
              </div>

              <span id="" class="row child_data">
                <div class="form-group col-md-6">
                  <label for="">Child Name:</label>
                  <input type="text" class="form-control" name="child_name_1" value="" >
                </div>
  
                <div class="form-group col-md-6">
                  <label for="">Dath of Birth:</label> <br>
                  <input type="date" class="form-control" name="child_dob_1" value=""  />
                </div>
                <a href="#" id="addMore" class="change">add more</a>
              </span>

              <div class="form-group col-md-6">
                <label for="validationTooltip10">Anniversary Date:</label> <br>
                <input type="date" class="form-control" name="anniversary_date" value="" required />
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip10"></label> <br>
              </div>
              <hr class="mt-3">
              <div class="form-group col-md-6">
                <label for="validationTooltip18">Profession:</label>
                <input type="text" class="form-control" placeholder="Ex: Private Job, Govt. Job , Business, etc. " name="profession" value="" required>
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip19"> Designation: </label>
                <input type="text" class="form-control" placeholder="" name="designation" value="" required>
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip20">Current Organisation/Company Name: </label>
                <input type="text" class="form-control" name="organization" value="" required>
              </div>
            

              <div class="form-group col-md-6">
                <label for="">Blood Group</label>
                <select class="form-control" required name="blood_group" id="">
                  <option value="">--select one--</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="validationTooltip11">NID Number:</label>
                <input type="text" class="form-control" name="nid" value="" required>
              </div>

              <div class="form-group col-md-6">
                <label for="validationTooltip11">TIN Number:</label>
                <input type="text" class="form-control" name="tin" value="" required>
              </div>

              <div class="form-group col-md-6">
                <label for="validationTooltip15">Tshirt Size:</label>
                <select class="form-control" required name="tshirt_size" id="">
                  <option value="">--select one--</option>
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  <option value="XXL">XXL</option>
                  <option value="XXL">XXL</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="validationTooltip13">Present address:</label>
                <input type="text" class="form-control" id="present_address" name="present_address" value="" required>
              </div>

              
              <div class="form-group col-md-6">
                <label for="validationTooltip12">Address (Where CECL will Communicate):</label>
                <input type="text" class="form-control" id="address" name="address" value="" required>
                <span class="text-primary " style="float: right;" > <input type="checkbox" id="vehicle2" name="" value=""> same as present address</span>
              </div>

              <div class="form-group col-md-6">
                <label for="validationTooltip14" class="float-left">Permanent address:</label> 
                <input type="text" class="form-control" id="permanent_address" name="permanent_address" value="" required>
                <span class="text-primary " style="float: right;" > <input type="checkbox" id="vehicle1" name="" value=""> same as present address</span>
              </div>

              <div class="form-group col-md-6">
                <label for="validationTooltip16">Sports you played:</label>
                <select class="form-control" required name="blood_group" id="">
                  <option value="">--select one--</option>
                  <option value="Football">Football</option>
                  <option value="Cricket">Cricket</option>
                  <option value="Snooker">Snooker</option>
                  <option value="Chess">Chess</option>
                  <option value="Badminton">Badminton</option>
                  <option value="Tennis">Tennis</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="cultural_engagement">Cultural Engagement:</label>
                <input type="text" class="form-control" required name="cultural_engagement" placeholder="Ex: Can- sing, play guitar, play drums, play key board, ply harmonium, play other instruments" value="" >
              </div>
              <div class="form-group col-md-6">
                <label for="">Member Photo:</label>
                <input type="file" class="form-control" required name="image">
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip17">Membership ID (referred by):</label>
                <input type="text" class="form-control" name="membership" value="" >
              </div>


              <button class="btn btn-primary mt-4" type="submit">Submit form</button>
    
    
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
@endsection

@push('custom-scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    // Swal.fire(
    //   'The Internet?',
    //   'That thing is still around?',
    //   'question'
    // );

    // Swal.fire({
    //   title: 'Custom width, padding, color, background.',
    //   icon: 'success',
    //   color: '#716add',
    //   background: '#fff url(/images/trees.png)',
    //   backdrop: `
    //     rgba(0,0,123,0.4)
    //     url("https://sweetalert2.github.io/images/nyan-cat.gif")
    //     left top
    //     no-repeat
    //   `
    // })

    $(document ).ready(function() {
      max = 4;
      var i = 2;

      $('#addMore').click(function (e) { 
        e.preventDefault();


        html2 = '<span id="" class="row child_data">' +
                '<div class="form-group col-md-6">' +
                  '<label for="">Child Name:</label>' +
                  '<input type="text" class="form-control" name="child_name_'+i+'" value="" >' +
                '</div>' +
                '<div class="form-group col-md-6">' +
                  '<label for="">Dath of Birth:</label> <br>' +
                  '<input type="date" class="form-control" name="child_dob_'+i+'" value=""  />' +
                '</div>' +
                '<a href="#" class="remove" style="color:#bb0010;">-remove</a>' +
              '</span>';


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
              var address = $('#present_address').val();
              $('#permanent_address').val(address).prop('readonly', true);
              console.log(address);
          } else {
              $('#permanent_address').val('').prop('readonly', false);
          }
      });

      $('#vehicle2').change(function(){
          if ($('#vehicle2').is(':checked') == true){
              var address = $('#present_address').val();
              $('#address').val(address).prop('readonly', true);
          } else {
              $('#address').val('').prop('readonly', false);
          }
      });
    });

  </script>
@endpush