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
        <h1>New Employee Create</h1>
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
                <form action="NewEmployee" method="POST">
                    @csrf
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Employee ID</label>
                    <div class="col-sm-10">
                      <input type="text" name="EmpID" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                      <input type="test" name="EmpFName" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Middle Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="EmpMName" class="form-control">
                    </div>
                  </div>  
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="EmpLName" class="form-control">
                    </div>
                  </div>  
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Department</label>
                    <div class="col-sm-10">
                      <select class="form-select" name="EmpDepartment" aria-label="Default select example">
                        @foreach ($data['department'] as $item)
                        <option value="{{$item['dpartid']}}">{{$item['dpartcode']}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>                  

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-10">
                      <select class="form-select" name="EmpPosition" aria-label="Default select example">
                        @foreach ($data['position'] as $posi)
                        <option value="{{$posi['poid']}}">{{$posi['pocode']}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>                  
                  
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Salary</label>
                    <div class="col-sm-10">
                      <input type="number" name="EmpSalary" class="form-control">
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