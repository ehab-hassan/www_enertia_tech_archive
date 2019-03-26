<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    var client_id = '839737356370775';
    var redirect_uri = 'https://enertia.tech/';
    window.fbAsyncInit = function() {
        // FB JavaScript SDK configuration and setup
        FB.init({
          appId      : client_id, // FB App ID
          // appId      : '591300247949299', // FB App ID
          cookie     : true,  // enable cookies to allow the server to access the session
          xfbml      : true,  // parse social plugins on this page
          version    : 'v2.10' // use graph api version 2.10
        });
        
        // Check whether the user already logged in
        FB.getLoginStatus(function(response) {
            console.log(response);
            if (response.status === 'connected') {
            //     //display user data
                if (getHashValue('state') == "fblogin") {
                    getFbUserData();
                }
            }
        });
    };

    // Load the JavaScript SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function getHashValue(key) {
        var matches = location.hash.match(new RegExp(key+'=([^&]*)'));
        return matches ? matches[1] : null;
    }

      
    // Facebook login with JavaScript SDK
    function fbLogin() {
        
        // FB.login(function (response) {
        //     if (response.authResponse) {
        //         // Get and display the user profile data
        //         getFbUserData();
        //     } else {
        //         document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
        //     }
        // }, {scope: 'email,public_profile'});
        window.location = encodeURI("https://www.facebook.com/dialog/oauth?client_id="+client_id+"&redirect_uri="+redirect_uri+"&response_type=token&scope=email,public_profile&state=fblogin");
    }

    // Fetch the user profile data from facebook
    function getFbUserData(){
        
        FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,cover,name,about,age_range,birthday,education,devices,gender,picture'},
        function (response) {
            // Save user data
            // console.log(response);
            saveUserData(response);
        });
    }

    // Save user data to the database
    function saveUserData(userData){

        $.ajax({  
             url:"<?php echo base_url(); ?>signup/facebook",  
             method:"post",  
             data:{social:'Social', userData: JSON.stringify(userData)},  
             dataType:'json',
             success:function(data){  
                if (data.status=='success') {
                    if (data.UserPhone == '') {
                        window.location.href = "<?php echo base_url('phone'); ?>";
                    }else{
                        window.location.href = "<?php echo base_url('dashboard'); ?>";
                    }
                }else{
                    alert(data.msg);
                }
             },
             error: function(){

             }
        });

        // $.post("<?php echo base_url('signup/facebook'); ?>", ,'json', function(data){ 
        //     // if (data['status']=='success') {
        //     //     if (data['UserPhone'] == '') {
        //     //         alert();
        //     //         window.location.href = "<?php echo base_url('phone'); ?>";
        //     //     }else{

        //     //         // window.location.href = "<?php echo base_url('dashboard'); ?>";
        //     //     }
        //     // }else{
        //     //     // alert(data.msg);
        //     // }
        //     return true; 
        // });
    }

    // Logout from facebook
    function fbLogout() {
        FB.logout(function() {
            
            document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
            document.getElementById('fbLink').innerHTML = '<img src="<?php echo base_url('assets/images/fblogin.png'); ?>"/>';
            document.getElementById('userData').innerHTML = '';
            document.getElementById('status').innerHTML = 'You have successfully logout from Facebook.';
        });
    }
</script>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waves.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
<script src="<?php echo base_url(); ?>assets/js/data.js"></script>
<script>
    var country_code = '';
    $( document ).ready(function() {
        $.ajax({  
             url:"//jsonip.com",  
             method:"get",  
             dataType: 'jsonp',
             crossDomain: true,
             success:function(data){ 
                $.ajax({  
                     url:"<?php echo base_url(); ?>getcuntrycode/"+data.ip, 
                     method:"get",  
                     dataType: "json",
                     success:function(data){
                        var cccode = $(cuntryjson)
                            .filter(function (i,n){
                                return n.code===data;
                            });
                            country_code = cccode[0].phoneCode;
                        $('#basic-addon3-phone').html(cccode[0].phoneCode);
                     }
                 });
             }  
        });  
    });
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the crurrent tab
    function showTab(n) {
        if ( $('.tab_wzard').length > 0) {
          var x = document.getElementsByClassName("tab_wzard");
          x[n].style.display = "block";
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            $('.submit_to_action').removeClass('hide');
            $('#nextBtn').addClass('hide');
          } else {
            $('.submit_to_action').addClass('hide');
            $('#nextBtn').removeClass('hide');
          }
        }
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab_wzard");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        // document.getElementById("eventform").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab_wzard");
      y = x[currentTab].getElementsByClassName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      return valid; // return the valid status
    }

    $(document).ready(function(){  
        /*check email*/
        $('#email').change(function(){  
           var email = $('#email').val(); 
           if(email != ''){  
                $.ajax({  
                     url:"<?php echo base_url(); ?>ajax/email",  
                     method:"post",  
                     data:{email:email},  
                     success:function(data){  
                      $('#email_result').show().html(data).fadeOut(5000);  
                     }  
                });  
                checkstep1button();
           }  
        });
        /*check degists only*/
        $("#phone, #login_phone").keypress(function (e) {
                 
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                
                $("#phone_result").show().html("Digits Only").show().fadeOut(5000);
                return false;
            }
        });
        /*check phone number*/      
        $('#phone').change(function(){  
           var phone = $('#phone').val(); 
           if(phone != ''){  
                $.ajax({  
                     url:"<?php echo base_url(); ?>ajax/phone",  
                     method:"post",  
                     data:{phone:country_code+phone},  
                     success:function(data){  
                      $('#phone_result').show().html(data).fadeOut(5000);  
                     }  
                }); 
                checkstep1button(); 
           }  
        });
        /*check phone number*/      
        $('#login_phone').change(function(){  
           var phone = $('#login_phone').val(); 
           if(phone != ''){  
                $.ajax({  
                     url:"<?php echo base_url(); ?>ajax/loginphone",  
                     method:"post",  
                     data:{phone:country_code+phone},  
                     success:function(data){ 
                        if (data.status=='false') {
                            $('#login_phone_result').show().html('<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> That Number is not with us ! SignUp below</label>').fadeOut(5000);  
                        }
                     }  
                }); 
           }  
        });
        /*check otp*/
        $("#opt").keyup(function (e) {
            var otp = $(this).val(); 
            if(otp != '' && otp.length >= 4){  
                $.ajax({  
                     url:"<?php echo base_url(); ?>ajax/otp",  
                     method:"post",  
                     data:{otp:otp},  
                     dataType:'json',
                     success:function(data){  
                        if (data.status == 'true') {
                            $('#otp_result').show().html('<label class="text-success"><span class="glyphicon glyphicon-remove"></span>Success ! Phone Code Verified</label>').fadeOut(5000);  
                            checkstep2button();
                        }else{
                            $('#otp_result').show().html('<label class="text-danger"><span class="glyphicon glyphicon-ok"></span>Invalid Phone Code</label>').fadeOut(5000);  
                        }
                     }  
                });
            }  
        });
        
        /*submit first and second setp for signup*/
        $('.nextBtn_signup').click(function() {
            if (currentTab==0) {
                var username = $('#username').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                validateForm();
                if (username != '' && email != '' && phone != '') {
                    $('.loader_form').show();
                    $.ajax({  
                         url:"<?php echo base_url(); ?>signup/post",  
                         method:"post",  
                         dataType: "json",
                         data:{step:1,username:username,email:email,phone:country_code+phone,UserLoginType:'Regular',UserIP:'<?php echo $ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);?>'},  
                         success:function(data){ 
                            $('.loader_form').hide(); 
                            if (data.status == 'success') {
                                send_otp(data.UserID);
                                $('#userid').val(data.UserID);
                                nextPrev(1);
                                carmake();
                            }else{
                                $('#'+data.id).html(data.msg).show();  
                            }
                         },
                         error: function(){
                            $('.loader_form').hide(); 
                         }
                    });  
                }
            }else if (currentTab==1) {
                var make = $('#carmake').val();
                var models = $('#carmodels').val();
                var userid = $('#userid').val();
                validateForm();
                if (make != '' && models != '' && userid != '') {
                    $('.loader_form').show();
                    $.ajax({  
                         url:"<?php echo base_url(); ?>signup/post",  
                         method:"post",  
                         dataType: "json",
                         data:{step:2,make:make,models:models,userid:userid},  
                         success:function(data){ 
                            $('.loader_form').hide(); 
                            if (data.status == 'success') {
                                $('#userid').val(data.userdata.UserID);
                                nextPrev(1);
                            }else{
                                $(".r_success_msg").html('<div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="mdi mdi-check-circle mr-2"></i>EUnknown rror ! SPlease try again.</div>').show().fadeOut(5000);
                            }
                         },
                         error: function(){
                            $('.loader_form').hide(); 
                         }
                    });  
                }
            }
        });

        /*submit last setp fo signup*/
        $('#submit_to_register').click(function() {
            var otp = $('#opt').val();
            validateForm();
            $.ajax({  
                 url:"<?php echo base_url(); ?>ajax/otp",  
                 method:"post",  
                 data:{otp:otp},  
                 dataType:'json',
                 success:function(data){  
                    if (data.status == 'true') {
                        $('#otp_result').show().html('<label class="text-success"><span class="glyphicon glyphicon-remove"></span>Success ! Phone Code Verified</label>').fadeOut(5000);  
                        if (otp != '') {
                            var userid = $('#userid').val();
                            $('.loader_form').show();
                            $.ajax({  
                                 url:"<?php echo base_url(); ?>signup/post",  
                                 method:"post",  
                                 dataType: "json",
                                 data:{step:3,otp:otp,userid:userid},  
                                 success:function(data){ 
                                    $('.loader_form').hide(); 
                                    if (data.status == 'success') {
                                        $('#userid').val(data.userdata.UserID);
                                        $(".r_success_msg").html('<div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="mdi mdi-check-circle mr-2"></i>Serfect! You are now on the Network</div>').show().fadeOut(5000);
                                        window.location.href='<?php echo base_url("/dashboard"); ?>';
                                    }else{
                                        $(".r_success_msg").html('<div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="mdi mdi-check-circle mr-2"></i>EUnknown Error ! Please try again</div>').show().fadeOut(5000);
                                    }
                                 },
                                 error: function(){
                                    $('.loader_form').hide(); 
                                 }
                            });  
                        }
                    }else{
                        $('#otp_result').show().html('<label class="text-danger"><span class="glyphicon glyphicon-ok"></span>Invalid Phone Code</label>').fadeOut(5000);  
                    }
                 }  
            });
        });

        /*make on change then get model*/
        $('#carmake').change(function(){
            var make = $(this).val();
            if (make != '') {
                $.ajax({  
                     url:"<?php echo base_url(); ?>carmodelget/"+make,  
                     method:"get",  
                     dataType: "json",
                     success:function(data){ 
                        var modeloption = '<option value="">Select Model</option>';
                        $.each(data, function( index, value ) {
                          modeloption += '<option value="'+value.modelID+'">'+value.modelName+' ('+value.modelYear+')</option>';
                        });
                        $('#carmodels').html(modeloption);
                        $('#carmodels').removeAttr('disabled');
                        checkstep2button();
                     },
                     error: function(data){
                     }
                });  
            }else{
                $('#carmodels').attr('disabled','disabled');
            }
        });
        /*make on change then get model*/
        $('#carmodels').change(function(){
            var model = $(this).val();
            if (model != '') {
                checkstep2button();
            }
        });

        /*login steps*/
        $('.nextBtn_login').click(function(){
            var phone = $('#login_phone').val();
            validateForm();
            if (phone != '') {
                $('.loader_form').show();
                $.ajax({  
                     url:"<?php echo base_url(); ?>ajax/loginphone",  
                     method:"post",  
                     dataType: "json",
                     data:{phone:country_code+phone},  
                     success:function(data){ 
                        $('.loader_form').hide(); 
                        if (data.status == 'true') {
                            send_otp(data.userdata.UserID);
                            nextPrev(1);
                        }else{
                            $('#login_phone_result').html('<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> That Number is not with us! SignUp below</label>').show();  
                        }
                     },
                     error: function(){
                        $('.loader_form').hide(); 
                     }
                });  
            }
        });
        $('#submit_to_login').click(function(){
            var otp = $('#opt').val();
            validateForm();
            if (otp != '') {
                $.ajax({  
                     url:"<?php echo base_url(); ?>login/phone",  
                     method:"post",  
                     data:{otp:otp},  
                     dataType:'json',
                     success:function(data){  
                        if (data.status == 'true') {
                            window.location.href='<?php echo base_url("/dashboard"); ?>';
                        }else{
                            $('#otp_result').show().html('<label class="text-danger"><span class="glyphicon glyphicon-ok"></span>Invalid Phone Code</label>').fadeOut(5000);  
                        }
                     }  
                });
            }
        });
        /*login steps*/

        /*empty phone number facebook time submit form*/
        $('#submit_to_phone').click(function(){
            var phone = $('#phone').val();
            var make = $('#carmake').val();
            var models = $('#carmodels').val();
            if (validateFormCheck()) {
                $.ajax({  
                     url:"<?php echo base_url(); ?>ajax/loginphone",  
                     method:"post",  
                     data:{phone:country_code+phone,make:make,models:models},  
                     dataType:'json',
                     success:function(data){  
                        if (data.status=='true') {
                            $('#phone_result').show().html('<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Oops ! That Phone Number is taken</label>').fadeOut(5000);
                        }else{
                            $.ajax({  
                                 url:"<?php echo base_url(); ?>phone/post",  
                                 method:"post",  
                                 data:{empty_phone:country_code+phone},  
                                 dataType:'json',
                                 success:function(data){  
                                    if (data.status == 'success') {
                                        window.location.href='<?php echo base_url("/dashboard"); ?>';
                                    }else{
                                        $('#r_success_msg').show().html('<label class="text-danger"><span class="glyphicon glyphicon-ok"></span>'+data.msg+'</label>').fadeOut(5000);  
                                    }
                                 }  
                            });
                        }
                     }  
                }); 

            }else{
                $('#phone').addClass('invalid');

            }
        });
        /*empty phone number facebook time submit form*/
    });  
    function checkstep1button() {
        // $('#nextBtn').attr('disabled','disabled');
        if ($('#username').val() != '' && $('#email').val() != '' && $('#phone').val() != '') {
            // $('#nextBtn').removeAttr('disabled');
        }
    }
    function checkstep2button() {
        // $('#submit_to_register').attr('disabled','disabled');
        if ($('#opt').val() != '' && $('#carmake').val() != '' && $('#carmodels').val() != '') {
            // $('#submit_to_register').removeAttr('disabled');
        }
    }
    function send_otp(userid) {
        $.ajax({  
             url:"<?php echo base_url(); ?>otp/send/"+userid,  
             method:"get",  
             dataType: "json",
             success:function(data){ 
             },
             error: function(data){
             }
        });  
    }
    function is_opt_check(otp){
        $.ajax({  
             url:"<?php echo base_url(); ?>ajax/otp",  
             method:"post",  
             data:{otp:otp},  
             dataType:'json',
             success:function(data){  
                if (data.status == true) {
                    rturndata =  true;
                }else{
                    rturndata = false;
                }
             }  
        });
    }
    function carmake() {
        $.ajax({  
             url:"<?php echo base_url(); ?>carmakeget",  
             method:"get",  
             dataType: "json",
             success:function(data){ 
                var makeption = '<option value="">Select Make</option>';
                $.each(data, function( index, value ) {
                  makeption += '<option value="'+value.makeID+'">'+value.makeName+'</option>';
                });
                $('#carmake').html(makeption);
             },
             error: function(data){
             }
        });  
    }
    carmake();
    function validateFormCheck() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      y = document.getElementsByClassName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
                   // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      return valid; // return the valid status
    }
 </script> 
