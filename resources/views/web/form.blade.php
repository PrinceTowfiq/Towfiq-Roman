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
          Member Form
        </div>
      
        <div class="card-body">

          <form class="col-md-12 my-3" method="POST" action="{{route('storeMemberData')}}" enctype="multipart/form-data" >
            @csrf

            <div class="row">
    
              {{-- <div class="form-group col-md-6">
                <label for="validationTooltip01">Member ID:</label>
                <input type="text" class="form-control" name="member_id" value="" required>
              </div> --}}
    
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
                <label for="validationTooltip05">Spouse Name:</label>
                <input type="text" class="form-control" name="spouse_name" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip06">Mobile No:</label>
                <input type="text" class="form-control" name="mobile_number" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip07">Whatsapp No:</label>
                <input type="text" class="form-control" name="whatsapp_number" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip08">Email address:</label>
                <input type="text" class="form-control" name="email" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip09">Birth Date:</label> <br>
                <input type="date" class="form-control" name="bob" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip10">Anniversary Date:</label> <br>
                <input type="date" class="form-control" name="anniversary_date" value="" required />
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip11">NID no:</label>
                <input type="text" class="form-control" name="nid" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip12">Address (Where CECL will Communicate):</label>
                <input type="text" class="form-control" name="address" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip13">Present address:</label>
                <input type="text" class="form-control" name="present_address" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip14">Permanent address:</label>
                <input type="text" class="form-control" name="permanent_address" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip15">Tshirt Size:</label>
                <input type="text" class="form-control" name="tshirt_size" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip16">Sports you played:</label>
                <input type="text" class="form-control" name="favorite_sports" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip17">Membership nominated by:</label>
                <input type="text" class="form-control" name="membership" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip18">Profession:</label>
                <input type="text" class="form-control" name="profession" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip19"> Designation: </label>
                <input type="text" class="form-control" name="designation" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="validationTooltip20">Organization: </label>
                <input type="text" class="form-control" name="organization" value="" required>
    
              </div>
              <div class="form-group col-md-6">
                <label for="exampleFormControlFile1">Photo 1</label>
                <input type="file" class="form-control" name="image1">
              </div>
              <div class="form-group col-md-6">
                <label for="exampleFormControlFile1">Photo 2</label>
                <input type="file" class="form-control" name="image2">
              </div>

              <button class="btn btn-primary mt-4" type="submit">Submit form</button>
    
    
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
@endsection
