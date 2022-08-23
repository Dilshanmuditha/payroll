
@props(['TblDeparts' ])
<style type="css">
  .card{
    
  }
  
</style>
<main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-11">
          <div class="card">
            <div class="card-body">
              <h1 class="card-title">Departments </h1>
              
              <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col"><h3>Code</h3></th>
                    <th scope="col"><h3>Department Name</h3></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($TblDeparts as $TblDeparts)
                  <tr>
                    <th scope="row">{{$TblDeparts->dpartcode}}</th>
                    <td>{{$TblDeparts->dpartname}}</td>
                    
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
