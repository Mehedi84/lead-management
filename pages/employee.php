<main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">

          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-info btn-sm mt-2" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="employeeAdd();">Add Employee</button>

              <!-- Default Table -->
              <table  class="table" id="employeeTable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Age</th>
                    <th>Start Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                    <td>
                    <button type="button" class="btn btn-success btn-sm"><i class="bi bi-check-circle"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-exclamation-octagon"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-exclamation-octagon"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-exclamation-octagon"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
<script>
function employeeAdd(){
$('#employeeTable').dataTable( {
  "pageLength": 50
} );
}
</script>