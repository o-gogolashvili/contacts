<div class="container">
    <div class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> CONTACTS </a>
            </div>
            <div class="navbar-collapse collapse">
                <form class="navbar-form navbar-right" role="form" action="" method="post">
                    <div class="form-group">
                        <input class="form-control" name="mail" type="email" placeholder="Email" tabindex="1" autofocus/><br/>
                        <div class="form-refs">
				<input type="checkbox" name="remember" value="0" tabindex="3"> Remember me
			</div>
                    </div>
                    <div class="form-group">
			<input class="form-control" name="password" type="password" placeholder="Password" tabindex="2"/>
			<input class="btn btn-success" name="signIn" type="submit" value="Log In" tabindex="4"/><br/>
                        <div class="form-refs">
				<a href="#"> Forgot your password?</a>
			</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <?php
            if(isset($_POST['signUp'])) {
                require('modules/signup.php');
            }
            if(isset($_POST['signIn'])) {
                require('modules/signin.php');
            }
        ?>
        <form class="form-signup" action="" method="post" role="form">
            <h2 class="form-signup-heading"> Create an account </h2>
            <input class="form-control" name="mail" type="email" placeholder="Email" required />
            <input class="form-control" name="firstName" type="text" placeholder="First Name"/>
            <input class="form-control" name="lastName" type="text" placeholder="Last Name"/>
            <input class="form-control" name="password" type="password" placeholder="Password"/>
         	<input class="form-control" name="rePassword" type="password" placeholder="Re-enter Password"/>
            <input class="btn btn-success" name="signUp" type="submit" value="Sign Up"/>
        </form>
    </div>
</div>