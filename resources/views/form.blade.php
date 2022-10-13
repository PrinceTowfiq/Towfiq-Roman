<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-10 mb-2 bg-secondary  ">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Logo</a>

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 2</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Dropdown link
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
      </li>
    </ul>
  </nav>

  <br>

  <div class="container ">
    <div class="row">
      <div class="card my-4">
        <div class="card-header text-center">
          Member Form
        </div>
      
        <div class="card-body">

          <form class="col-md-12 my-3">
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
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" name="image1">
    
              </div>
              <div class="form-group col-md-6">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" name="image2">
    
              </div>
    
    
    
              <button class="btn btn-primary" type="submit">Submit form</button>
    
    
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>

</body>

</html>