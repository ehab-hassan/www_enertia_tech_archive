<style>
    

</style>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-clockpicker.min.css">



<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">

        <div class="offset-md-3 col-md-6 col-sm-12 col-xs-12">
            <h5 class="mt-0">Edit Station</h5>
            <div class="success-msg alert alert-success">Station updated successfully.</div>
            <form class="needs-validation" method="post" action="#" novalidate="" id="AddStation" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="station_Name">Station name</label>
                        <input type="text" class="form-control" name="station_Name" id="station_Name" placeholder="Station name" required="" value="<?php echo(!empty($data['station_Name']) ?  $data['station_Name'] : '');?>">                                            
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="searchAddress">Station Address</label>
                        <input type="text" class="form-control searchAddress" name="station_Address" id="searchAddress" placeholder="Station Address" required="" value="<?php echo(!empty($data['station_Address']) ?  $data['station_Address'] : '');?>">                                            
                        <input type="hidden" id="lat" name="station_Location_lat">
                        <input type="hidden" id="long" name="station_Location_long">
                    </div>    
                    <div class="col-md-12 mb-3"  >
                        <div id="searchAddressMap" style="height: 300px;"> </div>
                        <div id="infowindow-content">
                          <img src="" width="16" height="16" id="place-icon">
                          <span id="place-name"  class="title"></span><br>
                          <span id="place-address"></span>
                        </div>                                      
                    </div>  
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="station_Connectors">Station Plug*</label>
                        <select name="station_Connectors" id="station_Connectors" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" value="<?php echo(!empty($data['station_Connectors']) ?  $data['station_Connectors'] : '');?>">
                            <option value="">Station Plug</option>
                            <option value="2">Phase Type 2</option>
                            <option value="3">Phase Type 3</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="station_Power">Power</label>
                        <input type="text" class="form-control" name="station_Power" id="station_Power" placeholder="Power KWH" required="" value="<?php echo(!empty($data['station_Power']) ?  $data['station_Power'] : '');?>">                                            
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Station Time</label>
                    <div class="input-daterange input-group" id="Station_Open_Time">
                        <input type="text" class="form-control datetimepicker3" name="station_FromTimings" id="station_FromTimings" placeholder="Open Time" autocomplete="off" value="<?php echo(!empty($data['station_FromTimings']) ?  $data['station_FromTimings'] : '');?>">
                        <input type="text" class="form-control datetimepicker3" name="station_ToTimings" id="station_ToTimings" placeholder="Close Time"  autocomplete="off" value="<?php echo(!empty($data['station_ToTimings']) ?  $data['station_ToTimings'] : '');?>">
                    </div>
                </div> 

                <div class="form-row">
                    <div class="col-md-6 mb-3 for-mobile">
                        <label for="validationTooltip01">Station images</label>
                        <ul class="nav nav-pills profile-pills d-none">
                            <li>
                                <a href="#"><i class=" mdi mdi-file-image mx-2 text-primary"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="mdi mdi-camera mx-2 text-primary"></i></a>
                            </li>
                        </ul>
                        
                        <br><div class="btn btn-file"><span class="add_image">Add Images...</span>
                            <input type="file" name="station_images[]" id="images" multiple="multiple" accept="image/png, image/jpeg">
                        </div>
                        <div class="image_1_preview mt-3 images-preview">
                            <?php 
                                // if(!empty($data['station_Photos'])){
                                //     $count = sizeof($a);
                                //     print_r($a);
                                //     echo $count;
                                //     foreach ($a as $value) {
                                //         echo $value;
                                //     }
                                // } else{
                                //     echo 'error';
                                // }
                                // <span class='pip'>
                                //     <img class='imageThumb' src="+value+ " title="+key+">
                                //     <span class='remove mdi mdi-close'></span>
                                // </span>  
                                    $a = json_decode($data['station_Photos'], true);

                                echo($a[0]);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip05">Provider</label>
                        <textarea class="form-control" id="Provider" name="station_Provider" rows="2" placeholder="Provider" required="" value=""><?php echo(!empty($data['station_Provider']) ?  $data['station_Provider'] : '');?></textarea>                                           
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip05">Description</label>
                        <textarea class="form-control" id="Description" name="station_Description" rows="2" placeholder="Description" required=""><?php echo(!empty($data['station_Description']) ?  $data['station_Description'] : '');?></textarea>                                           
                    </div>
                </div>
                <button type="submit" class="btn btn-light mb-3 float-right">Submit</button>
            </form>
        </div>
    </div><!--end row-->
</div><!-- container -->
<?php //print_r($data); ?>
<?php //print_r(json_decode($data['station_Photos'])); ?>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // For add station
        var finalUrl = <?php echo $data['station_Photos']; ?>

        var stationName = $('#station_Name').val();
        var stationAddress = $('#searchAddress').val();
        var stationPlug = $('#station_Connectors').val();
        var stationPower = $('#station_Power').val();
        var stationFrom = $('#station_FromTimings').val();
        var stationTo = $('#station_ToTimings').val();
        var stationProvider = $('#Provider').val();
        var stationDescription = $('#Description').val();
        var stationPhotos = finalUrl;
        $('#AddStation').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: '<?php echo base_url(); ?>station/edit_station/<?php echo $data['station_ID']; ?>',
                method: 'post',
                dataType: 'json',
                data: $('#AddStation').serialize(),
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

        // For Time picker
        $('.datetimepicker3').clockpicker({
            donetext: 'Done',
            // twelvehour: true,
            init: function () {
            },
        }).find('input').change(function () {
            console.log(this.value);
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
                data: new FormData($("#AddStation")[0]),
                contentType: false,
                processData:false,
                success: function(response) {
                        $('.images-preview').empty();
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
    });
</script>