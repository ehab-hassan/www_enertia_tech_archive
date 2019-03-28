
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/js/waves.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/chartist/js/chartist.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/peity-chart/jquery.peity.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>        
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>         
<script src="<?php echo base_url(); ?>assets/pages/jquery.dashboard2.init.js"></script>        
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" defer=""></script>
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
		$('.lang_append').html('English<img src="<?php echo base_url(); ?>assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
	if (sessionStorage.getItem("theLang")=='hi') {
		$('.lang_append').html('Hindi<img src="<?php echo base_url(); ?>assets/images/flags/Hindi_flag.svg" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
	if (sessionStorage.getItem("theLang")=='ur') {
		$('.lang_append').html('Urdu<img src="<?php echo base_url(); ?>assets/images/flags/Urdu_flag.png" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
	if (sessionStorage.getItem("theLang")=='de') {
		$('.lang_append').html('German<img src="<?php echo base_url(); ?>assets/images/flags/germany_flag.jpg" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
	if (sessionStorage.getItem("theLang")=='fr') {
		$('.lang_append').html('French<img src="<?php echo base_url(); ?>assets/images/flags/french_flag.jpg" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
	if (sessionStorage.getItem("theLang")=='es') {
		$('.lang_append').html('Spanish<img src="<?php echo base_url(); ?>assets/images/flags/spain_flag.jpg" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
	if (sessionStorage.getItem("theLang")=='vi') {
		$('.lang_append').html('Vietnamese<img src="<?php echo base_url(); ?>assets/images/flags/Vietnamese_flag.png" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
	if (sessionStorage.getItem("theLang")=='pt') {
		$('.lang_append').html('Portuguese<img src="<?php echo base_url(); ?>assets/images/flags/Portuguese_flag.png" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
	if (sessionStorage.getItem("theLang")=='ar') {
		$('.lang_append').html('Arabic<img src="<?php echo base_url(); ?>assets/images/flags/Arabic_Flag.svg" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
	if (sessionStorage.getItem("theLang")=='zh-CN') {
		$('.lang_append').html('Chinese<img src="<?php echo base_url(); ?>assets/images/flags/Chinese_flag.png" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
	if (sessionStorage.getItem("theLang")=='ms') {
		$('.lang_append').html('Malay<img src="<?php echo base_url(); ?>assets/images/flags/Malay_flag.png" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
	if (sessionStorage.getItem("theLang")=='ru') {
		$('.lang_append').html('Russian<img src="<?php echo base_url(); ?>assets/images/flags/Russian_flag.png" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
	if (sessionStorage.getItem("theLang")=='nl') {
		$('.lang_append').html('Dutch<img src="<?php echo base_url(); ?>assets/images/flags/Dutch_flag.png" class="ml-2" height="16" alt=""/><i class="mdi mdi-chevron-down"></i>   ');
	}
</script>
<!-- App js -->        
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>  

<script>    
	// For click on station to redirect on map
	$(document).ready(function() {       
		$(".sorting_1").click(function () {           
			
			if( screen.width <= 768 ) {     
		    	window.open('https://www.google.com/maps', '_blank');
			} else{
				$("html, body").animate({scrollTop: 140}, 800);
			}
		});    
	});

	// <!-- ====================== For Google Map ================= -->
	var location_check = true;
    function showPosition(position){ 
        location.latitude=position.coords.latitude;
        location.longitude=position.coords.longitude;
         $.ajax({
            url : 'https://api.openchargemap.io/v2/poi/?output=json&latitude='+location.latitude+'&longitude='+location.longitude+'&maxresults=10&distance=100&distanceunit=KM',
            // url : 'https://api.openchargemap.io/v2/poi/?output=json&latitude=12.9224636436796&longitude=77.5846883396955&maxresults=50',
            method : 'get',
            dataType: 'json',
            contentType: "application/json",                 
            success: function(data) {
                console.log(data);
                pointmap(data,location);
            },
            error: function(data){}
        });
    } //showPosition

    function initMap() {

        $(".ajax_loder").show();
        $(".ajax_loder .status").show();
        var latitudeAndLongitude=document.getElementById("latitudeAndLongitude"),

        location={
            latitude:'',
            longitude:''
        };

        if (navigator.geolocation){
            var options = {};
            navigator.geolocation.getCurrentPosition(
            function success(position) {
            	location_check = true;
                console.log('allow');
                console.log(position);
                showPosition(position);
            },
            function error(error_message) {
            	location_check = false;
                $.get('https://jsonip.com', function (res) {
                    $.ajax({
                        url: '<?php echo base_url(); ?>/php/getlatlong.php?ip='+res.ip,
                        type: 'get',
                        dataType: 'json',
                        success: function(data) {
                            location.latitude=data.geoplugin_latitude;
                            location.longitude=data.geoplugin_longitude;
                            $.ajax({
                                url : 'https://api.openchargemap.io/v2/poi/?output=json&latitude='+location.latitude+'&longitude='+location.longitude+'&maxresults=20',
                                // url : 'https://api.openchargemap.io/v2/poi/?output=json&latitude=12.9224636436796&longitude=77.5846883396955&maxresults=50',
                                method : 'get',
                                dataType: 'json',
                                contentType: "application/json",                 
                                success: function(data) {
                                    pointmap(data,location);
                                },
                                error: function(data){}
                            });
                        }
                    });
                });
            },options);
        }
        else{
          latitudeAndLongitude.innerHTML="Geolocation is not supported by this browser.";
        }
    }
    function maploadbeforecall(){
        $.get('https://jsonip.com', function (res) {
            $.ajax({
                url: '<?php echo base_url(); ?>/php/getlatlong.php?ip='+res.ip,
                type: 'get',
                dataType: 'json',
                success: function(data) {
                    location.latitude=data.geoplugin_latitude;
                    location.longitude=data.geoplugin_longitude;
                    pointmap('',location);
                    initMap();
                }
            });
        });
    }

    function pointmap(jsondata,location) {
    	console.log(jsondata);
            // Styles a map in night mode.
            var zoomm = 13;
            if (location_check==false) {
                zoomm = 11;
            }
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
        				// center: {lat: 12.9224636436796, lng: 77.5846883396955},
                      center: {lat: location.latitude, lng: location.longitude},
                      zoom: zoomm,
                      scrollwheel: false,
                      mapTypeId: 'roadmap',
                      mapTypeId: google.maps.MapTypeId.ROADMAP,

                      styles: [
                        {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                        {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                        {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                        {
                          featureType: 'administrative.locality',
                          elementType: 'labels.text.fill',
                          stylers: [{color: '#d59563'}]
                        },
                        {
                          featureType: 'poi',
                          elementType: 'labels.text.fill',
                          stylers: [{color: '#d59563'}]
                        },
                        {
                          featureType: 'poi.park',
                          elementType: 'geometry',
                          stylers: [{color: '#263c3f'}]
                        },
                        {
                          featureType: 'poi.park',
                          elementType: 'labels.text.fill',
                          stylers: [{color: '#6b9a76'}]
                        },
                        {
                          featureType: 'road',
                          elementType: 'geometry',
                          stylers: [{color: '#38414e'}]
                        },
                        {
                          featureType: 'road',
                          elementType: 'geometry.stroke',
                          stylers: [{color: '#212a37'}]
                        },
                        {
                          featureType: 'road',
                          elementType: 'labels.text.fill',
                          stylers: [{color: '#9ca5b3'}]
                        },
                        {
                          featureType: 'road.highway',
                          elementType: 'geometry',
                          stylers: [{color: '#746855'}]
                        },
                        {
                          featureType: 'road.highway',
                          elementType: 'geometry.stroke',
                          stylers: [{color: '#1f2835'}]
                        },
                        {
                          featureType: 'road.highway',
                          elementType: 'labels.text.fill',
                          stylers: [{color: '#f3d19c'}]
                        },
                        {
                          featureType: 'transit',
                          elementType: 'geometry',
                          stylers: [{color: '#2f3948'}]
                        },
                        {
                          featureType: 'transit.station',
                          elementType: 'labels.text.fill',
                          stylers: [{color: '#d59563'}]
                        },
                        {
                          featureType: 'water',
                          elementType: 'geometry',
                          stylers: [{color: '#17263c'}]
                        },
                        {
                          featureType: 'water',
                          elementType: 'labels.text.fill',
                          stylers: [{color: '#515c6d'}]
                        },
                        {
                          featureType: 'water',
                          elementType: 'labels.text.stroke',
                          stylers: [{color: '#17263c'}]
                        }
                      ]
        });

        var marker1 = new google.maps.Marker({
        	// position: new google.maps.LatLng('12.9224636436796', '77.5846883396955'),
          position: new google.maps.LatLng(location.latitude, location.longitude),
          map: map,
          icon: '<?php echo base_url(); ?>/assets/images/user.png',
          title: 'You',
          animation: google.maps.Animation.BOUNCE
        });

        var infowindow = new google.maps.InfoWindow({
          content:  'You'
        });

        infowindow.open(marker1.get('map'), marker1);

        /*icon marke*/
        var markeicon = '<?php echo base_url(); ?>/assets/images/marke.png';

        /*check lengh*/
          if(jsondata.length > 0){
            for (i = 0; i < jsondata.length; i++) {

                /*set marker*/
                marker =  new google.maps.Marker({
                              position: new google.maps.LatLng(jsondata[i].AddressInfo.Latitude, jsondata[i].AddressInfo.Longitude),
                              map: map,
                              icon: markeicon,
                              animation: google.maps.Animation.DROP,
                              title: jsondata[i].AddressInfo.Title
                          });
                openinfimodal(marker, jsondata[i]);
            }
          }
        $(".ajax_loder").hide();
        $(".ajax_loder .status").hide();
    }

    $('#contact-mail-send').submit(function(event){
        event.preventDefault();
         $.ajax({
            url: '<?php echo base_url(); ?>php/contact.php',
            type: 'post',
            dataType: 'json',
            data: $('#contact-mail-send').serialize(),
            beforeSend: function(){
                // Show image container
                $(".submitBnt").attr("disabled", "disabled");
                $(".loader").show();
                $('.error-message-show').hide().html('');
            },  
            success: function(data) {
                $(".loader").hide();
                $(".submitBnt").removeAttr("disabled");
                if (data.status=='error') {
                    $('.error-message-show').show().html(data.error_msg);
                }else{
                    $('.error-message-show').show().html(data.success_msg);
                }
            }
        });
    });

    // Attaches an info window to a marker with the provided message. When the
    // marker is clicked, the info window will open with the secret message.

    function openinfimodal(marker, jsondatasingal) {
        marker.addListener('click', function() {
            $('#mappopuinfohtml').html('<div class="mb-4">'+
                            '<p class="grrn-text">Provider</p>'+
                            '<p class="DataProvider">'+jsondatasingal.OperatorInfo.Title+' - '+jsondatasingal.StatusType.Title+'</p>'+
                            '<p class="">Verified = '+((jsondatasingal.IsRecentlyVerified == false) ? "No" : "Yes")+', Last Verified = '+((jsondatasingal.DateLastVerified == null) ? 'Not Available': jsondatasingal.DateLastVerified)+'</p>'+
                        '</div>'+

                        '<div class="mb-4">'+
                            '<p class="grrn-text">Addres</p>'+
                            '<p class="">'+jsondatasingal.AddressInfo.AddressLine1+', '+jsondatasingal.AddressInfo.Title+'</p>'+
                            '<p class="">Longitude '+jsondatasingal.AddressInfo.Longitude+', Latitude '+jsondatasingal.AddressInfo.Latitude+'</p>'+
                        '</div>'+
                        '<div class="mb-4">'+
                            '<p class="grrn-text">Usage</p>'+
                            '<p class="">Membership Required = '+jsondatasingal.UsageType.Title+'</p>'+
                        '</div>'+
                        '<div class="mb-4">'+
                            '<p class="grrn-text">Plug Type and Capacity</p>'+
                            '<p class="">Power = '+jsondatasingal.Connections[0].PowerKW+'</p>'+
                            '<p class="">Chargin Point = '+jsondatasingal.NumberOfPoints+', '+((jsondatasingal.GeneralComments == null) ? 'Not Available' : jsondatasingal.GeneralComments)+'</p>'+
                        '</div>'+
                        "<a href='./Dashboard/login.html' class='btn btn-block btn-outline-success' >Need more information? Let's Log In</a>");
            $('#exampleModalform').modal('show');
        });
    }
</script>
<script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyD9g_Jj2qghU7Ta1UeuEw1HGzpmkqT4EJc&callback=maploadbeforecall" ></script>