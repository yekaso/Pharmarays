
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    include('lock.php');
    ?>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
            <title>Pharmaray User</title>
            <link rel="icon" href="<?= base_url() ?>/favicon.gif" type="image/gif">
                </head> <link type="text/css" rel="stylesheet" href="css/userpage.css"> 

                    <body><form id="logout" action="logout.php" method="post">
                            <div id="globalheader_wrapper">
                                <div id="globalheader"> 
                                    <img src="images/pharmarays.png" /><ul>
                                        <li><a  target="_top" href="#"> Home </a></li>
                                        <li><a  target="_top" href="#"> News and Events </a></li>
                                        <li><a  target="_top" href="#"> Articles and Journals </a></li>
                                        <li><a class="header selected" target="_top" href="javascript: submitform()"> Logout </a></li></ul>

                                </div>

                            </div></form>