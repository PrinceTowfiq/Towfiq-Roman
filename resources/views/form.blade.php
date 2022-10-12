@include('nav')
    <title>Form</title>
  </head>
<body>
<div class="p-10 mb-2 bg-secondary text-white"> 
  <div class="d-flex justify-content-center">
    <form class="needs-validation" novalidate text >
      <div class="form-row"> 
        <h1> Form for Data collection </h1> 
      </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationTooltip01">Member ID:</label>
            <input type="text" class="form-control" id="validationTooltip01" value="" required >
            <div class="valid-tooltip">
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationTooltip02">Name:</label>
            <input type="text" class="form-control" id="validationTooltip02" value="" required>
            <div class="valid-tooltip">
            </div>
          </div>
        </div> 
          
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Father's Name:</label>
            <input type="text" class="form-control" id="validationTooltip03" value="" required >
            <div class="valid-tooltip">
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationTooltip04">Mother's Name:</label>
            <input type="text" class="form-control" id="validationTooltip04" value="" required>
            <div class="valid-tooltip">
            </div>
          </div>
        </div> 

        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationTooltip05">Spouse Name:</label>
            <input type="text" class="form-control" id="validationTooltip05" value="" required >
            <div class="valid-tooltip">
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationTooltip06">Mobile No:</label>
            <input type="text" class="form-control" id="validationTooltip06" value="" required>
            <div class="valid-tooltip">
            </div>
          </div>
        </div> 

        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationTooltip07">Whatsapp No:</label>
            <input type="text" class="form-control" id="validationTooltip07" value="" required >
            <div class="valid-tooltip">
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationTooltip08">Email address:</label>
            <input type="text" class="form-control" id="validationTooltip09" value="" required>
            <div class="valid-tooltip">
            </div>
          </div>
        </div> 
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <div class="item">
              <label for="validationTooltip09">Birth Date:</label> <br>
              <input type="date" class="fas fa-calendar-alt" id="validationTooltip09" value="" required>
              <div class="valid-tooltip">
                <i class="fas fa-calendar-alt"></i>
              </div>         
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="item">
              <label for="validationTooltip10">Anniversary Date:</label> <br>
              <input type="date" class="fas fa-calendar-alt" id="validationTooltip10" value="" required/>
              <div class="valid-tooltip">
                <i class="fas fa-calendar-alt"></i>
              </div>
            </div>
          </div>
        </div>
      <div class="form-row">
        <div class="col-md-12 mb-6">
          <label for="validationTooltip11">NID no:</label>
          <input type="text" class="form-control" id="validationTooltip011" value="" required >
          <div class="valid-tooltip">
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-12 mb-6">
          <label for="validationTooltip12">Address (Where CECL will Communicate):</label>
          <input type="text" class="form-control" id="validationTooltip12" value="" required >
          <div class="valid-tooltip">
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationTooltip13">Present address:</label>
          <input type="text" class="form-control" id="validationTooltip13" value="" required>
          <div class="valid-tooltip">
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationTooltip14">Permanent address:</label>
          <input type="text" class="form-control" id="validationTooltip14" value="" required>
          <div class="valid-tooltip">
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationTooltip15">Tshirt Size:</label>
          <input type="text" class="form-control" id="validationTooltip15" value="" required >
          <div class="valid-tooltip">
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationTooltip16">Sports you played:</label>
          <input type="text" class="form-control" id="validationTooltip16" value="" required>
          <div class="valid-tooltip">
          </div>
        </div>
      </div> 
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationTooltip17">Membership nominated by:</label>
          <input type="text" class="form-control" id="validationTooltip17" value="" required >
          <div class="valid-tooltip">
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationTooltip18">Profession:</label>
          <input type="text" class="form-control" id="validationTooltip18" value="" required>
          <div class="valid-tooltip">
          </div>
        </div>
      </div> 
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationTooltip19"> Designation: </label>
          <input type="text" class="form-control" id="validationTooltip19" value="" required >
          <div class="valid-tooltip">
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationTooltip20">Organization: </label>
          <input type="text" class="form-control" id="validationTooltip20" value="" required>
          <div class="valid-tooltip">
          </div>
        </div>
      </div> 
      <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
 
      <div class="form-row">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </form>
    </div>
</div>
</body>
</html>