<div class="row height-100 m-0">



    <div class="col-md-6 col-lg-5 col-sm-12 mx-auto p-0">



        <div class="card card-for-center card-mobile">



            <div class="card-body">

                <!-- login div -->

                <h3 class="text-center m-0">

                     <a href="<?php echo base_url(); ?>" class="logo logo-admin"><img src="<?php echo base_url(); ?>assets/images/logo-sm.png" width="150" alt="logo" class="my-3"></a>

                </h3>



                <div class="px-3">

                    <h4 class="text-muted font-18 mb-2 text-center">EV Platform</h4>

                    <p class="text-muted text-center">Lets Charge, Share and Earn</p>

                    <!-- signup/user -->

                    <form class="form-horizontal my-2" action="#" method="post">



                        <?php echo @$error; ?>

                        <div class="r_success_msg otpsended"></div>

                        <div class="tab_wzard">

                            <div class="form-group">

                                <label for="username">Name</label>

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-o"></i></span>

                                    </div>

                                    <input type="text" class="form-control input" id="username" name="username" placeholder="Enter Name" required>

                                </div>                                    

                            </div>



                            <div class="form-group">

                                <label for="username">Email Address</label>

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-envelope-o"></i></span>

                                    </div>

                                    <input type="text" class="form-control input" id="email" name="email" placeholder="Email Address" required>
                                    <span id="email_result" class="result_msg"></span>  

                                </div> 


                            </div>

                            

                            <div class="form-group">

                                <label for="phone">Phone Number (Mobile)</label>

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text" id="basic-addon3-phone"><i class="fa fa-phone"></i></span>

                                    </div>

                                    <input type="text" class="form-control input" id="phone" name="phone" placeholder="Phone Number" maxlength="10" required>
                                    <span id="phone_result" class="result_msg"></span>               

                                </div>


                            </div>

                        </div>

                        <div class="tab_wzard">

                            <div class="form-group">

                                <label for="userpassword">Make</label>

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text" id="basic-addon5"><i class="fa fa-car"></i></span>

                                    </div>

                                    <select class="form-control input" name="make"  id="carmake">

                                        <option value="">Select Make</option>

                                    </select>

                                </div>                                

                            </div>

                            <div class="form-group">

                                <label for="userpassword">Models</label>

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text" id="basic-addon6"><i class="fa fa-car"></i></span>

                                    </div>

                                    <select class="form-control input" name="models" id="carmodels" disabled="">

                                        <option value="">Select Models</option>

                                    </select>

                                </div>                                

                            </div>

                        </div>

                        <div class="tab_wzard">

                            <div class="form-group " id="otp_input">

                                <label for="opt">OTP </label>

                                <div class="input-group mb-1">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text" id="basic-addon4"><i class="fa fa-key"></i></span>

                                    </div>

                                    <input type="text" class="form-control input" value="" id="opt" placeholder="Enter OTP" name="opt">
                                    <span id="otp_result" class="result_msg"></span>                              

                                </div>    
                                <div class="col-md-12 resend">
                                    <a href="#" id="resend" class="" resend="">Resend</a>
                                </div>


                            </div>

                            <div class="form-group row ">

                                <div class="col-sm-12">

                                    <div class="custom-control custom-checkbox">

                                        <input type="checkbox" class="custom-control-input input" id="customControlInline" required>

                                        <label class="custom-control-label" for="customControlInline">

                                            <span class="font-13 text-muted mb-0">By registering you agree to enertia.tech <a href="#">Terms of Use</a></span>
                                        </label>
                                    </div>


                                </div>                                    

                            </div>

                        </div>

                        <div  class="form-group mb-0 row">

                            <div class="loader loader_form"><img width="20" src="<?php echo base_url(); ?>assets/images/loading.gif"></div>

                            <div class="col-12 mt-2">

                                <button type="button" class="btn btn-primary btn-block waves-effect waves-light nextBtn_signup" id="nextBtn" >Next</button>

                                <button type="button" class="btn btn-primary btn-block waves-effect waves-light hide submit_to_action" id="submit_to_register" name="register" value="Register" >Join Network<i class="fa fa-sign-in ml-1"></i></button>

                                <input type="hidden" name="userid" id="userid" value="">

                            </div>

                            <div class="col-12 mt-2">

                                <button type="button" class="btn btn-primary btn-block waves-effect waves-light" id="prevBtn" onclick="nextPrev(-1)">Back</button>

                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 mt-2">

                                <a href="javascript:void(0);" onclick="fbLogin();" class="btn btn-facebook col-md-12">

                                    <i class="fa fa-facebook mr-2"></i> 

                                    Login with Facebook

                                </a>

                            </div>

                        </div>

                    </form>

                </div>

                <div class="m-2 text-center  text-primary">

                    <h4 class="">Already have an Account ? </h4>

                    <!--<p class="font-13">Login <span>ENERTIA</span> Now</p>-->

                    <a href="<?php echo base_url();?>login" class="btn btn-primary waves-effect waves-light">Log In</a>                

                </div>

                <!-- <div class="m-3 text-center  text-primary">

                    <img src="<?php echo base_url('assets/images/car.jpg'); ?>" width="200">

                </div> -->

                <div class="mt-2 text-center">

                    <p class="mb-0"> ©2019 - ENERTIA - Dubai <img src="<?php echo base_url('assets/images/footer.png'); ?>" width="50"> by ThreeFold</p>

                </div>

                <!-- login div -->

            </div>



        </div>



    </div>



</div>
