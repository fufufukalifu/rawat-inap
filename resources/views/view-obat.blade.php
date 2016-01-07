@extends('layouts.main')
@section('content')
<div class="row mt">
  <!-- data pasien -->
<div class="col-lg-8">
   <div class="form-panel">
    <h4 class="mb">Data Pasien</h4>
    <form class="form-horizontal style-form" method="get">
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">No Pendaftaran</label>
        <div class="col-sm-5">
            <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Ruangan</label>
        <div class="col-sm-3">
         <input type="text" class="form-control">
         <br>
         <button class="btn btn-primary">Cari</button>
        </div>
      </div>
      
      <div class="form-group">
       <label class="col-sm-2 col-sm-2 control-label">Nama Pasien</label>
       <div class="col-sm-8">
           <input type="text" class="form-control">
       </div>
      </div>

    </form>
   </div>
</div>

<div class="col-lg-8">
   <div class="form-panel">
    <h4 class="mb">Form Penggunaan Obat</h4>
    <form class="form-horizontal style-form" method="get">
      <div class="form-group">
       <div class="col-md-6">
        <label class="col-sm-4 col-sm-4 control-label">Tanggal</label>
        <div class="col-sm-5">
            <input type="date" class="form-control" disabled>
        </div>
       </div>
       <div class="col-md-6">
        <label class="col-sm-4 col-sm-4 control-label">Waktu Pemberian</label>
        <div class="col-sm-5">
            <input type="time" class="form-control">
        </div>
       </div>
      </div>
      </div>
      <div class="form-panel">
       <div class="row">
        <div class="col-md-6">
         <div class="form-group">
          <label>Nama Obat</label><br>
          <input type="text" class="form-control">
          <label>Rute Pemberian</label><br>
          <input type="text" class="form-control">
          <label>Dosis</label><br>
          <input type="text" class="form-control"> 
          <label>Keterangan</label> <input type="text" class="form-control">
          </div>
         </div>
       <div class="col-md-6">
         <div class="col-md-12">
                      <div class="content-panel">
                         <h4><i class="fa fa-angle-right"></i> Basic Table</h4>
                         <hr>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                      </div><! --/content-panel -->
                   </div>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       </div>
       
       </div>
      </div>

    </form>
   </div>
</div>
  <!-- data pasien -->
</div>

  <!-- form penggunaan obat -->
</div>
  <!-- form penggunaan obat -->
@endsection
<script type="text/javascript">
  var d = new Date();
  var now = d.getDate();
</script>