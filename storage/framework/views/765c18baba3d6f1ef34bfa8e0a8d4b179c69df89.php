
                    

                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                        <meta name="csrf-token" content="0QKomVmdsA1RZnBsezSEeZVzAib4AqA1DpBU7WNa">
                        <link rel="icon" href="http://puffintheme.com/demo/epic/hr/laravel/public/assets/images/favicon.ico" type="image/x-icon"> <!-- Favicon-->
                        <title>Login - Laravel</title>
                        <meta name="description" content="Laravel">
                        <meta name="author" content="Laravel">


                        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">



                        <!-- Custom Css -->
                        <link rel="stylesheet" href="<?php echo e(asset('/assets/css/main.css')); ?>">
                        <link rel="stylesheet" href="<?php echo e(asset('assets/css/theme1.css')); ?>">
                    </head>

                    <body class="theme-cyan font-montserrat">

                    <!-- Page Loader -->
                    <div class="page-loader-wrapper">
                        <div class="loader">
                        </div>
                    </div>

                    <div class="auth" >
                        <div class="auth_left">
                            <div class="card">
                        <div class="text-center mb-2">
                            <a class="header-brand" href="http://puffintheme.com/demo/epic/hr/laravel/public/hrms/index"><i class="fe fe-command brand-logo"></i></a>
                        </div>
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                        <div class="card-body">
                            <div class="card-title">Login to your account</div>
                            <!-- <div class="form-group">
                                <select class="custom-select">
                                    <option>HR Dashboard</option>
                                    <option>Project Dashboard</option>
                                    <option>Job Portal</option>
                                </select>
                            </div> -->
                            <div class="form-group">

                                <label class="form-label">Email</label>
                                    <input id="email" type="email" placeholder="Email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email"  autofocus>

                                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                            </div>
                           
                            <div class="form-group">
                                <label class="form-label">Password<a href="forgot-password.html" class="float-right small">I forgot password</a></label>
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password" placeholder="Password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>/>
                                <span class="custom-control-label">Remember me</span>
                                </label>
                            </div>
                            <div class="form-footer">
                                <button type="submit" href="#" class="btn btn-primary btn-block" title="">Sign in</a>
                            </div>
                        </div>
                    </form>
                        <!-- <div class="text-center text-muted">
                            Don't have account yet? <a href="#">Sign up</a>
                        </div> -->
                    </div>
                        </div>
                        <div class="auth_right">
                        <div class="carousel slide" data-ride="carousel" data-interval="3000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo e(asset('assets/images/slider1.svg')); ?>" class="img-fluid" alt="login page" />
                                    <div class="px-4 mt-4">
                                        <h4>Fully Responsive</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo e(asset('assets/images/slider2.svg')); ?>" class="img-fluid" alt="login page" />
                                    <div class="px-4 mt-4">
                                        <h4>Quality Code and Easy Customizability</h4>
                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo e(asset('/assets/images/slider3.svg')); ?>" class="img-fluid" alt="login page" />
                                    <div class="px-4 mt-4">
                                        <h4>Cross Browser Compatibility</h4>
                                        <p>Overview We're a group of women who want to learn JavaScript.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div>

                    <!-- Scripts -->

                    <script src="<?php echo e(asset('assets/js/lib.vendor.bundle.js')); ?>"></script>
                    <script src="<?php echo e(asset('assets/js/core.js')); ?>"></script>



                    </body>
                    </html>
<?php /**PATH D:\laragon\www\pmtool\resources\views/auth/login.blade.php ENDPATH**/ ?>