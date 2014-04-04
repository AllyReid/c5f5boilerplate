<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php  defined('C5_EXECUTE') or die("Access Denied.");
Loader::library('3rdparty/mobile_detect');
$md = new Mobile_Detect();
$deviceType = 'desktop';
if ($md->isTablet()) {
    $deviceType = 'tablet';
}
else if ($md->isMobile()) {
    $deviceType = 'mobile';
}
define("DEVICE_TYPE", $deviceType);
?>

<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>">
<head>
    <?php Loader::packageElement('header_required', 'c5f5boilerplate'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/main.css">
    <script src="<?php echo $this->getThemePath(); ?>/bower_components/modernizr/modernizr.js"></script>
    <?php
        if ($c->isEditMode()) {  ?>
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/typography.css">
        <style type="text/css">#ccm-highlighter, .ccm-menu {margin-top:-49px;}</style>
    <?php } ?>
</head>
<body class="<?php if ($c->isEditMode()) { ?>edit <?php } ?><?php $pageTypeName = strtolower($c->getCollectionTypeName());  $bodyClass = str_replace(' ', '-', trim($pageTypeName)); echo $bodyClass . ' ' . $deviceType; ?> clearfix ">

<div class="row">
    <div class="small-12 columns">
        <?php
            $a = new GlobalArea('Header Nav');
            $a->display();
        ?>
    </div>
</div>
<!-- end header.php -->
