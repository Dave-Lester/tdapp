

<!-- Modal -->
<div class="modal fade" id="login_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="text-right pr-3">
                    <button type="button" class="close position-absolute" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" id="login-form">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <div class="font-weight-bold h5 text-center pt-4 pb-3">Login Form</div>
                            <div class="text-secondary">Username</div>
                            <div>
                                <input type="text" class="form-control form" style="border-radius:25px;" name="username" required />
                            </div>
                            <div class="text-secondary pt-2">Password</div>
                            <div>
                                <div class="text-right" style="padding-right:30px;color:gray">
                                    <a style="position:absolute;padding-top:7px;cursor:pointer" onclick="showpassword('password_login')">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                                <input type="password" class="form-control form" style="border-radius:25px;" id="password_login" name="password" required />

                               
                            </div>
                            <div class="pt-5"></div>
                            <button class="btn btn-info btn-flat w-100" style="border-radius:25px;">Login</button>
                            <div class="pt-4"></div>
                            <div class="text-center">
                                Don't have an account?
                                <a href="#" class="text-secondary" data-dismiss="modal" data-toggle="modal" data-target="#register_modal">Signup</a>
                            </div>
                            <div class="py-4"></div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>










<div class="modal fade" id="register_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="text-right pr-3">
                    <button type="button" class="close position-absolute" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" id="registration">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <div class="font-weight-bold h5 text-center pt-4 pb-3">Registration Form</div>
                            <div class="text-secondary">Firstname</div>
                            <div>  
                                <input type="text" class="form-control form" style="border-radius:25px;" name="firstname" required />
                            </div>
                            <div class="text-secondary pt-2">Lastname</div>
                             <div>  
                                <input type="text" class="form-control form" style="border-radius:25px;" name="lastname" required />
                            </div>
                            <div class="text-secondary pt-2">Username</div>
                             <div>  
                                <input type="text" class="form-control form" style="border-radius:25px;" name="username" required />
                            </div>
                            <div class="text-secondary pt-2">Email</div>
                             <div>  
                                <input type="text" class="form-control form" style="border-radius:25px;" name="email" required />
                            </div>
                            <div class="text-secondary pt-2">Password</div>
                            <div>
                                <div class="text-right" style="padding-right:30px;color:gray">
                                    <a style="position:absolute;padding-top:7px;cursor:pointer" onclick="showpassword('password_register')">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                                <input type="password" class="form-control form" style="border-radius:25px;" id="password_register" name="password" required />

                               
                            </div>



                            <div class="pt-5"></div>
                            <button class="btn btn-info btn-flat w-100" style="border-radius:25px;">Sign Up</button>
                            <div class="pt-4"></div>
                            <div class="text-center">
                                I have an account?
                                <a href="#" class="text-secondary" data-dismiss="modal" data-toggle="modal" data-target="#login_modal" >Signin</a>
                            </div>
                            <div class="py-4"></div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>





<script>
    function showpassword(id) {
        var pass = document.getElementById(id);
        if (pass.getAttribute('type') == 'password') {
            pass.setAttribute('type', 'text');
        }
        else
        {
              pass.setAttribute('type', 'password');
        }
    }
        $(function(){
            $('#registration').submit(function(e){
                e.preventDefault();
                start_loader()
                if($('.err-msg').length > 0)
                    $('.err-msg').remove();
                $.ajax({
                    url:_base_url_+"classes/Master.php?f=register",
                    method:"POST",
                    data:$(this).serialize(),
                    dataType:"json",
                    error:err=>{
                        console.log(err)
                        alert_toast("an error occured",'error')
                        end_loader()
                    },
                    success:function(resp){
                        if (typeof resp == 'object' && resp.status == 'success') {
                            alert_toast("Account succesfully registered",'success')
                            setTimeout(function(){
                                location.reload()
                            },2000)
                        }else if(resp.status == 'failed' && !!resp.msg){
                            var _err_el = $('<div>')
                                _err_el.addClass("alert alert-danger err-msg").text(resp.msg)
                            $('#registration').prepend(_err_el)
                            end_loader()

                        }else{
                            console.log(resp)
                            alert_toast("an error occured",'error')
                            end_loader()
                        }
                    }
                })
            })
            $('#login-form').submit(function(e){
                e.preventDefault();
                start_loader()
                if($('.err-msg').length > 0)
                    $('.err-msg').remove();
                $.ajax({
                    url:_base_url_+"classes/Login.php?f=login_user",
                    method:"POST",
                    data:$(this).serialize(),
                    dataType:"json",
                    error:err=>{
                        console.log(err)
                        alert_toast("an error occured",'error')
                        end_loader()
                    },
                    success:function(resp){
                        if(typeof resp == 'object' && resp.status == 'success'){
                            alert_toast("Login Successfully",'success')
                            setTimeout(function(){
                                location.reload()
                            },2000)
                        }else if(resp.status == 'incorrect'){
                            var _err_el = $('<div>')
                                _err_el.addClass("alert alert-danger err-msg").text("Incorrect Credentials.")
                            $('#login-form').prepend(_err_el)
                            end_loader()

                        }else{
                            console.log(resp)
                            alert_toast("an error occured",'error')
                            end_loader()
                        }
                    }
                })
            })
        })
</script>