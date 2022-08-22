@props(['TblDeparts'])
<main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-11">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Departments</h5>
              
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Department Name</th>
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