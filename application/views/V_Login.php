<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Login Page</title>
    
</head>
<body class="bg-black m-3">

<img style="width: 350px; height: 100px;" src="<?php echo base_url();?>assets/images/longwayslogowhite.png">
<div class="row" style="margin:20px">
                            <div class="col-lg-12">
                                <div class="pg-contact-form pg-contact-form-2 mr-0 mr-lg-3">
                                    
                                   
                                      
                                   
                                    <form id="contact-form" action="<?php echo base_url();?>prosesLogin" method="post">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-input">
                                                    <input name="id" type="text" placeholder="ID">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-input">
                                                    <input name="pass" type="password" placeholder="Password">
                                                </div>
                                            </div>
                                                <div class="single-input">
                                                    <button class="cr-btn" type="submit">
                                                        <span>Login</span>
                                                    <b></b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
</body>
</html>