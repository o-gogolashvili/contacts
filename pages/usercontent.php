<div class="container">
    <div class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> CONTACTS </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a data-toggle="dropdown" data-target="#" href="index.php">Contacts <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?action=addcontact">Add Contact</a></li>
                            <li><a href="index.php?action=editcontact">Edit Contacts</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?action=logout">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="jumbotron">
	        <?php
				print('Logged in with <b>'.$_SESSION['mail'].'</b>');
	            //user content modules here
                if(isset($_GET['action'])) {
                    if($_GET['action']=='logout') {
                        require('modules/logout.php');
                    }
                    if($_GET['action']=='addcontact') {
                        require('modules/addcontact.php');
                    }
                    if($_GET['action']=='editcontact') {
                        require('modules/editcontact.php');
                    }
                }
                else {
                    require('modules/contactlist.php');
                }
	        ?>
    </div>
    <!-- These scripts are also included in index.php, but they do not work -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</div>
