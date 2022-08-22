<!DOCTYPE html>
<html lang="en">

<head>
  @include('cdn')
</head>
<body>

    @include('header')
    @include('datatablecdn')
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
                @include('RowDepartmentList')
              </div>
            </div>
          </div>
        </div>
      </section>
  
    </main><!-- End #main -->
  

    @include('footer')
  </body>
  
  </html>