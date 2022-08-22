<!DOCTYPE html>
<html lang="en">

<head>
  @include('cdn')
</head>
<body>

    @include('header')
    @include('sidebar')
    <main id="main" class="main">
  
      <div class="pagetitle">
        <h1>Create New Salary Plan - Units</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Elements</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
  
      <section class="section">
        <div class="row">
          <div class="col-lg-11">
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">General Form Elements</h5>
  
                <!-- General Form Elements -->
                <form action="NewSlryPlanUnits" method="POST">
                    @csrf
                    <input type="hidden" name="txtad" value="2">
                  <div class="row mb-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Plan Mode</label>
                    <div class="col-sm-10">
                        <input type="radio" name="PlanMode" value="1" checked="checked" >&nbsp;Single Employee&nbsp;<br><br>
                        <input type="radio" name="PlanMode" value="2">&nbsp;Group of Employees&nbsp;
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Upto</label>
                    <div class="col-sm-2">
                      <input type="number" name="spucriteria1" class="form-control">
                    </div>
                    <label for="inputEmail" class="col-sm-2 col-form-label">Payment</label>
                    <div class="col-sm-2">
                      <input type="number" name="TxtHourPay" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Upto</label>
                    <div class="col-sm-2">
                      <input type="number" name="spucriteria2" class="form-control">
                    </div>
                    <label for="inputEmail" class="col-sm-2 col-form-label">Payment</label>
                    <div class="col-sm-2">
                      <input type="number" name="TxtHourPay" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Upto</label>
                    <div class="col-sm-2">
                      <input type="number" name="spucriteria3" class="form-control">
                    </div>
                    <label for="inputEmail" class="col-sm-2 col-form-label">Payment</label>
                    <div class="col-sm-2">
                      <input type="number" name="TxtHourPay" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Upto</label>
                    <div class="col-sm-2">
                      <input type="number" name="spucriteria4" class="form-control">
                    </div>
                    <label for="inputEmail" class="col-sm-2 col-form-label">Payment</label>
                    <div class="col-sm-2">
                      <input type="number" name="TxtHourPay" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Upto</label>
                    <div class="col-sm-2">
                      <input type="number" name="spucriteria5" class="form-control">
                    </div>
                    <label for="inputEmail" class="col-sm-2 col-form-label">Payment</label>
                    <div class="col-sm-2">
                      <input type="number" name="TxtHourPay" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Upto</label>
                    <div class="col-sm-2">
                      <input type="number" name="spucriteria6" class="form-control">
                    </div>
                    <label for="inputEmail" class="col-sm-2 col-form-label">Payment</label>
                    <div class="col-sm-2">
                      <input type="number" name="TxtHourPay" class="form-control">
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                  </div> 
                </form><!-- End General Form Elements --> 
              </div>
            </div>
          </div>
        </div>
      </section>
    </main><!-- End #main -->
  

    @include('footer')
  </body>
  
  </html>