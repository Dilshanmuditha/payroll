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
        <h1>Create New Positions</h1>
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
                <form action="NewPositionsSave" method="POST">
                    @csrf
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Position Code</label>
                    <div class="col-sm-10">
                      <input type="text" name="PosCode" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-10">
                      <input type="test" name="PosName" class="form-control">
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