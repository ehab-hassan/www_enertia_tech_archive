<?php if(!empty($data->station_ID)){ ?>
<div class="">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9 col-xl-9 col-md-12">
                            <button class="btn btn-info btn-lg d-block station-view-back-btn">
                                <a href="<?php echo base_url(); ?>" class="text-white d-block">BACK</a>
                            </button>
                            <!-- <h5 class="mt-2">Crescent Road, Jumeirah Zabeel Saray</h5> -->
                            <h5 class="mt-2"><?php echo (!empty($data->station_Name)?$data->station_Name:'').', '.(!empty($data->station_Address)?$data->station_Address:''); ?></h5>
                        </div>
                        <div class="col-lg-3 col-xl-3 col-md-12"></div>
                        <div class="col-lg-9 col-xl-9 col-md-12">
                            <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php
                                        $StationImages = json_decode($data->station_Photos);
                                        $Images = json_decode($StationImages);
                                        foreach ($Images as $key => $value) {
                                            echo    '<div class="carousel-item">
                                                        <img class="d-block w-100" src="'.$value.'" alt="First slide">
                                                    </div>';
                                        }
                                    ?>
                                    <!-- <div class="carousel-item">
                                      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide">
                                    </div> -->
                                </div>
                                <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                                <button class="btn btn-success btn-lg d-block station-view-back-btn mt-2">Book Now</button>
                        </div>

                        <div class="border-left col-md-12 col-lg-3 col-xl-3">                                        
                            <div class="card mb-0 overview shadow-none">
                                <div class="card-body border-bottom pt-0 station-view-top-r-btn-w">
                                    <div class="">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <a href="<?php echo base_url('station/edit/1'); ?>" class="btn btn-outline-info station-view-top-r-btn"><i class="fa fa-edit" title="Edit"></i></a>                                                          
                                            </div> 
                                            <div class="col-3">
                                                <button type="button" class="btn btn-outline-info station-view-top-r-btn" data-toggle="modal" data-target="#exampleModaltab" id="StationRemove"><i class="fa fa-minus-circle" title="Delete"></i></button>
                                            </div> 
                                            <div class="col-3">
                                                <a href="#" class="btn btn-outline-info station-view-top-r-btn" style="padding: 15px 17px;"><i class="fa fa-map-marker"></i></a>                                                          
                                            </div> 
                                            <div class="col-3">
                                                <button type="button" class="btn btn-outline-info station-view-top-r-btn" data-toggle="modal" data-target="#exampleModaltab"><i class="fa fa-sign-in"></i></button>
                                            </div>                                                                                                  
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body border-bottom">
                                    <div class="">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="overview-content">
                                                    <i class="mdi mdi-share-variant  text-success"></i>
                                                </div>                                                            
                                            </div> 
                                            <div class="col-9 text-right">
                                                <p class="text-muted font-13 mb-0 font-weight-bold">Distance, Travel Time</p>
                                                <h4 class="mb-0 font-20">@ 3.9 KM, 25 minutes</h4>
                                            </div>                                                                                                   
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body border-bottom">
                                    <div class="">
                                        <div class="row  align-items-center">
                                            <div class="col-3">
                                                <div class="overview-content">
                                                    <i class="mdi mdi-gesture-double-tap  text-purple"></i>
                                                </div>                                                            
                                            </div> 
                                            <div class="col-9 text-right">
                                                <p class="text-muted font-13 mb-0 font-weight-bold">Connectors / Plug, Power</p>
                                                <h4 class="mb-0 font-20">2, Level 3 44KW</h4>
                                            </div>                                                                                                    
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body border-bottom">
                                    <div class="">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="overview-content">
                                                    <i class="mdi mdi-earth text-warning"></i>
                                                </div>                                                            
                                            </div> 
                                            <div class="col-9 text-right">
                                                <p class="text-muted font-13 mb-0 font-weight-bold">Membership, Payment</p>
                                                <h4 class="mb-0 font-20">Public, DEWA Card</h4>
                                            </div>                             
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="">
                                        <div class="row  align-items-center">
                                            <div class="col-3">
                                                <div class="overview-content">
                                                    <i class="mdi mdi-access-point text-pink"></i>
                                                </div>                                                            
                                            </div> 
                                            <div class="col-9 text-right">
                                                <p class="text-muted font-13 mb-0 font-weight-bold">Status, Community Rating</p>
                                                <!-- <h4 class="mb-0 font-20">4.55%</h4> -->
                                                <button class="btn btn-success status-cummunity-btn">Available</button>
                                                <p class="pt-2">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <span class="text-info"> ( 13 )</span>
                                                </p>
                                            </div>
                                            <!-- <div class="col-12">
                                                <div class="progress mt-4" style="height:6px;">
                                                    <div class="progress-bar progress-animated bg-pink" role="progressbar" style="max-width: 85%; border-radius:5px;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>  -->                                 
                                        </div>                                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="card-body border-bottom">
                                <div class="">
                                    <div class="row align-items-center">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-lg-1">
                                                    <div class="">
                                                        <i class="fa fa-clock-o station-view-bottom-r-btn"></i>
                                                    </div>                                                            
                                                </div> 
                                                <div class="col-sm-9 col-md-10 col-lg-11">
                                                    <h6 class="mt-0 station-view-bottom-title">Timings</h6>
                                                    <!-- <h5 class="text-muted mb-1 status-bottom-center-txt">24 / 7, All days of the Week</h5> -->
                                                    <h5 class="text-muted mb-1 status-bottom-center-txt"><?php echo (!empty($data->open_24_7)?($data->open_24_7 == 'yes'?'24 / 7, All days of the Week': ''): ''); ?></h5>
                                                    <!-- <p class="text-muted font-13 mb-0">8 AM - 9 PM, Monday - Friday</p> -->
                                                    <p class="text-muted font-13 mb-0">
                                                        <?php 
                                                            if(!empty($data->station_FromTimings) && !empty($data->station_ToTimings)){
                                                                $a = explode(':', $data->station_FromTimings);
                                                                $b = explode(':', $data->station_ToTimings);
                                                                echo $a[0].':'.$a[1].' - '.$b[0].':'.$b[1].', ';
                                                            } 
                                                            if (!empty($data->from_day_time) && !empty($data->from_day_time)) {
                                                                echo $data->from_day_time.' - ';
                                                                echo $data->to_day_time;
                                                            }                                                            
                                                        ?>
                                                    </p>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3"></div>  
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom">
                                <div class="">
                                    <div class="row align-items-center">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                          <div class="row">
                                              <div class="col-sm-3 col-md-2 col-lg-1">
                                                  <div class="">
                                                      <i class="fa fa-plug station-view-bottom-r-btn"></i>
                                                  </div>                                                            
                                              </div> 
                                              <div class="col-sm-9 col-md-10 col-lg-11">
                                                  <h6 class="mt-0 station-view-bottom-title">PlugType, Connectors</h6>
                                                  <h5 class="text-muted mb-1 status-bottom-center-txt">2 Connectors, Mennekes (Type 2, Tethered Connector)</h5>
                                                  <p class="text-muted font-13 mb-0">Over 2 KW, usually non-domestic socket type, Level 2: Medium (Over 2kW)</p>
                                              </div> 
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3"></div>  
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom">
                                <div class="">
                                    <div class="row align-items-center">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                          <div class="row">
                                              <div class="col-sm-3 col-md-2 col-lg-1">
                                                  <div class="">
                                                      <i class="fa fa-bank station-view-bottom-r-btn"></i>
                                                  </div>                                                            
                                              </div> 
                                              <div class="col-sm-9 col-md-10 col-lg-11">
                                                  <h6 class="mt-0 station-view-bottom-title">Provider</h6>
                                                  <!-- <h5 class="text-muted mb-1 status-bottom-center-txt">Tesla Motors (Worldwide)</h5> -->
                                                  <h5 class="text-muted mb-1 status-bottom-center-txt"><?php echo (!empty($data->station_Provider)? $data->station_Provider: ''); ?></h5>
                                                  <!-- <p class="text-muted font-13 mb-0">http://www.teslamotors.com</p> -->
                                              </div> 
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3"></div>  
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom">
                                <div class="">
                                    <div class="row align-items-center">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-lg-1">
                                                    <div class="">
                                                        <i class="fa fa-users station-view-bottom-r-btn"></i>
                                                    </div>                                                            
                                                </div> 
                                                <div class="col-sm-9 col-md-10 col-lg-11">
                                                    <h6 class="mt-0 station-view-bottom-title">Comments by Community</h6>
                                                    <h5 class="text-muted mb-1 status-bottom-center-txt">18</h5>
                                                    <br><br>
                                                    <p class="text-muted font-13 mb-0">Too busy, usually not Available - by<a href="#"> <u>Abdul on April 12, 2019 12:34 PM</u></a><i class="fa fa-star text-warning ml-3"></i><i class="fa fa-star text-warning ml-1"></i><i class="fa fa-star text-warning ml-1"></i><i class="fa fa-star text-warning ml-1"></i><i class="fa fa-star text-warning ml-1"></i></p>                                                         
                                                    <p class="text-muted font-13 mb-0">Too busy, usually not Available - by<a href="#"> <u>Dan   on April 12, 2019 12:34 PM</u></a><i class="fa fa-star text-warning ml-3"></i><i class="fa fa-star text-warning ml-1"></i><i class="fa fa-star text-warning ml-1"></i><i class="fa fa-star text-warning ml-1"></i><i class="fa fa-star text-warning ml-1"></i></p>
                                                    <p class="text-muted font-13 mb-0">Too busy, usually not Available - by<a href="#"> <u>John  on April 12, 2019 12:34 PM</u></a><i class="fa fa-star text-warning ml-3"></i><i class="fa fa-star text-warning ml-1"></i><i class="fa fa-star text-warning ml-1"></i><i class="fa fa-star text-warning ml-1"></i><i class="fa fa-star text-warning ml-1"></i></p>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->
</div><!-- container -->

<?php } else { redirect(base_url()); } ?>