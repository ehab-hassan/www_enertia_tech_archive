<div class="container-fluid">                
    <!-- Page-Title -->                
    <div class="row">                    
        <div class="col-sm-12">                        
            <div class="page-title-box">                                                       
                <h4 class="page-title">Dashboard</h4>                        
            </div>                    
        </div>                
    </div>                
    <!-- end page title end breadcrumb -->     

    <!-- For search bar -->
    <div class="row mb-3">                    
        <div class="col-sm-6 col-xl-6">                        
            <label>Traveling From - Starting Point</label>                        
            <div class="input-group">                          
                <span class="input-group-addon search-bar-icon">
                    <i class="fa fa-map-marker"></i>
                </span>                          
                <input id="search" type="text" class="form-control search-bar" name="from">                        
            </div>                    
        </div>   

        <div class="col-sm-6 col-xl-6">                        
            <label>Traveling To - Ending Point</label>                        
            <div class="input-group">                          
                <span class="input-group-addon search-bar-icon">
                    <i class="fa fa-map-marker"></i>
                </span>                          
                <input id="search" type="text" class="form-control search-bar" name="to">                        
            </div>                    
        </div>                                     
    </div>  

    <div class="row">                    
        <div class="col-xl-12">                        
            <div class="card">                            
                <div class="card-body">                                
                    <h5 class="mt-0">Top EV Stations NearBy</h5>                                
                    <div class="row">                                    
                        <div class="col-lg-9 col-xl-9 border-right">                                        
                            <div class="card shadow-none mb-0 ">                                            
                                <div class="card-body"> 
                                     <div class="ajax_loder">
                                        <div class="status">
                                            <div class="spinner"></div>
                                        </div>
                                    </div>
                                    <div id="map" class="morris-chart overview-chart"></div>                                            
                                </div>                                        
                            </div>                                                                           
                        </div> 

                        <div class="col-md-12 col-lg-3 col-xl-3">                                                                                
                            <div class="card mb-0 overview shadow-none">                                            
                                <div class="card-body border-bottom">                                                
                                    <div class="">                                                    
                                        <div class="row align-items-center">                                                        
                                            <div class="col-4">                                                            
                                                <div class="overview-content">                                                                
                                                    <i class="mdi mdi-share-variant  text-success"></i>                                                            
                                                </div>                                                                                                                    
                                            </div>                                                         
                                            <div class="col-8 text-right">                                                            
                                                <p class="text-muted font-13 mb-0">Stations Nearby</p>                                                            
                                                <h4 class="mb-0 font-20">16</h4>                                                        
                                            </div>                                                                                                                                                       
                                        </div>                                                
                                    </div>                                            
                                </div>                                            
                                <div class="card-body border-bottom">                                                
                                    <div class="">                                                    
                                        <div class="row  align-items-center">                                                        
                                            <div class="col-4">                                                            
                                                <div class="overview-content">                                                                
                                                    <i class="mdi mdi-gesture-double-tap  text-purple"></i>                                                            
                                                </div>                                                                                                                    
                                            </div>                                                         
                                            <div class="col-8 text-right">                                                            
                                                <p class="text-muted font-13 mb-0">Nearest Station</p>                                                            
                                                <h4 class="mb-0 font-20">JBR @ 2 KM</h4>                                                        
                                            </div>                                                                                                                                                        
                                        </div>                                                
                                    </div>                                            
                                </div>                                            
                                <div class="card-body border-bottom">                                                
                                    <div class="">                                                    
                                        <div class="row align-items-center">                                                        
                                            <div class="col-4">                                                            
                                                <div class="overview-content">                                                                
                                                    <i class="mdi mdi-earth text-warning"></i>                                                            
                                                </div>                                                                                                                    
                                            </div>                                                         
                                            <div class="col-8 text-right">                                                            
                                                <p class="text-muted font-13 mb-0">Charging Units</p>                                                            
                                                <h4 class="mb-0 font-20">51 CUs</h4>                                                        
                                            </div>                                                                                 
                                        </div>                                                
                                    </div>                                            
                                </div>                                            
                                <div class="card-body">                                                
                                    <div class="">                                                    
                                        <div class="row  align-items-center">                                                        
                                            <div class="col-4">                                                            
                                                <div class="overview-content">                                                                
                                                    <i class="mdi mdi-access-point text-pink"></i>                                                            
                                                </div>                                                                                                                    
                                            </div>                                                         
                                            <div class="col-8 text-right">                                                            
                                                <p class="text-muted font-13 mb-0">Availability</p>                                                            
                                                <h4 class="mb-0 font-20"> 4 Available</h4>                                                                                                                    
                                            </div>                                                        
                                            <div class="col-12">                                                            
                                                <div class="progress mt-4" style="height:6px;">                                                                
                                                    <div class="progress-bar progress-animated bg-pink" role="progressbar" style="max-width: 85%; border-radius:5px;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>                                                            
                                                </div>                                                        
                                            </div>                                                                                      
                                        </div>                                                                                                    
                                    </div>                                            
                                </div>                                        
                            </div>                                    
                        </div>                                
                    </div>                                                               
                </div>                        
            </div>                    
        </div>                                        
    </div>
    <!--end row-->   

    <div class="row">                    
        <div class="col-md-12 col-lg-6 col-xl-3">                        
            <div class="card">                            
                <div class="card-body donut">                                
                    <h5 class="mt-0">Charging Units</h5>                                 
                    <div id="animating-donut" class="ct-chart ct-golden-section mb-3 summary-chart"></div>                                
                    <ul class="list-unstyled list-inline text-center">                                    
                                                     
                        <li class="list-inline-item mt-2">                                        
                            <span class="text-muted font-13">
                                <i class="mdi mdi-checkbox-blank-circle mr-2 text-danger"></i>Used Units
                            </span>                                    
                        </li>                                    
                        <li class="list-inline-item mt-2">                                        
                            <span class="text-muted font-13">
                                <i class="mdi mdi-checkbox-blank-circle mr-2 text-success"></i>Total Units
                            </span>                                    
                        </li>                                                                       
                    </ul>                                                                                                                               
                </div>                        
            </div>                    
        </div> 

        <div class="col-md-12  col-lg-6 col-xl-6">                        
            <div class="card">                            
                <div class="card-body">                                
                    <h5 class="mt-0">My Car - Tesla Model X</h5>                                
                    <div class="row">                                    
                        <div class="col-md-12 col-lg-12 car-section">                                        
                            <img src="<?php echo base_url(); ?>assets/images/my-car.png" class="car-img">                                    
                        </div>                                    
                    </div>                                                            
                </div>                        
            </div>                    
        </div>   

        <div class="col-md-12 col-xl-3">                        
            <div class="card bg-primary text-white income income-section">                                                            
                <div class="card-body">                                
                    <h5 class="mt-0 text-black">Power Consumption Versus Mileage</h5>                                
                    <div class="month-income">                                                                           
                        <h1 class="my-4">
                            <i class="mdi mdi-wallet  mr-3"></i>$ 83.50
                        </h1>                                    
                        <span class="">Last Month : $65.50</span>                                    

                        <div class="mt-4">                                        
                            <span class="peity-bar" data-peity='{ "fill": ["#009659", "#009659"]}' data-width="100%" data-height="162">1,2,3,4,3,6,3,5,3,8,4,2,6,3,5,3,8,4,2,5,2,3,4,3,6</span>                                     
                        </div>                                                               
                    </div>                                                             
                </div>                        
            </div>                                                
        </div>                
    </div>
    <!--end row--> 

    <div class="row">                    
        <div class="col-lg-12 col-sm-12">                        
            <div class="card">                            
                <div class="card-body">                                
                    <h5 class="pb-3 mt-0" id="test">List of all stations - Near by </h5>                                           
                    <div class="table-responsive">                                    
                        <table id="datatable" class="table table-bordered">                                        
                            <thead>                                        
                                <tr>                                            
                                    <th>Station Location</th>                                            
                                    <th>Distance</th>                                            
                                    <th>Availability</th>                                            
                                    <th>Rating</th>                                            
                                    <th>Last Verified</th>                                            
                                    <th>Plug / Power</th>                                        
                                </tr>                                        
                            </thead>                                        
                            <tbody>                                        
                                <tr>                                            
                                    <td class="toTop">Home And News</td>                                            
                                    <td>2541</td>                                            
                                    <td>1214</td>                                            
                                    <td>42.5%</td>                                            
                                    <td>6969</td>                                            
                                    <td>10</td>                                        
                                </tr>                                        
                                <tr>                                            
                                    <td class="toTop">Charts</td>                                            
                                    <td>1001</td>                                            
                                    <td>2213</td>                                            
                                    <td>61.5%</td>                                            
                                    <td>2154</td>                                            
                                    <td>16</td>                                        
                                </tr>                                        
                                <tr>                                            
                                    <td>Table And News</td>                                            
                                    <td>5514</td>                                            
                                    <td>5878</td>                                            
                                    <td>21.5%</td>                                            
                                    <td>2201</td>                                            
                                    <td>02</td>                                        
                                </tr>                                        
                                    <tr>                                            
                                        <td>Dashboard
                                    </td>                                            
                                    <td>3546
                                    </td>                                            
                                    <td>4521
                                    </td>                                            
                                    <td>54.3%
                                    </td>                                            
                                    <td>2451
                                    </td>                                            
                                    <td>09
                                    </td>                                        
                                </tr>                                        
                                <tr>                                            
                                    <td>Card.html
                                    </td>                                            
                                    <td>6514
                                    </td>                                            
                                    <td>841
                                    </td>                                            
                                    <td>74.2%
                                    </td>                                            
                                    <td>5101
                                    </td>                                            
                                    <td>14
                                    </td>                                        
                                </tr>                                        
                                <tr>                                            
                                    <td>Alerts.html
                                    </td>                                            
                                    <td>5422
                                    </td>                                            
                                    <td>6688
                                    </td>                                            
                                    <td>81.9%
                                    </td>                                            
                                    <td>5849
                                    </td>                                            
                                    <td>13
                                    </td>                                        
                                </tr>                                        
                                <tr>                                            
                                    <td>Tool-tip
                                    </td>                                            
                                    <td>3522
                                    </td>                                            
                                    <td>1204
                                    </td>                                            
                                    <td>11.5%
                                    </td>                                            
                                    <td>3187
                                    </td>                                            
                                    <td>14
                                    </td>                                        
                                </tr>                                        
                                <tr>                                            
                                    <td>Datatable
                                    </td>                                            
                                    <td>2144
                                    </td>                                            
                                    <td>102
                                    </td>                                            
                                    <td>21.5%
                                    </td>                                            
                                    <td>2201
                                    </td>                                            
                                    <td>02
                                    </td>                                        
                                </tr>                                        
                                <tr>                                            
                                    <td>Form-Editor
                                    </td>                                            
                                    <td>2001
                                    </td>                                            
                                    <td>8421
                                    </td>                                            
                                    <td>19.1%
                                    </td>                                            
                                    <td>3214
                                    </td>                                            
                                    <td>09
                                    </td>                                        
                                </tr>                                        
                                <tr>                                            
                                    <td>Calender
                                    </td>                                            
                                    <td>6514
                                    </td>                                            
                                    <td>302
                                    </td>                                            
                                    <td>44.5%
                                    </td>                                            
                                    <td>2039
                                    </td>                                            
                                    <td>21
                                    </td>                                        
                                    </tr>                                         
                                    <tr>                                            
                                        <td>Invoice
                                    </td>                                            
                                    <td>3341
                                    </td>                                            
                                    <td>1024
                                    </td>                                            
                                    <td>38.5%
                                    </td>                                            
                                    <td>3401
                                    </td>                                            
                                    <td>18
                                    </td>                                        
                                </tr>                                        
                                <tr>                                            
                                    <td>Tour.html
                                    </td>                                            
                                    <td>3211
                                    </td>                                            
                                    <td>2230
                                    </td>                                            
                                    <td>38.0%
                                    </td>                                            
                                    <td>8455
                                    </td>                                            
                                    <td>03
                                    </td>                                        
                                </tr>                                        
                                <tr>                                            
                                    <td>Login And Error
                                    </td>                                            
                                    <td>8879
                                    </td>                                            
                                    <td>998
                                    </td>                                            
                                    <td>21.5%
                                    </td>                                            
                                    <td>2201
                                    </td>                                            
                                    <td>02
                                    </td>                                        
                                </tr>                                        
                                <tr>                                            
                                    <td>Profile
                                    </td>                                            
                                    <td>2254
                                    </td>                                            
                                    <td>2841
                                    </td>                                            
                                    <td>71.2%
                                    </td>                                            
                                    <td>1444
                                    </td>                                            
                                    <td>09
                                    </td>                                        
                                </tr>                                        
                                <tr>                                            
                                    <td>Google Map
                                    </td>                                            
                                    <td>55
                                    </td>                                            
                                    <td>520
                                    </td>                                            
                                    <td>23.5%
                                    </td>                                            
                                    <td>9969
                                    </td>                                            
                                    <td>12
                                    </td>                                        
                                </tr>                                                                                          
                            </tbody>                                    
                        </table>                                                    
                    </div>                        
                                       
                </div>                        
            </div>                    
        </div>                
    </div>
<!--end row-->            
</div>