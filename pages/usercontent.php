<div class="container">
    <div class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> CONTACTS </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                	<li>
                		<a class="btn" href="index.php?action=logout">Log Out</a>
                	</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="jumbotron">
	        <?php
				print('Logged in with <b>'.$_SESSION['mail'].'</b>');
	            //user content modules here
	        ?>
    </div>
</div>
