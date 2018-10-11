<!-- Modal -->
<div class="modal fade" id="student" role="dialog" aria-labelledby="studentTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="studentTitle">Student Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="showHtmlScroll()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">

                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header text-white bg-primary">
                    <h3 class="widget-user-username student_name"></h3>
                    <h5 class="widget-user-desc admission_no"></h5>
                  </div>
                  <div class="widget-user-image">
                    <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
                  </div>
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-sm-4 border-right">
                        <div class="description-block">
                          <h5 class="description-header level"></h5>
                          <span class="description-text">LEVEL</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4 border-right">
                        <div class="description-block">
                          <h5 class="description-header ccode"></h5>
                          <span class="description-text">FACULTY</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4">
                        <div class="description-block">
                          <h5 class="description-header scode"></h5>
                          <span class="description-text">COURSE</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                </div>
                <!-- /.widget-user -->

                <!-- About Me Box -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Brief Stats</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <strong><i class="fa fa-book mr-1"></i> Education</strong>
                    <p class="text-muted study"></p>
                    <hr>

                    <strong><i class="fa fa-map-marker mr-1"></i> Address</strong>
                    <p class="text-muted address"></p>
                    <hr>

                    <strong><i class="fa fa-file mr-1"></i> Notes</strong>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#details" data-toggle="tab">Details</a></li>
                      <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="details">
                        <div class="card-header">
                          <h3 class="card-title text-primary">Personal Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-7">
                              <strong>Full Name</strong>
                              <p class="text-muted fullname"></p>
                            </div>
                            <div class="col-md-5">
                              <strong>Category</strong>
                              <p class="text-muted category"></p>
                            </div>                          
                            <div class="col-md-4">
                              <strong>Admission Number</strong>
                              <p class="text-muted admission_no"></p>
                            </div>                                                       
                            <div class="col-md-4">
                              <strong>Admission Date</strong>
                              <p class="text-muted admission_date"></p>
                            </div>
                            <div class="col-md-4">
                              <strong>Date of Birth</strong>
                              <p class="text-muted dob"></p>
                            </div>                            
                            <div class="col-md-4">
                              <strong>Email</strong>
                              <p class="text-muted email"></p>
                            </div>  
                            <div class="col-md-4">
                              <strong>Phone</strong>
                              <p class="text-muted mobileno"></p>
                            </div>
                            <div class="col-md-4">
                              <strong>Gender</strong>
                              <p class="text-muted gender"></p>
                            </div>                                                        
                          </div>
                        </div>
                        <div class="card-header">
                          <h4 class="card-title text-primary">Parent/Guardian Details</h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-4">
                              <strong>Guardian's Name</strong>
                              <p class="text-muted guardian_name"></p>
                            </div>
                            <div class="col-md-4">
                              <strong>Guardian's Phone</strong>
                              <p class="text-muted guardian_phone"></p>
                            </div>                          
                            <div class="col-md-4">
                              <strong>Guardian's Occupation</strong>
                              <p class="text-muted guardian_occupation"></p>
                            </div>                                                       
                            <div class="col-md-2">
                              <strong>Relation</strong>
                              <p class="text-muted guardian_relation"></p>
                            </div>
                            <div class="col-md-4">
                              <strong>Guardian Email</strong>
                              <p class="text-muted guardian_email"></p>
                            </div>                            
                            <div class="col-md-6">
                              <strong>Guardian Address</strong>
                              <p class="text-muted guardian_address"></p>
                            </div>  
                            <div class="col-md-4">
                              <strong>Father's Name</strong>
                              <p class="text-muted father_name"></p>
                            </div>
                            <div class="col-md-4">
                              <strong>Father's Phone</strong>
                              <p class="text-muted father_phone"></p>
                            </div>                          
                            <div class="col-md-4">
                              <strong>Father's Occupation</strong>
                              <p class="text-muted father_occupation"></p>
                            </div>                          
                            <div class="col-md-4">
                              <strong>Mother's Name</strong>
                              <p class="text-muted mother_name"></p>
                            </div>
                            <div class="col-md-4">
                              <strong>Mother's Phone</strong>
                              <p class="text-muted mother_phone"></p>
                            </div>                          
                            <div class="col-md-4">
                              <strong>Mother's Occupation</strong>
                              <p class="text-muted mother_occupation"></p>
                            </div> 
                                                      
                          </div>
                        </div>

                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <ul class="timeline timeline-inverse">
                          <!-- timeline time label -->
                          <li class="time-label">
                            <span class="bg-danger">
                              10 Feb. 2014
                            </span>
                          </li>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          <li>
                            <i class="fa fa-envelope bg-primary"></i>

                            <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                              <div class="timeline-body">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                quora plaxo ideeli hulu weebly balihoo...
                              </div>
                              <div class="timeline-footer">
                                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                              </div>
                            </div>
                          </li>
                          <!-- END timeline item -->
                          <!-- timeline item -->
                          <li>
                            <i class="fa fa-user bg-info"></i>

                            <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                              <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                              </h3>
                            </div>
                          </li>
                          <!-- END timeline item -->
                          <!-- timeline item -->
                          <li>
                            <i class="fa fa-comments bg-warning"></i>

                            <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                              <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                              <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                              </div>
                              <div class="timeline-footer">
                                <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                              </div>
                            </div>
                          </li>
                          <!-- END timeline item -->
                          <!-- timeline time label -->
                          <li class="time-label">
                            <span class="bg-success">
                              3 Jan. 2014
                            </span>
                          </li>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          <li>
                            <i class="fa fa-camera bg-purple"></i>

                            <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                              <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                              <div class="timeline-body">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                              </div>
                            </div>
                          </li>
                          <!-- END timeline item -->
                          <li>
                            <i class="fa fa-clock-o bg-gray"></i>
                          </li>
                        </ul>
                      </div>
                      <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
    </div>
  </div>
</div>