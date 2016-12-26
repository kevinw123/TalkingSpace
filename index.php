<?php require('core/init.php'); ?>

<?php
// Get Template and Assign Variables
$template = new Template('templates/frontpage.php');

// Assign variables
$template->heading = 'This is the template heading';

// Display Template
echo $template;