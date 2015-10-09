<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
	
	<?= $this->Html->css(array(
							'bootstrap-cerulean.min.css',
							//'bootstrap-cyborg.min.css',
							//'bootstrap-darkly.min.css',
							//'bootstrap-lumen.min.css',
							//'bootstrap-simplex.min.css',
							//'bootstrap-slate.min.css',
							//'bootstrap-spacelab.min.css',
							//'bootstrap-united.min.css'
							)
					);
	?>
    <?= $this->Html->css(array('animate.min.css',
								'charisma-app.css',
								'elfinder.min.css',
								'elfinder.theme.css',
								'jquery.iphone.toggle.css',
								'jquery.noty.css',
								'jquery-ui-1.8.21.custom.css',
								'noty_theme_default.css',
								'uploadify.css')
						);
	?>
	<?= $this->Html->css(array('fullcalender/fullcalendar.css',
							   'fullcalender/fullcalendar.print.css',
							   'chosen/chosen.min.css',
							   'colorbox/example3/colorbox.css',
							   'responsive-tables/responsive-tables.css',
							   'bootstrap-tour/build/css/bootstrap-tour.min.css')
						);
	?>
	<?= $this->Html->script('https://code.jquery.com/jquery-git2.min.js') ?>
<?php 
echo $this->Jquery->jqueryLoad('var $ = jQuery.noConflict();');
?>
<style>
body > iframe {
  margin-right: -39px;
  transition: all 300ms ease 300ms;
}
body > iframe:hover {
  margin-right: 0;
}
</style>
</head>
<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <?php echo $this->Html->image('logo20.png', array('alt' => 'CakePHP','class'=>'hidden-xs'));?>
                <span><?= $this->fetch('title') ?></span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
	<div id="container">

        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
	
	</div>
	<footer class="row">
		<p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
				Usman</a> 2012 - 2015</p>

		<p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
				href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
	</footer>


<?= $this->Html->script(array(
							'jquery.dataTables.min.js',
							'charisma.js',
							'init-chart.js',
							'jquery.autogrow-textarea.js',
							'jquery.cookie.js',
							'jquery.history.js',
							'jquery.iphone.toggle.js',
							'jquery.noty.js',
							'jquery.raty.min.js',
							'jquery.uploadify-3.1.min.js'
							)
						);
?>
<?= $this->Html->script(array(
							'bootstrap/dist/js/bootstrap.min.js',
							'moment/min/moment.min.js',
							'fullcalendar/dist/fullcalendar.min.js',
							'chosen/chosen.jquery.min.js',
							'colorbox/jquery.colorbox-min.js',
							'responsive-tables/responsive-tables.js',
							'bootstrap-tour/build/js/bootstrap-tour.min.js',
							)
						);
?>

</body>
</html>
