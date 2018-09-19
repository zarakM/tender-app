@include('main')


<head>
  <title>Build CV</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<div class="container">
    <div class="row">
        <h4>Project</h4>
    </div>
    <div class="container">
 <br>

 <form method="post">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Name" placeholder="Client_ref">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">DOB</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Address" placeholder="Address">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">CNIC</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Phone" placeholder="Phone no">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Cell</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Mobile" placeholder="Mobile">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="area" name="Area" placeholder="Area">
    </div>
  </div>


    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Professional</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="area" name="Area" placeholder="Area">
    </div>
  </div>


    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Affiliation</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="area" name="Area" placeholder="Area">
    </div>
  </div>


    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Total Exp</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="area" name="Area" placeholder="Area">
    </div>
  </div>


    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Education</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="area" name="Area" placeholder="Area">
    </div>
  </div>

  {{csrf_field()}}

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </div>
</form>

</div>