<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<!-- Page Content-->
<div class="wrapper">
    <div class="container-fluid">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12"></div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <h3 class="pl-2">Add Staion:</h3> -->
                        <div class="container">
                            <div class="success-msg alert alert-success">Station Updated successfully.</div>
                        </div>
                        <form id="UpdateStation" class="form-horizontal form-wizard-wrapper" enctype="multipart/form-data">
                            <fieldset class="first-slide">
                                <div class="wizard-form-heading mb-3">Add Station : Name and Address</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <label for="txtFirstNameBilling" class="col-lg-12 col-form-label text-left pl-0">Enter Station Name</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <input id="station_Name" name="station_Name" type="text" class="form-control" value="<?php echo !empty($data['station_Name'])? $data['station_Name']: ''; ?>">
                                                    <input id="station_id" name="station_id" type="hidden" class="form-control" value="<?php echo !empty($data['station_ID'])? $data['station_ID']: ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="container">
                                            <label for="searchAddress">Enter Station Address</label>
                                            <input type="text" class="form-control searchAddress" name="station_Address" id="station_Address" required="required" value="<?php echo !empty($data['station_Address'])? $data['station_Address']: ''; ?>">                                            
                                            <input type="hidden" id="lat" name="station_Location_lat">
                                            <input type="hidden" id="long" name="station_Location_long">
                                        </div>
                                    </div>    
                                    <div class="col-md-12 mb-3">
                                        <div class="container">
                                            <p class="col-form-label text-info font-12">Alternately, You can move the marker on the MAP to determine the address</p>
                                            <div id="searchAddressMap" style="height: 300px;"> </div>
                                            <div id="infowindow-content">
                                              <img src="" width="16" height="16" id="place-icon">
                                              <span id="place-name"  class="title"></span><br>
                                              <span id="place-address"></span>
                                            </div>  
                                        </div>                                    
                                    </div> 
                                </div>
                                <div class="container">
                                    <button type="button" class="btn btn-info d-block first-next-btn slides-btn">Next</button>
                                </div>
                            </fieldset>

                            <fieldset class="second-slide">
                                <div class="wizard-form-heading mb-3">Add Station : Provider and Access</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <label for="txtFirstNameShipping" class="col-lg-12 col-form-label text-left pl-0">Select Network / Provider</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <input id="provider_name" name="provider_name" type="text" class="form-control" value="<?php echo !empty($data['station_Provider'])? $data['station_Provider']: ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="container">
                                            <label for="txtCompanyShipping" class="col-lg-12 col-form-label text-left pl-0">Select Timing - From Day</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <input id="from_day_time" name="from_day_time" type="text" class="form-control" value="<?php echo !empty($data['from_day_time'])? $data['from_day_time']: ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container">
                                            <div class="form-group row">
                                                <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left">Select Timing - To Day</label>
                                                <div class="col-lg-12">
                                                    <input id="to_day_time" name="to_day_time" type="text" class="form-control" value="<?php echo !empty($data['to_day_time'])? $data['to_day_time']: ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="container">
                                            <label for="txtCompanyShipping" class="col-lg-12 col-form-label text-left pl-0">Select Timing - From Time</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <input id="from_time" name="from_time" type="text" class="form-control datetimepicker3" value="<?php echo !empty($data['station_FromTimings'])? $data['station_FromTimings']: ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container">
                                            <div class="form-group row">
                                                <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left">Select Timing - To Time</label>
                                                <div class="col-lg-12" id="Station_Open_Time">
                                                    <input id="to_time" name="to_time" type="text" class="form-control datetimepicker3" value="<?php echo !empty($data['station_ToTimings'])? $data['station_ToTimings']: ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 pt-4">
                                        <div class="container">
                                            <div class="form-group row">
                                                <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left pr-0">24 / 7 Open
                                                    <button type="button" class="btn btn-sm btn-toggle focus <?php echo ($data['open_24_7'] == 'no' ? '': 'active'); ?>" data-toggle="button" aria-pressed="<?php echo !empty($data['open_24_7'])? ($data['open_24_7'] == 'yes' ? 'true': 'false'): ($data['open_24_7'] == 'no' ? 'false': 'true'); ?>" autocomplete="off" id="open24">
                                                        <div class="handle"></div>
                                                    </button>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="col-md-4 pt-4">
                                        <div class="container">
                                            <div class="form-group row">
                                                <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left pr-0" style="padding-left: 40px;">Parking
                                                    <button type="button" class="btn btn-sm btn-toggle float-right focus active" data-toggle="button" aria-pressed="<?php echo !empty($data['parking'])? ($data['parking'] == 'yes' ? 'true': 'false'): ($data['parking'] == 'no' ? 'false': 'true'); ?>" autocomplete="off" id="parking">
                                                        <div class="handle"></div>
                                                    </button>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-4">
                                        <div class="container">
                                            <div class="form-group row float-right">
                                                <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left">WiFi
                                                    <button type="button" class="btn btn-sm btn-toggle focus active" data-toggle="button" aria-pressed="<?php echo !empty($data['wifi'])? ($data['wifi'] == 'yes' ? 'true': 'false'): ($data['wifi'] == 'no' ? 'false': 'true'); ?>" autocomplete="off" id="wifi">
                                                        <div class="handle"></div>
                                                    </button>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="container">
                                            <label for="txtCompanyShipping" class="col-lg-12 col-form-label text-left pl-0">Payments</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <input name="payments" id="payments" type="text" class="form-control" value="<?php echo !empty($data['payments'])? $data['payments']: ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container">
                                            <div class="form-group row">
                                                <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left">Price</label>
                                                <div class="col-lg-12">
                                                    <input id="price" name="price" type="text" class="form-control" value="<?php echo !empty($data['price'])? $data['price']: ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <label for="txtFirstNameShipping" class="col-lg-3 col-form-label text-left pl-0">Access Type</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <input id="access_type" name="access_type" type="text" class="form-control" value="<?php echo !empty($data['access_type'])? $data['access_type']: ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-info d-block second-back-btn slides-btn">Back</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-info d-block second-skip-btn slides-btn">Skip</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-info d-block second-next-btn slides-btn">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="third-slide">
                                <div class="wizard-form-heading mb-3">Add Station : Connectors and Plug Type</div>
                                <?php 
                                    if(!empty($data['plugs'])){ 
                                    $plug = json_decode($data['plugs']); 
                                    // echo count($a);
                                    foreach ($plug as $key => $value) {
                                ?>
                                   <section style="margin-bottom: 120px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="container">
                                                <label for="txtFirstNameBilling" class="col-lg-12 col-form-label text-left pl-0">Connection | Plug Type</label>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <input id="plug_type" name="plug_type[]" type="text" class="form-control" value="<?php echo !empty($value->plug_type)? $value->plug_type: ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="container">
                                                <label for="txtCompanyShipping" class="col-lg-12 col-form-label text-left pl-0">Chargin Level - Power (KW)</label>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <input id="charge_level" name="charge_level[]" type="text" class="form-control" value="<?php echo !empty($value->charge_level)? $value->charge_level: ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="container">
                                                <div class="form-group row">
                                                    <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left">Supply Type</label>
                                                    <div class="col-lg-12">
                                                        <input id="supply_type" name="supply_type[]" type="text" class="form-control" value="<?php echo !empty($value->supply_type)? $value->supply_type: ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="container">
                                                <label for="txtCompanyShipping" class="col-lg-12 col-form-label text-left pl-0">Max Current and Voltage</label>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <input id="max_voltage" name="max_voltage[]" type="text" class="form-control" value="<?php echo !empty($value->max_voltage)? $value->max_voltage: ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="container">
                                                <div class="form-group row">
                                                    <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left">Number of Points</label>
                                                    <div class="col-lg-12">
                                                        <input id="no_of_points" name="no_of_points[]" type="text" class="form-control" value="<?php echo !empty($value->no_of_points)? $value->no_of_points: ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="float-right mr-3 add_plug">
                                        <i class="fa fa-plug station-view-bottom-r-btn add_plug_icon" title="Add Plug"></i>
                                    </div>
                                    <div class="float-right mr-2 remove_plug">
                                        <i class="fa fa-minus-circle station-view-bottom-r-btn remove_plug_icon" title="Remove Plug"></i>
                                    </div>  
                                </section>     

                                <?php }} else { ?>
                                <section>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="container">
                                                <label for="txtFirstNameBilling" class="col-lg-12 col-form-label text-left pl-0">Connection | Plug Type</label>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <input id="plug_type" name="plug_type[]" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="container">
                                                <label for="txtCompanyShipping" class="col-lg-12 col-form-label text-left pl-0">Chargin Level - Power (KW)</label>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <input id="charge_level" name="charge_level[]" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="container">
                                                <div class="form-group row">
                                                    <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left">Supply Type</label>
                                                    <div class="col-lg-12">
                                                        <input id="supply_type" name="supply_type[]" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="container">
                                                <label for="txtCompanyShipping" class="col-lg-12 col-form-label text-left pl-0">Max Current and Voltage</label>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <input id="max_voltage" name="max_voltage[]" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="container">
                                                <div class="form-group row">
                                                    <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left">Number of Points</label>
                                                    <div class="col-lg-12">
                                                        <input id="no_of_points" name="no_of_points[]" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="float-right mr-3 add_plug">
                                        <i class="fa fa-plug station-view-bottom-r-btn add_plug_icon" title="Add Plug"></i>
                                    </div>
                                    <div class="float-right mr-2 remove_plug">
                                        <i class="fa fa-minus-circle station-view-bottom-r-btn remove_plug_icon" title="Remove Plug"></i>
                                    </div>  
                                </section>
                            <?php } ?>

                                <!-- For append plug sections in this div -->
                                <div class="add_plug_section"></div>                                                          
                                
                                <div class="row" style="margin-top: 80px;">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <label for="txtFirstNameShipping" class="col-lg-12 col-form-label text-left pl-0">General Comments | Description</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <textarea id="general_comments" name="general_comments" class="form-control" rows="4"><?php echo !empty($data['general_comments'])? $data['general_comments']: ''; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-info d-block third-back-btn slides-btn">Back</button>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-info d-block third-next-btn slides-btn">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="fourth-slide">
                                <div class="wizard-form-heading mb-3">Add Station : Photos and Videos</div>
                                <div class="row">
                                    <div class="col-md-6 desktop-view">
                                        <div class="container">
                                            <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left pl-0">Add Photos</label>
                                            <div class="gallery-icon-wrapper">
                                                <div class="btn btn-file btn-gallery">
                                                    <span class="add_image fa fa-file-image-o"></span>
                                                    <input type="file" name="station_images[]" id="images" multiple="multiple" accept="image/png, image/jpeg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 desktop-view">
                                        <div class="container">
                                            <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left pl-0">Add Video</label>
                                            <div class="gallery-icon-wrapper">
                                                <div class="btn btn-file btn-gallery">
                                                    <span class="add_image mdi mdi-movie"></span>
                                                    <input type="file" name="station_images2[]" id="images2" multiple="multiple" accept="image/png, image/jpeg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4 mobile-camera">
                                        <div class="container">
                                            <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left pl-0">Open Mobile Camera</label>
                                            <div class="gallery-icon-wrapper">
                                                <div class="btn btn-file btn-gallery">
                                                    <span class="mdi mdi-camera"></span>
                                                    <input type="file" name="station_images[]" id="images" multiple="multiple" accept="image/png, image/jpeg" capture="camera">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4 mobile-camera">
                                        <div class="container">
                                            <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left pl-0">Upload</label>
                                            <div class="">
                                                <div class="btn btn-file pl-0" style="background: transparent !important;">
                                                    <span class="fa fa-cloud-upload station-view-bottom-r-btn"></span>
                                                    <input type="file" name="station_images2[]" id="images2" multiple="multiple" accept="image/png, image/jpeg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <div class="container">
                                            <label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left pl-0">Files Attached</label>
                                            <div class="image_1_preview mt-3 images-preview">
                                                <?php 
                                                    if (!empty($data['station_Photos'])) {
                                                        $images = json_decode($data['station_Photos']);
                                                        $image = json_decode($images);
                                                        foreach ($image as $key => $value) {
                                                            // echo $value;

                                                            echo '<span class="pip">
                                                                    <img class="imageThumb" src="'.$value.'">
                                                                    <span class="remove mdi mdi-close"></span>
                                                                </span>';
                                                        }
                                                    }
                                                    // print_r($data['station_Photos']);
                                                    // echo $image;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-info d-block fourth-back-btn slides-btn">Back</button>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-info d-block slides-btn">Finish and Update</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12"></div>
        </div><!--end row-->
    </div><!-- container -->
</div>
<!-- end page-wrapper -->    

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // For add station
        var finalUrl = <?php print_r(json_decode($data['station_Photos'])); ?>;
        console.log(finalUrl);

        $('#UpdateStation').submit(function(e){
            e.preventDefault();
            var open24 = $('#open24').attr('aria-pressed');
              var parking = $('#parking').attr('aria-pressed');
              var wifi = $('#wifi').attr('aria-pressed');
              var stationPhotos = finalUrl;
              var plugType = $('[name="plug_type[]"]').map(function(){return $(this).val();}).get();
              var chargeLevel = $('[name="charge_level[]"]').map(function(){return $(this).val();}).get();
              var supplyType = $('[name="supply_type[]"]').map(function(){return $(this).val();}).get();
              var maxVoltage = $('[name="max_voltage[]"]').map(function(){return $(this).val();}).get();
              var noOfPoints = $('[name="no_of_points[]"]').map(function(){return $(this).val();}).get();
              var plugs = [];
              $.each(plugType, function(key,value){
                var plug = {
                          plug_type : plugType[key],
                          charge_level : chargeLevel[key],
                          supply_type : supplyType[key],
                          max_voltage : maxVoltage[key],
                          no_of_points : noOfPoints[key],
                        };
                plugs.push(plug);
              });

            $.ajax({
                url: '<?php echo base_url(); ?>station/edit_station/<?php echo $data['station_ID']; ?>',
                method: 'post',
                dataType: 'json',
                data: $('#UpdateStation').serialize()+'&station_Photos='+JSON.stringify(finalUrl)+'&plug='+JSON.stringify(plugs)+'&open24='+open24+'&parking='+parking+'&wifi='+wifi,
                // contentType: false,
                // processData:false,
                success: function(response) {
                    console.log(response);
                    if(response == 1) {
                        $('.success-msg').slideDown().delay(2000).slideUp();
                    }
                    console.log(finalUrl);
                }
            });
        });

        // For responsive
        if($(window).width() <= 575){
            $('.btn-file').addClass('mdi mdi-camera mx-2 text-primary');
        }

        // For show image in front
        $('#images').on('change', function(e) {
            var url = [];
            e.preventDefault();
            $.ajax({
                url: '<?php echo base_url(); ?>station/ImagesUpload',
                method: 'post',
                data: new FormData($("#UpdateStation")[0]),
                contentType: false,
                processData:false,
                success: function(response) {
                        $('.images-preview').empty();
                        finalUrl = [];
                    $.each($.parseJSON(response), function(key, value) {
                        url.push({key : key,value:value});
                        $('.images-preview').append("<span class='pip'>" +
                          "<img class='imageThumb' src="+value+ " title="+key+">" +
                          "<span class='remove mdi mdi-close'></span></span>");
                    });
                    $.each(url, function(index, value) {
                        finalUrl.push(value.value);
                    });
                    $(".remove").click(function(){
                        var current_image = $(this).parent(".pip").find('img').attr('title');
                        $(this).parent(".pip").remove();
                        $('#images').val('');
                        var rowIndex=-1;
                        $.each(url, function(index, value) {
                            console.log(value);
                            if(value.key==current_image){
                                rowIndex=index;
                            }
                        });
                        console.log('key '+ rowIndex);
                        if(rowIndex >= 0){
                            url.splice(rowIndex,1);
                        }
                        finalUrl.length = 0;
                        $.each(url, function(index, value) {
                            finalUrl.push(value.value);
                        });
                    });
                }
            });
        });

        $(".remove").click(function(){
            $(this).closest('.pip').remove();
        });

    });
</script>