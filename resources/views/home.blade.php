@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('yes') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                {{ __('hello') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">Sherleeo Glend</h3>             
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../../images/mystupidface2.jpg". alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    
              </div>
            </div>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  BSIT in Don honorio ventura state university Apalit Campus.
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Apalit, San juan.</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills and Work experiences </p>

                <p class="text-muted">
                  <span class="tag tag-danger">Animation.</span>
                  <span class="tag tag-success">Video edit.</span>
                  <span class="tag tag-info">story writing.</span>
                  <span class="tag tag-warning">Cooking.</span>
                  <span class="tag tag-primary">Coding.</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Maybe useless but still rather continue than stopping.</p>
              </div>
              <div class="card">
        <div class="card-header">
          <h3 class="card-title">Community Details</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Servers</span>
                      <span class="info-box-number text-center text-muted mb-0">200</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Users Joined</span>
                      <span class="info-box-number text-center text-muted mb-0">30K</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Collaborations</span>
                      <span class="info-box-number text-center text-muted mb-0">80 <span>
                    </span></span></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>Recent Activity</h4>
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../images/mystupidface2.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Sherleeo Glend.</a>
                        </span>
                        <span class="description">Shared publicly - 7:45 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                       Good use of Everyday Lives and Practices to spend their time to their Enjoyment
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                      </p>
                    </div>

                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../images/old friendso.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Rein </a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        i'd pick something else to make it a big challenge for myself than making it a easy way to deal with troubles of life
                      </p>
                      <p>
                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
                      </p>
                    </div>

                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../images/nothing.jpg" alt="user image">
                        <span class="username">
                          <a href="#">John meyor</a>
                        </span>
                        <span class="description">Shared publicly - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        its a good usage for everyone though so they can make their lives more easier
                        and probably a best usage of a sudden troubles
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
                      </p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Hyun's Dojo</h3>
              <p class="text-muted">a Animation Studio for making Creativity and freedom to all New and experienced Animators</p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Flash studio
                  <b class="d-block">Dieci inc</b>
                </p>
                <p class="text-sm">Project Leader
                  <b class="d-block">Hyun</b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Project files</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Rules.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> Requirements.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Animation and Art tips.pdf</a>
                </li>
              </ul>
              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-primary">Contact user </a>
                <a href="#" class="btn btn-sm btn-warning">Report contact</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <img class="img-circle" src="../../images/old friendso.jpg" alt="User Image">
                  <span class="username"><a href="#">Rein.</a></span>
                  <span class="description">Shared publicly - 7:30 PM Today</span>
                </div>
                <!-- /.user-block -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                    <i class="far fa-circle"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <img class="img-fluid pad" src="../../images/exaggeration.png" alt="Photo">

                <p>I don't get why animators use this for their animaions, is it a little off?</p>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                <span class="float-right text-muted">127 likes - 2 comments</span>
              </div>
              <!-- /.card-body -->
              <div class="card-footer card-comments">
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="../../images/mystupidface2.jpg" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                     Sherleeo Glend
                      <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    it is used to give the character or any objects have alot of force and looking like its lively
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
                <div class="card-comment">
</div>

  <div class="Card Card-widget">
     <img class="img-circle img-sm" src="../../images/mystupidface2.jpg" alt="User Image">
                    <span class="username">
                     Sherleeo Glend
                      <span class="text-muted float-right">9:10 PM Today</span>
                    </span><!-- /.username -->
                    Items ever sodium_crypto_box_publickey_from_secretkey
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
                <div class="card-comment">
</div>

            <div class="position-relative p-3 bg-gray" style="height: 330px; width: 500px">
                      <div class="ribbon-wrapper">
                        <div class="ribbon bg-primary">
                          Sale
                        </div>
</div>
                        <img class="img-fluid img-rectangle" style="height: 300px; width: 500px" src="../../images/Dpad.jpg" alt="Alt Text">
</div>
                     
                      Drawing Pad Model Wacom PX2 <br>
                    
                    </div>

    </div>
   
@endsection