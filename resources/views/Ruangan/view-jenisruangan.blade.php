@extends('layouts.main')
@section('content')

<div class="container">
  <h2>Dynamic Tabs</h2>
             
           <div class="col-md-3 col-sm-4 mb">
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>Kamar Anak</h5>
                  </div>
                   <div class="row">
                        <a data-toggle="tab" href="#home"> <img src="assets/img/product.png" width="120"></a>
                  </div>
                </div>
          </div><!-- /col-md-4 -->

           <div class="col-md-3 col-sm-4 mb">
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>Kamar Anak</h5>
                  </div>
                   <div class="row">
                        <a data-toggle="tab" href="#menu1"> <img src="assets/img/product.png" width="120"></a>
                  </div>
                </div>
          </div><!-- /col-md-4 -->
           <div class="col-md-3 col-sm-4 mb">
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>Kamar Anak</h5>
                  </div>
                   <div class="row">
                        <a data-toggle="tab" href="#menu2"> <img src="assets/img/product.png" width="120"></a>
                  </div>
                </div>
          </div><!-- /col-md-4 -->

           <div class="col-md-3 col-sm-4 mb">
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>Kamar Anak</h5>
                  </div>
                   <div class="row">
                        <a data-toggle="tab" href="#menu"> <img src="assets/img/product.png" width="120"></a>
                  </div>
                </div>
          </div><!-- /col-md-4 -->

          

  <div class="tab-content">
  
    <div id="home" class="tab-pane fade in active">
       <div class="col-md-12 mb">
              <!-- WHITE PANEL - TOP USER -->
              <div class="green-panel pn">
                <div class="col-md-2 green-header">             
                  <h5>Deskripsi Kelas home</h5>       
                </div>
                <div class="col-md-12 mb">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </div>
            </div><!-- /col-md-4 -->
    </div>

    <div id="menu1" class="tab-pane fade">
      <div class="col-md-12 mb">
              <!-- WHITE PANEL - TOP USER -->
              <div class="green-panel pn">
                <div class="col-md-2 green-header">             
                  <h5>Deskripsi Kelas menu 1</h5>       
                </div>
                <div class="col-md-12 mb">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </div>
            </div><!-- /col-md-4 -->
    </div>

    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>

    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>

  </div>
</div>

@endsection