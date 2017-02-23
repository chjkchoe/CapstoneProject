
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>New account</h1>



                        <hr>

                        <form action="register/insert" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" id="name" type="text" ><?php echo form_error('name');?>
                            </div>
                            <div class="form-group">
                                <label for="phone">Số ĐT</label>
                                <input class="form-control" id="email" type="text"><?php echo form_error('phone');?>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input class="form-control" id="email" type="text"><?php echo form_error('address');?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" type="text"><?php echo form_error('email');?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" type="password"><?php echo form_error('password');?>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md" value="register"></i> Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>


                        <hr>

                        <form action="login" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" type="text">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" type="password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.container --