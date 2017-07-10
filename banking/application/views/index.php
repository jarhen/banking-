<div class="container">
	
	 <h1 class="welcome text-center">Welcome to Bankrupt Online Banking</h1>
	 <div class="col-lg-4">
	<div class="card card-container margin-top">
        <h2 class='login_title text-center'>Login</h2>
        <hr>
            <form class="form-signin"  id="login-form">
			<div id="loader"></div>
                <span id="reauth-user" class="reauth-email"></span>
                <p class="input_title">Username</p>
                <input type="text" id="inputEmail" class="login_box" name="username" placeholder="Juan" required autofocus>
                <p class="input_title">Password</p>
                <input type="password" id="inputPassword" class="login_box" name="password" placeholder="******" required>
                <button type="submit" class="btn btn-lg btn-primary" id="btn-submit">Login</button>
            </form><!-- /form -->
			
        </div><!-- /card-container -->
	</div>
	<div class="col-lg-8 card card-container margin-top">
	<img src="<?=base_url('assets/images/logo.jpg')?>" class="img-responsive">
	</div>
</div>
