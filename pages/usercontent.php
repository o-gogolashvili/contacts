<div class="container">
    <div class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"> CONTACTS </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"><b><?php
                                $user = mysql_query("SELECT * FROM users WHERE id='".$_SESSION['id']."'");
                                $user = mysql_fetch_array($user);
                                print($user['first_name'].' '.$user['last_name']);
                            ?></b></a> <!-- Dynamically generated user's fist and last names -->
                    </li>
                </ul>
                <form action="" method="POST" class="navbar-form navbar-left">
                    <input class="form-control" placeholder="Search" name="searchTerm">
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a data-toggle="dropdown" data-target="#" href="index.php">Contacts <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?action=listcontacts"><span class="glyphicon glyphicon-list"></span> List Contacts</a></li>
                            <li><a href="index.php?action=addcontact"><span class="glyphicon glyphicon-plus"></span> Add Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?action=logout">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <?php
            //user content modules here
            if(isset($_GET['action'])) {
                if($_GET['action']=='logout') {
                    require('modules/logout.php');
                }
                if($_GET['action']=='addcontact') {
                    require('modules/addcontact.php');
                }
                if($_GET['action']=='listcontacts') {
                    require('modules/contactlist.php');
                }
                 if($_GET['action']=='deletecontact') {
                    require('modules/deletecontact.php');
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
</div>
