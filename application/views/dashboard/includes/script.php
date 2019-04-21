
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/js/waves.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>        

<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>    

<script src="<?php echo base_url(); ?>assets/plugins/parsleyjs/parsley.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/pages/jquery.form-validation.init-.js"></script>        

<script src="<?php echo base_url(); ?>assets/plugins/rating/jquery.barrating.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/pages/jquery.rating.js"></script>  

<script src="<?php echo base_url(); ?>assets/plugins/dropify/js/dropify.min.js"></script>  

<!-- <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>         -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>          -->
<script src="<?php echo base_url(); ?>assets/pages/jquery.form-advanced.init.js"></script>         
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>         

<script src="<?php echo base_url(); ?>assets/js/mdb.min.js"></script>      

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" defer=""></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script type="text/javascript" src="../assets/js/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.form-wizard.init.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.steps.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src=""></script>
<script type="text/javascript" defer="">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
  }
  function triggerHtmlEvent(element, eventName) {
    var event;
    if (document.createEvent) {
    event = document.createEvent('HTMLEvents');
    event.initEvent(eventName, true, true);
    element.dispatchEvent(event);
    } else {
    event = document.createEventObject();
    event.eventType = eventName;
    element.fireEvent('on' + event.eventType, event);
    }
  }

  jQuery('.lang-select').click(function() {
    var theLang = jQuery(this).attr('data-lang');
    jQuery('.goog-te-combo').val(theLang);
    sessionStorage.setItem("theLang", theLang);

    //alert(jQuery(this).attr('href'));
    window.location = jQuery(this).attr('href');
    location.reload();
  });
  if (sessionStorage.getItem("theLang")=='en') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>   ');
  }
  if (sessionStorage.getItem("theLang")=='hi') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/Hindi_flag.svg" class="ml-2" height="16" alt=""/>   ');
  }
  if (sessionStorage.getItem("theLang")=='ur') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/Urdu_flag.png" class="ml-2" height="16" alt=""/>   ');
  }
  if (sessionStorage.getItem("theLang")=='de') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/germany_flag.jpg" class="ml-2" height="16" alt=""/>   ');
  }
  if (sessionStorage.getItem("theLang")=='fr') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/french_flag.jpg" class="ml-2" height="16" alt=""/>   ');
  }
  if (sessionStorage.getItem("theLang")=='es') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/spain_flag.jpg" class="ml-2" height="16" alt=""/>   ');
  }
  if (sessionStorage.getItem("theLang")=='vi') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/Vietnamese_flag.png" class="ml-2" height="16" alt=""/>   ');
  }
  if (sessionStorage.getItem("theLang")=='pt') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/Portuguese_flag.png" class="ml-2" height="16" alt=""/>   ');
  }
  if (sessionStorage.getItem("theLang")=='ar') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/Arabic_Flag.svg" class="ml-2" height="16" alt=""/>   ');
  }
  if (sessionStorage.getItem("theLang")=='zh-CN') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/Chinese_flag.png" class="ml-2" height="16" alt=""/>   ');
  }
  if (sessionStorage.getItem("theLang")=='ms') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/Malay_flag.png" class="ml-2" height="16" alt=""/>   ');
  }
  if (sessionStorage.getItem("theLang")=='ru') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/Russian_flag.png" class="ml-2" height="16" alt=""/>   ');
  }
  if (sessionStorage.getItem("theLang")=='nl') {
    $('.lang_append').html('<img src="<?php echo base_url(); ?>assets/images/flags/Dutch_flag.png" class="ml-2" height="16" alt=""/>   ');
  }
</script>
<!-- App js -->        
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>  
<script>    

  /*For click on station to redirect on map*/
  $(document).ready(function() {    
    $('.dropify').dropify();
    $('#dropdown-toggle1').click(function() {
        $('#dropdown-toggle1-menu').toggleClass('show').fadeIn("slow");
        $('#dropdown-toggle1-menu').toggleClass('hide').fadeIn("slow");
        $('#dropdown-toggle1 i').toggleClass('mdi-close');
        $('#dropdown-toggle1 i').toggleClass('mdi-menu');
    });

    $(".sorting_1").click(function () {           
      
      if( screen.width <= 768 ) {     
          window.open('https://www.google.com/maps', '_blank');
      } else{
        $("html, body").animate({scrollTop: 140}, 800);
      }
    });    
  });
  window.map;
  function maploadbeforecall(){
    $.ajax({  
     url:"//jsonip.com",  
     method:"get",  
     dataType: 'jsonp',
     crossDomain: true,
     success:function(res){ 
         $.ajax({
            url: '<?php echo  base_url("getlatlong/"); ?>'+res.ip,
            type: 'get',
            dataType: 'json',
            success: function(data) {
                location.latitude=data.geoplugin_latitude;
                location.longitude=data.geoplugin_longitude;
                if ( $('.searchAddress')[0] ) {
                  autoComplete(location)
                }
                pointmap(location);
                initMap();
            }
        });
      }
    });
  }

  function pointmap(location) {
    var zoomm = 13;
    window.map = new  google.maps.Map(document.getElementById('map'), {
                        center: {lat: 22.9594112, lng: 76.0626775},
                        zoom: zoomm,
                        scrollwheel: false,
                        mapTypeId: 'roadmap',
                        scrollwheel: true,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        mapTypeControl: true,
                        mapTypeControlOptions: {
                            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                            position: google.maps.ControlPosition.TOP_RIGHT,
                        },

                        scaleControl: true,
                        streetViewControl: true,
                        fullscreenControl: true,
                      });

    var marker1 = new google.maps.Marker( {
      position: new google.maps.LatLng(22.9646509, 76.060456 ),
      map: window.map,
      icon: '<?php echo base_url("/assets/images/user.png"); ?>',
      title: 'You',
      animation: google.maps.Animation.BOUNCE
    });

    var infowindow = new google.maps.InfoWindow( { content:  'You' } );
      infowindow.close();
      infowindow.open( marker1.get('map'), marker1 );
      window.map.setCenter({
      lat : location.latitude,
      lng : location.longitude
    });
  }

  function addmarker(jsondata) {
    var markeicon = "<?php echo base_url('./assets/images/marke.png'); ?>";
    if(jsondata.length > 0){
      for (i = 0; i < jsondata.length; i++) {
        marker =  new google.maps.Marker({      
                      position: new google.maps.LatLng(jsondata[i].AddressInfo.Latitude, jsondata[i].AddressInfo.Longitude),
                      map: window.map,
                      icon: markeicon,
                      animation: google.maps.Animation.DROP,
                      title: jsondata[i].AddressInfo.Title
                  });
        openinfimodal(marker, jsondata[i]);
      }
    }
  }

  function setcentermap(location) {
    if ( $('.searchAddress')[0] ) {
      autoComplete(location)
    }
    var marker1 = new google.maps.Marker( {
                    position: new google.maps.LatLng( location.latitude, location.longitude ),
                    map: window.map,
                    icon: '<?php echo base_url("/assets/images/user.png"); ?>',
                    title: 'You',
                    animation: google.maps.Animation.BOUNCE
                  });
    var infowindow = new google.maps.InfoWindow( { content:  'You' } );
        infowindow.close();
        infowindow.open( marker1.get('map'), marker1 );
    window.map.setCenter({
                          lat : location.latitude,
                          lng : location.longitude
                        });
  }

  var location_check = true;
  function showPosition(position){ 
    location.latitude=position.coords.latitude;
    location.longitude=position.coords.longitude;
    setcentermap(location);
     $.ajax({
        url : 'https://api.openchargemap.io/v2/poi/?output=json&latitude='+location.latitude+'&longitude='+location.longitude,
        method : 'get',
        dataType: 'json',
        contentType: "application/json",                 
        success: function(data) {
            addmarker(data);
        }
    });
  } 

  function initMap() {
      var latitudeAndLongitude=document.getElementById("latitudeAndLongitude"),
      location={ latitude:'', longitude:''};
      if (navigator.geolocation){
          var options = {};
          navigator.geolocation.getCurrentPosition(
          function success(position) {
              showPosition(position);
          },
          function error(error_message) {
              $.ajax({  
                 url:"//jsonip.com",  
                 method:"get",  
                 dataType: 'jsonp',
                 crossDomain: true,
                 success:function(res){ 
                  $.ajax({
                    url: '<?php echo base_url("getlatlong/"); ?>'+res.ip,
                    type: 'get',
                    dataType: 'json',
                    success: function(data) {
                        location.latitude=data.geoplugin_latitude;
                        location.longitude=data.geoplugin_longitude;
                        setcentermap(location);
                        $.ajax({
                            url : 'https://api.openchargemap.io/v2/poi/?output=json&latitude='+location.latitude+'&longitude='+location.longitude,
                            method : 'get',
                            dataType: 'json',
                            contentType: "application/json",                 
                            success: function(data) {
                                addmarker(data);
                            }
                        });
                      }
                  });
                 }  
              });  
          },options);
      }else{ latitudeAndLongitude.innerHTML="Geolocation is not supported by this browser."; }
  }

  /*open popup click on mark */
  function openinfimodal(marker, jsondatasingal) {
    marker.addListener('click', function() {
        $('#mappopuinfohtml').html('<div class="mb-4">'+
                                        '<h5 class="grrn-text">Provider</h5>'+
                                        '<p class="DataProvider m-0">'+ (jsondatasingal.OperatorInfo ? jsondatasingal.OperatorInfo.Title : '' )+' - '+ (jsondatasingal.StatusType ? jsondatasingal.StatusType.Title : jsondatasingal.StatusType) +'</p>'+
                                        '<p class="m-0">Verified = '+((jsondatasingal.IsRecentlyVerified == false) ? "No" : "Yes")+', Last Verified = '+((jsondatasingal.DateLastVerified == null) ? 'Not Available': jsondatasingal.DateLastVerified)+'</p>'+
                                    '</div>'+
                                    '<div class="mb-4">'+
                                        '<h5 class="grrn-text">Addres</h5>'+
                                        '<p class="m-0">'+jsondatasingal.AddressInfo.AddressLine1+', '+jsondatasingal.AddressInfo.Title+'</p>'+
                                        '<p class="m-0">Longitude '+jsondatasingal.AddressInfo.Longitude+', Latitude '+jsondatasingal.AddressInfo.Latitude+'</p>'+
                                    '</div>'+
                                    '<div class="mb-4">'+
                                        '<h5 class="grrn-text">Usage</h5>'+
                                        '<p class="m-0">Membership Required = '+ ( jsondatasingal.UsageType ? jsondatasingal.UsageType.Title : 'Null' )+'</p>'+
                                    '</div>'+
                                    '<div class="mb-4">'+
                                        '<h5 class="grrn-text">Plug Type and Capacity</h5>'+
                                        '<p class="m-0">Power = '+ ( jsondatasingal.Connections ? jsondatasingal.Connections[0].PowerKW : '' )+'</p>'+
                                        '<p class="m-0">Chargin Point = '+jsondatasingal.NumberOfPoints+', '+((jsondatasingal.GeneralComments == null) ? 'Not Available' : jsondatasingal.GeneralComments)+'</p>'+
                                    '</div>');
        $('#exampleModalform').modal('show');
    });
  }


  function autoComplete(location) {
    var automap = new google.maps.Map(document.getElementById('searchAddressMap'), {
          center: {lat: location.latitude, lng: location.longitude},
          zoom: 13
        });
    var input = document.getElementById('searchAddress');
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', automap);
    var infowindow = new google.maps.InfoWindow();
    var infowindowContent = document.getElementById('infowindow-content');
    infowindow.setContent(infowindowContent);
    var marker = new google.maps.Marker({
      map: automap,
      anchorPoint: new google.maps.Point(0, -29)
    });
    autocomplete.addListener('place_changed', function() {
      infowindow.close();
      marker.setVisible(false);
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }
      if (place.geometry.viewport) {
        automap.fitBounds(place.geometry.viewport);
      } else {
        automap.setCenter(place.geometry.location);
        automap.setZoom(17);  // Why 17? Because it looks good.
      }
      marker.setPosition(place.geometry.location);
      marker.setVisible(true);
      var address = '';
      if (place.address_components) {
        address = [
          (place.address_components[0] && place.address_components[0].short_name || ''),
          (place.address_components[1] && place.address_components[1].short_name || ''),
          (place.address_components[2] && place.address_components[2].short_name || '')
        ].join(' ');
      }
      infowindowContent.children['place-icon'].src = place.icon;
      infowindowContent.children['place-name'].textContent = place.name;
      infowindowContent.children['place-address'].textContent = address;
      $('#lat').val(place.geometry.location.lat());
      $('#long').val(place.geometry.location.lng());
      infowindow.open(automap, marker);
    });
  }

  // For station list on dashboard
  $(document).ready(function() {
    $('.station-list-btn').click(function() {
      $('.mapDashboard').fadeOut('slow');
      $('.stations-list-view').slideDown('slow');
    });

    $('.stations-list-view .close-btn').click(function() {
      $('.stations-list-view').slideUp('slow');
      $('.mapDashboard').fadeIn('slow');
    });

    // Add plug section click on plug icon
    $('.add_plug').click(function() {
        
          var html = '<section style="margin-top:80px;" class="connector-section">'+
            '<div class="row">'+
                '<div class="col-md-12">'+
                    '<div class="container">'+
                        '<label for="txtFirstNameBilling" class="col-lg-3 col-form-label text-left pl-0">Connection | Plug Type</label>'+
                        '<div class="form-group row">'+
                            '<div class="col-lg-12">'+
                                '<input id="plug_type" name="plug_type[]" type="text" class="form-control">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="row">'+
                '<div class="col-md-6">'+
                    '<div class="container">'+
                        '<label for="txtCompanyShipping" class="col-lg-12 col-form-label text-left pl-0">Chargin Level - Power (KW)</label>'+
                        '<div class="form-group row">'+
                            '<div class="col-lg-12">'+
                                '<input id="charge_level" name="charge_level[]" type="text" class="form-control">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="col-md-6">'+
                    '<div class="container">'+
                        '<div class="form-group row">'+
                            '<label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left">Supply Type</label>'+
                            '<div class="col-lg-12">'+
                                '<input id="supply_type" name="supply_type[]" type="text" class="form-control">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="row">'+
                '<div class="col-md-6">'+
                    '<div class="container">'+
                        '<label for="txtCompanyShipping" class="col-lg-12 col-form-label text-left pl-0">Max Current and Voltage</label>'+
                        '<div class="form-group row">'+
                            '<div class="col-lg-12">'+
                                '<input id="max_voltage" name="max_voltage[]" type="text" class="form-control">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="col-md-6">'+
                    '<div class="container">'+
                        '<div class="form-group row">'+
                            '<label for="txtEmailAddressShipping" class="col-lg-12 col-form-label text-left">Number of Points</label>'+
                            '<div class="col-lg-12">'+
                                '<input id="no_of_points" name="no_of_points[]" type="text" class="form-control">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'+

            '<div class="float-right mr-2 remove_plug remove_plug_this" title="Remove Plug">'+
                '<i class="fa fa-minus-circle station-view-bottom-r-btn remove_plug_icon"></i>'+
            '</div>'+
        '</section>';

        $('.add_plug_section').append(html);
        $(".remove_plug_this").click(function() {
          $(this).closest('.connector-section').remove();
        });
        $('.add_plug_this').click(function() {
          $('.add_plug_section').append(html);
        });
    });

    // For add station
    var finalUrl = [];
    $('#AddStation').submit(function(e){
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
          url: '<?php echo base_url(); ?>station/AddStation',
          method: 'post',
          dataType: 'json',
          data: $('#AddStation').serialize()+'&station_Photos='+JSON.stringify(finalUrl)+'&plug='+JSON.stringify(plugs)+'&open24='+open24+'&parking='+parking+'&wifi='+wifi,
          // contentType: false,
          // processData:false,
          success: function(response) {
              console.log(response);
              if(response == 1) {
                  $('.success-msg').slideDown().delay(2000).slideUp();
                  console.log(plugs);
              }
              console.log(finalUrl);
          }
      });
  });

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
              console.log(response);
                // finalUrl = [];
                // $('.images-preview').empty();
                $.each($.parseJSON(response), function(key, value) {
                    url.push({key : key,value:value});
                    $('.images-preview').append("<span class='pip'>" +
                      "<img class='imageThumb' src="+value+ " title="+key+">" +
                      "<span class='remove mdi mdi-close'></span></span>");
                });
                $.each(url, function(index, value) {
                    finalUrl.push(value.value);
                });
                console.log(finalUrl);
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

    // Station view carousal
    $('.carousel-item').first().addClass('active');

    // For remove station
    $("#StationRemove").click(function(e) {
      e.preventDefault();
      var a = confirm('Are you sure, You want to delete this station.');
      if(a == true){
        var url = window.location.href;
        var id = url.substring(url.lastIndexOf('/') + 1);
        $.ajax({
          url: '<?php echo base_url(); ?>station/RemoveStation/'+id+'',
          data: '',
          method: 'post',
          success: function(response) {
            if(response == 1){
              window.location.href = '<?php echo base_url(); ?>';
              location.reload();
            }
          }
        });
      }
    })
});
</script>
<script src="//maps.googleapis.com/maps/api/js?v=3.exp&key=<?php echo mapkey; ?>&libraries=places&callback=maploadbeforecall" async defer></script>