<style>
    .footer {
        display: none;
    }
</style>
<div class="container-fluid" >
    <div class="row">                    
        <div class="col-xl-12 map-area p-0">       
            <section class="position-relative mapDashboard">
                <div class="position-absolute dashboard-map-icon">
                    <a href="<?php echo base_url();?>station/add"><i class="mdi mdi-plus" title="Add Station"></i></a>
                    <i class="mdi mdi-format-list-bulleted station-list-btn" title="Station List"></i>
                    <i class="mdi mdi-account-outline" title="Profile"></i>
                </div>
                <div id="map" class="map-hieght"></div> 
            </section>                                                            
            <div class="user_legend">
                Legend: <i class="green mdi mdi-map-marker"></i> public | <i class="orange mdi mdi-map-marker"></i> Your
            </div>  

            <form class="form-horizontal col-md-4 col-sm-12 col-xs-12" role="form">
                <div class="form-group m-0">
                    <div class="input-group">
                        <div class="input-group-prepend show">
                            <button type="button" class="btn btn-primary dropdown-toggle" id="dropdown-toggle1" style="z-index: 0;">
                                <i class="mdi mdi-menu"></i>
                            </button>
                            <div class="dropdown-menu hide p-0" id="dropdown-toggle1-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 39px, 0px);">
                                <h5 class="fltter-heading"> <i class="mdi mdi-filter"></i> Filter Options <a href="#" class="float-right">Clear</a></h5>
                                <div class="accordion" id="accordionExample2">

                                    <div class="card mb-0">
                                        <div class="card-header" id="headingOne1">
                                            <h5 class="my-0">
                                                <button class="btn btn-link  none-link  w-100 t-left" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                                    Distance
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample2" style="">
                                            <div class=" font-13">
                                                <div class="checkbox my-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" checked="" id="customCheck3" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="customCheck3">Nearest</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="card mb-0">
                                        <div class="card-header" id="headingOne2">
                                            <h5 class="my-0">
                                                <button class="btn btn-link  none-link collapsed w-100 t-left" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                                    Plug Type
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample2" style="">
                                            <div class=" font-13 ">
                                                <div class="checkbox my-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"  id="customCheck1" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="customCheck1">CCS/SAE</label>
                                                    </div>
                                                </div>
                                                <div class="checkbox my-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"  id="customCheck2" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="customCheck2">CHAdeMO</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="card mb-0">
                                        <div class="card-header" id="headingOne3">
                                            <h5 class="my-0">
                                                <button class="btn btn-link  none-link collapsed w-100 t-left" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                                                    Power KWH
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne3" class="collapse" aria-labelledby="headingOne3" data-parent="#accordionExample2" style="">
                                            <div class=" font-13">
                                                <div class="checkbox my-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"  id="customCheck4" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="customCheck4">22 KW</label>
                                                    </div>
                                                </div>
                                                <div class="checkbox my-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"  id="customCheck5" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="customCheck5">44 KW</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="card mb-0">
                                        <div class="card-header" id="headingOne5">
                                            <h5 class="my-0">
                                                <button class="btn btn-link  none-link collapsed w-100 t-left" type="button" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
                                                    Min Rating
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne5" class="collapse" aria-labelledby="headingOne5" data-parent="#accordionExample2" style="">
                                            <div class=" font-13">
                                                <div class="p-2">
                                                    <select id="example-fontawesome">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>                                                              
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <input type="text" id="example-input1-group3 searchAddress" name="example-input1-group3" class="form-control" placeholder="Search for a Charging Location">
                        <input type="hidden" id="lat" name="station_Location_lat">
                        <input type="hidden" id="long" name="station_Location_long">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div> <!--end row--> 
            </form>                                  
        </div>    
    </div>
    <section class="stations-list-view">
        <i class="mdi mdi-close-circle-outline close-btn"></i>
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
                <div class="card mb-0">                                       
                    <div class="card-body stations-list"> 
                        <h5 class="mt-3">100 Stations Nearby</h5>
                        <!-- <div class="activity">
                            <img src="assets/images/download.jpg" alt="" class="img-activity" style="border-radius: 0px; width: 90px; height: 78%;">
                            <div class="time-item" style="margin-left: 50px;">
                                <div class="item-info">
                                    <div class="text-muted text-right font-10" style="position: absolute; right: 0;"><button class="btn btn-success">Available</button></div>
                                    <h5 class="mt-0 mb-0">Marsa Street Dubai Mrina, Rove Dubai Marina</h5>
                                    <p class="text-muted font-13 mb-0"><b>@ 3.4 KM with 20 minutes of estimated travel time</b></p>
                                    <p mb-0>1 Tesla connector up to 13 KW available for customers, sell pack.</p>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                        </div> -->

                        <?php
                            $link ='https://api.openchargemap.io/v2/poi/?output=json&latitude=%27+location.latitude+%27&longitude=%27+location.longitude';
                            $data = json_decode(file_get_contents($link), true);
                            foreach ($data as $key => $value) {
                                // echo $value['GeneralComments'];
                                echo    '<div class="activity">
                                            <img src="assets/images/download.jpg" alt="" class="img-activity" style="border-radius: 0px; width: 90px; height: 78%;">
                                            <div class="time-item" style="margin-left: 50px;">
                                                <div class="item-info">
                                                    <div class="text-muted text-right font-10" style="position: absolute; right: 0;"><button class="btn btn-success">Available</button></div>
                                                    <h5 class="mt-0 mb-0">'.$value['AddressInfo']['AddressLine1'].'</h5>
                                                    <p class="text-muted font-13 mb-0"><b>@ 3.4 KM with 20 minutes of estimated travel time</b></p>
                                                    <p mb-0>'.$value['GeneralComments'].'</p>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                        </div>';
                            }
                        ?>
                        
                        <div class="activity">
                            <img src="assets/images/download.jpg" alt="" class="img-activity" style="border-radius: 0px; width: 90px; height: 78%;">
                            <div class="time-item" style="margin-left: 50px;">
                                <div class="item-info">
                                    <div class="text-muted text-right font-10" style="position: absolute; right: 0;"><button class="btn btn-danger">Booked</button></div>
                                    <h5 class="mt-0 mb-0">Marsa Street Dubai Mrina, Rove Dubai Marina</h5>
                                    <p class="text-muted font-13 mb-0"><b>@ 3.4 KM with 20 minutes of estimated travel time</b></p>
                                    <p mb-0>1 Tesla connector up to 13 KW available for customers, sell pack.</p>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>                                       
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
            <!-- <div class="col-md-12 col-lg-12 col-xl-13 p-0">
                <div class="card mb-0">                                       
                    <div class="card-body"> 
                        <h5 class="mt-3">Fillter Station List</h5>
                        <div class="activity">
                            <img src="assets/images/users/user-3.jpg" alt="" class="img-activity">
                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted text-right font-10"><a href="#" class="text-info">[more info]</a></div>
                                    <h5 class="mt-0">Task finished</h5>
                                    <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>

                            <img src="assets/images/users/user-3.jpg" alt="" class="img-activity">                                                                                                            
                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted text-right font-10"><a href="#" class="text-info">[more info]</a></div>
                                    <h5 class="mt-0">Task Overdue</h5>
                                    <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>

                            <img src="assets/images/users/user-3.jpg" alt="" class="img-activity">
                            <div class="time-item ">
                                <div class="item-info">
                                    <div class="text-muted text-right font-10"><a href="#" class="text-info">[more info]</a></div>
                                    <h5 class="mt-0">Task finished</h5>
                                    <p class="text-muted font-13">There are many variations of passages of Lorem Ipsum available.
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>

                            <img src="assets/images/users/user-3.jpg" alt="" class="img-activity">
                            <div class="time-item ">
                                <div class="item-info">
                                    <div class="text-muted text-right font-10"><a href="#" class="text-info">[more info]</a></div>
                                    <h5 class="mt-0">New Comment</h5>
                                    <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>

                            <img src="assets/images/users/user-2.jpg" alt="" class="img-activity"> 
                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted text-right font-10"><a href="#" class="text-info">[more info]</a></div>
                                    <h5 class="my-0">Task Overdue</h5>
                                    <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>      
                            <div class="dropdown-divider"></div>

                        </div>
                    </div>                                       
                </div>
            </div> -->
        </div>   
        
    </section>
</div>            
