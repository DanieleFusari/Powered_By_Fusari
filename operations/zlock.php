<?php
$auth = new Auth;
$auth->ipcheck();

//  name zlock.php so loads last in operations.  This is only loaded in the test site so only my ip can access
