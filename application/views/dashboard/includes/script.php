
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/js/waves.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>        

<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>    

<script src="<?php echo base_url(); ?>assets/plugins/parsleyjs/parsley.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/pages/jquery.form-validation.init-.js"></script>        

<script src="<?php echo base_url(); ?>assets/plugins/rating/jquery.barrating.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/pages/jquery.rating.js"></script>  

<script src="<?php echo base_url(); ?>assets/plugins/dropify/js/dropify.min.js"></script>  

<script src="<?php echo base_url(); ?>assets/js/app.js"></script>         


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" defer=""></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.steps.min.js"></script>

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

    // $(".sorting_1").click(function () {           
      
    //   if( screen.width <= 768 ) {     
    //       window.open('https://www.google.com/maps', '_blank');
    //   } else{
    //     $("html, body").animate({scrollTop: 140}, 800);
    //   }
    // });   
    $('.station-list-btn').click(function() {
      $('.mapDashboard').fadeOut('slow');
      $('.stations-list-view').slideDown('slow');
    });

    $('.stations-list-view .close-btn').click(function() {
      $('.stations-list-view').slideUp('slow');
      $('.mapDashboard').fadeIn('slow');
    });     
  });
  window.map;
  window.lat;
  window.long;
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
                  autoComplete(location);
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
                        center: {lat: location.latitude, lng: location.longitude},
                        zoom: zoomm,
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
        position: new google.maps.LatLng(location.latitude, location.longitude ),
        map: window.map,
        icon: '<?php echo base_url("/assets/images/user.png"); ?>',
        title: 'You',
        animation: google.maps.Animation.BOUNCE
      } );

    var infowindow = new google.maps.InfoWindow( { content:  'You' } );
        infowindow.close();
        infowindow.open( marker1.get('map'), marker1 );
      
        window.map.setCenter({
          lat : location.latitude,
          lng : location.longitude
        });
  }

  function setcentermap(location) {
    if ( $('.searchAddress')[0] ) {
      autoComplete(location)
    }
    var zoomm = 13;
    window.map = new  google.maps.Map(document.getElementById('map'), {
                      center: {lat: location.latitude, lng: location.longitude},
                      zoom: zoomm,
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
    var marker1 = new google.maps.Marker({
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
    window.lat = location.latitude;
    window.long = location.longitude;
    onFilter();
  }

  function initMap() {
      var latitudeAndLongitude=document.getElementById("latitudeAndLongitude"),
      location={ latitude:'', longitude:''};

      if (navigator.geolocation){

          var options = {};
          navigator.geolocation.getCurrentPosition(
          function success(position) {

              location.latitude=position.coords.latitude;
              location.longitude=position.coords.longitude;
              setcentermap(location);
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
                      }
                  });
                 }  
              });  
          },options);
      }else{ latitudeAndLongitude.innerHTML="Geolocation is not supported by this browser."; }
  }
var staion_count = 0;
  function Apimarker(jsondata) {
    $('#station_list1').html('');
    staion_count = staion_count+jsondata.length;
                    $('.station_count').text( staion_count );
    $.each(jsondata, function (index, value) {
      var markeicon = "<?php echo base_url('./assets/images/marke.png'); ?>";
      if (value.is_auther) {
          var markeicon = "<?php echo base_url('./assets/images/usermarker.png'); ?>";
      }
      marker =  new google.maps.Marker({      
                    position: new google.maps.LatLng(value.station_lat, value.station_long),
                    map: window.map,
                    icon: markeicon,
                    animation: google.maps.Animation.DROP,
                    title: value.station_Address
                });
      openinfimodal(marker, value);
      var obj = JSON.parse(value.station_attachment);
      console.log(obj);
      $('#station_list1').append(
                            '<div class="activity row" >'+
                                '<div class="col-sm-2"><img src="'+(obj[0].url != null ? obj[0].url : 'assets/images/no-image-available-icon-6.jpg')+'" style="border-radius: 10px;border: 3px solid #c7c7c7;width: 70px;height: 60px;"></div>'+
                                '<div class="col-sm-8">'+
                                    '<h5 class="mt-0 mb-0" onclick="morezoom('+value.station_lat+','+value.station_long+');"><strong>'+value.station_Address+'</strong></h5>'+
                                    '<p class="text-muted font-13 mb-0"><b>@ '+value.distance+' with '+value.time+' of estimated travel time</b></p>'+
                                    '<p mb-0 style="height: 27px;overflow: hidden; line-height:25px;">'+value.station_general_comment+'</p>'+
                                '</div>'+
                                '<div class="col-sm-2">'+
                                  '<div class="">'+
                                      '<select id="rating_filtter" name="rating" class="rating_filtter">'+
                                          '<option value="1">1</option>'+
                                          '<option value="2">2</option>'+
                                          '<option value="3">3</option>'+
                                          '<option value="4">4</option>'+
                                          '<option value="5" selected="">5</option>'+
                                      '</select>'+
                                  '</div>'+
                                  '<div class="font-10" style="">'+
                                      '<button class="btn btn-success btn-block">Available</button>'+
                                  '</div>'+
                              '</div>'+
                              '<div class="dropdown-divider"></div>'+
                            '</div>'
                        );
      $('.rating_filtter').barrating({
            theme: 'fontawesome-stars',
            showSelectedRating: false
        });
    });
  }
  function Api2marker(jsondata) {
    $('#station_list2').html('');
    staion_count = staion_count+jsondata.length;
                    $('.station_count').text( staion_count );

    var markeicon = "<?php echo base_url('./assets/images/marke.png'); ?>";
    $.each(jsondata, function (index, value) {
      marker =  new google.maps.Marker({      
                    position: new google.maps.LatLng(value.AddressInfo.Latitude, value.AddressInfo.Longitude),
                    map: window.map,
                    icon: markeicon,
                    animation: google.maps.Animation.DROP,
                    title: value.AddressInfo.Title
                });
      openinfimodal(marker, value);
      $('#station_list2').append(
                            '<div class="activity row">'+
                                '<div class="col-sm-2"><img src="'+(value.MediaItems != null ? value.MediaItems[0].ItemThumbnailURL : '')+'" style="border-radius: 10px;border: 3px solid #c7c7c7;width: 70px;height: 60px;"></div>'+
                                '<div class="col-sm-8">'+
                                    '<h5 class="mt-0 mb-0"><strong>'+value.AddressInfo.Title+'</strong></h5>'+
                                    '<p class="text-muted font-13 mb-0"><b>@ '+value.distance+' with '+value.time+' of estimated travel time</b></p>'+
                                    '<p mb-0 style="height: 27px;overflow: hidden;">'+value.NumberOfPoints+', '+((value.GeneralComments == null) ? 'Not Available' : value.GeneralComments)+'</p>'+
                                '</div>'+
                                '<div class="col-sm-2">'+
                                  '<div class="">'+
                                      '<select id="rating_filtter" name="rating" class="rating_filtter">'+
                                          '<option value="1">1</option>'+
                                          '<option value="2">2</option>'+
                                          '<option value="3">3</option>'+
                                          '<option value="4">4</option>'+
                                          '<option value="5" selected="">5</option>'+
                                      '</select>'+
                                  '</div>'+
                                  '<div class="font-10" style="">'+
                                      '<button class="btn btn-success btn-block">Available</button>'+
                                  '</div>'+
                              '</div>'+
                              '<div class="dropdown-divider"></div>'+
                            '</div>'
                        );
      $('.rating_filtter').barrating({
            theme: 'fontawesome-stars',
            showSelectedRating: false
        });
    });
  }

  /*open popup click on mark */
  function openinfimodal(marker, jsondatasingal) {
    marker.addListener('click', function() {
    console.log(jsondatasingal);
    sessionStorage.setItem("clickmarkedata", JSON.stringify(jsondatasingal));
    window.location.href = "<?php echo base_url(); ?>station";
    // JSON.parse(sessionStorage.getItem("clickmarkedata"));
        // $('#mappopuinfohtml').html('<div class="mb-4">'+
        //                                 '<h5 class="grrn-text">Provider</h5>'+
        //                                 '<p class="DataProvider m-0">'+ (jsondatasingal.OperatorInfo ? jsondatasingal.OperatorInfo.Title : '' )+' - '+ (jsondatasingal.StatusType ? jsondatasingal.StatusType.Title : jsondatasingal.StatusType) +'</p>'+
        //                                 '<p class="m-0">Verified = '+((jsondatasingal.IsRecentlyVerified == false) ? "No" : "Yes")+', Last Verified = '+((jsondatasingal.DateLastVerified == null) ? 'Not Available': jsondatasingal.DateLastVerified)+'</p>'+
        //                             '</div>'+
        //                             '<div class="mb-4">'+
        //                                 '<h5 class="grrn-text">Addres</h5>'+
        //                                 '<p class="m-0">'+jsondatasingal.AddressInfo.AddressLine1+', '+jsondatasingal.AddressInfo.Title+'</p>'+
        //                                 '<p class="m-0">Longitude '+jsondatasingal.AddressInfo.Longitude+', Latitude '+jsondatasingal.AddressInfo.Latitude+'</p>'+
        //                             '</div>'+
        //                             '<div class="mb-4">'+
        //                                 '<h5 class="grrn-text">Usage</h5>'+
        //                                 '<p class="m-0">Membership Required = '+ ( jsondatasingal.UsageType ? jsondatasingal.UsageType.Title : 'Null' )+'</p>'+
        //                             '</div>'+
        //                             '<div class="mb-4">'+
        //                                 '<h5 class="grrn-text">Plug Type and Capacity</h5>'+
        //                                 '<p class="m-0">Power = '+ ( jsondatasingal.Connections ? jsondatasingal.Connections[0].PowerKW : '' )+'</p>'+
        //                                 '<p class="m-0">Chargin Point = '+jsondatasingal.NumberOfPoints+', '+((jsondatasingal.GeneralComments == null) ? 'Not Available' : jsondatasingal.GeneralComments)+'</p>'+
        //                             '</div>');
        // $('#exampleModalform').modal('show');
    });
  }


  function autoComplete(location) {

    var automap = new google.maps.Map(document.getElementById('searchAddressMap'), {
          center: {lat: location.latitude, lng: location.longitude},
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: true,
          disableDefaultUI: false,
        });
    
    var input = document.getElementById('searchAddress');
    
    var autocomplete = new google.maps.places.Autocomplete(input);
    
    autocomplete.bindTo('bounds', automap);
    
    var infowindow = new google.maps.InfoWindow();
    var infowindowContent = document.getElementById('infowindow-content');
    infowindow.setContent(infowindowContent);

    var marker = new google.maps.Marker({
      map: automap,
      anchorPoint: new google.maps.Point(0, -29),
      position: new google.maps.LatLng(location.latitude, location.longitude),
    });
    $('#lat').val(location.latitude);
    $('#long').val(location.longitude);
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

      location            = { latitude:'', longitude:''};
      location.latitude   = place.geometry.location.lat();
      location.longitude  = place.geometry.location.lng();
      
      setcentermap(location);
      
      infowindow.open(automap, marker);

    });
  }
  /*morezoom*/
  function morezoom(station_lat, station_long) {
      var directionDisplay;
      var directionsService = new google.maps.DirectionsService();

      directionDisplay = new google.maps.DirectionsRenderer();
      directionDisplay.setMap(window.map);

      var start = window.lat+','+ window.long;
      var end = station_lat+', '+station_long;
      var request = {
        origin:start, 
        destination:end,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
      };
      directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
          directionDisplay.setDirections(response);
          var myRoute = response.routes[0];
          console.log(response);
          // var txtDir = '';
          // for (var i=0; i<myRoute.legs[0].steps.length; i++) {
          //   txtDir += myRoute.legs[0].steps[i].instructions+"<br />";
          // }
          // document.getElementById('directions').innerHTML = txtDir;
        }
      });
      window.map.setZoom(20);
      window.map.setCenter(new google.maps.LatLng(station_lat, station_long));
      $('.stations-list-view').slideUp('slow');
      $('.mapDashboard').fadeIn('slow');
  }
  /*get power*/
  function get_power() {
      $.ajax({  
           url:"<?php echo base_url(); ?>power/get",  
           method:"get",  
           dataType: "json",
           success:function(data){ 
              var html = '';
              if (data.status) {
                $.each(data.data, function( index, value ) {
                  html += '<div class="checkbox my-2">'+
                              '<div class="custom-control custom-checkbox">'+
                                  '<input type="checkbox" class="custom-control-input" value="'+value.power_id+'" name="power_filtter[]" id="power_check_'+value.power_id+'" data-parsley-multiple="groups" data-parsley-mincheck="2">'+
                                  '<label class="custom-control-label" for="power_check_'+value.power_id+'"> '+value.power+' </label>'+
                              '</div>'+
                          '</div>';
                });
              }
              $('#power_checkboxs').html(html);
           },
           error: function(data){
           }
      });  
  }

  /*get Plug Type*/
  function get_plugtype() {
      $.ajax({  
           url:"<?php echo base_url(); ?>plugtype/get",  
           method:"get",  
           dataType: "json",
           success:function(data){ 
              var html = '';
              if (data.status) {
                $.each(data.data, function( index, value ) {
                  html += '<div class="checkbox my-2">'+
                              '<div class="custom-control custom-checkbox">'+
                                  '<input type="checkbox" class="custom-control-input" value="'+value.plugtype_id+'" name="plug_type_filtter[]" id="plug_type_'+value.plugtype_id+'" data-parsley-multiple="groups" data-parsley-mincheck="2">'+
                                  '<label class="custom-control-label" for="plug_type_'+value.plugtype_id+'"> '+value.plug_type+' </label>'+
                              '</div>'+
                          '</div>';
                });
              }
              $('#plug_type_checkboxs').html(html);
           },
           error: function(data){
           }
      });  
  }
  
   // Set selectbox fields in form
  var plugOption = '';
  var powerOption = '';
  var supplyOption = '';
  var currentOption = '';
  var pointsOption = '';
  var fields = [];
  var html = '';
  function SetAddFormFields() {
    
    // Get fields for add station
    $.ajax({
      url: '<?php echo base_url(); ?>station/GetFeilds',
      dataType: 'json',
      method: 'get',
      success: function(response) {
          fields.push(response);
          $.each(response.plug_type, function(index, val){
            var jsonObj=JSON.parse(JSON.stringify(val))
            plugOption += '<option value='+jsonObj.plugtype_id+'>'+jsonObj.plug_type+'</option>';
          });
          $.each(response.power, function(index, val){
            var jsonObj=JSON.parse(JSON.stringify(val))
            powerOption += '<option value='+jsonObj.power_id+'>'+jsonObj.power+'</option>';
          });
          $.each(response.supply_type, function(index, val){
            var jsonObj=JSON.parse(JSON.stringify(val))
            supplyOption += '<option value='+jsonObj.supply_id+'>'+jsonObj.supplytype+'</option>';
          });
          $.each(response.current_voltage, function(index, val){
            var jsonObj=JSON.parse(JSON.stringify(val))
            currentOption += '<option value='+jsonObj.voltage_id+'>'+jsonObj.voltage+'</option>';
          });
          $.each(response.points, function(index, val){
            var jsonObj=JSON.parse(JSON.stringify(val))
            pointsOption += '<option value='+jsonObj.point_id+'>'+jsonObj.point+'</option>';
          });
          $.each(response.provider, function(key, value) {
            $("#provider_name").append('<option value='+value.provider_id+'>'+value.provider_name+'</option>');
            $("#provider_name1").append('<option value='+value.provider_id+'>'+value.provider_name+'</option>');
          });
          $.each(response.payment, function(key, value) {
            $("#payments").append('<option value='+value.payment_id+'>'+value.payment_method+'</option>');
            $("#payments1 ").append('<option value='+value.payment_id+'>'+value.payment_method+'</option>');
          });
          $.each(response.access_type, function(key, value) {
            $("#access_type").append('<option value='+value.accesstype_id+'>'+value.access_name+'</option>');
            $("#access_type1").append('<option value='+value.accesstype_id+'>'+value.access_name+'</option>');
          });
      }
    });
  }

  // For station view click on location icon zoom dashboard map
  var viewlat = localStorage.getItem("lat");
  var viewlong = localStorage.getItem("long");
  var status = localStorage.getItem("reloading");
  setTimeout(function() {
    if( status == 'true'){
      localStorage.setItem("reloading", "false");
      morezoom(viewlat, viewlong);
    }
  }, 1500);
</script>
<script src="//maps.googleapis.com/maps/api/js?v=3.exp&key=<?php echo mapkey; ?>&libraries=places&callback=maploadbeforecall" async defer></script>