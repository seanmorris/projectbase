<?php
namespace SeanMorris\Iifym\Theme;
class Page extends \SeanMorris\PressKit\Theme\Austere\Page
{

}
__halt_compiler(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=500, initial-scale=0.66, maximum-scale=0.66, user-scalable=0" />
		<title><?php if(isset($title) && $title){?><?=$title;?> - <?php } ?>MacroPie</title>
<?php foreach($js as $j): ?>
		<script type = "text/javascript" src = "<?=$j?>"></script>
<?php endforeach; ?>
<?php foreach($css as $c):?>
		<link href="<?=$c?>" rel="stylesheet">
<?php endforeach; ?>
	</head>
	<body>
		
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<div class = "constrainer">
						<a class="brand" href="/">MacroPie</a>
						<!--
						<div class="nav-collapse collapse">
							<form class="navbar-form pull-right">
								<input class="span2" type="text" placeholder="Email">
								<input class="span2" type="password" placeholder="Password">
								<button type="submit" class="btn">Sign in</button>
							</form>
						</div>
						-->
						<div class = "menu rightAlign">
							<?php echo $menu; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class = "constrainer">
				<?=$messages?>
				<?=$breadcrumbs?>
				<?php foreach($body as $segment){ echo $segment; echo PHP_EOL; } ?>
			</div>
		</div>

		<?php /*
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-41157199-1', 'sean-morris.com');
		ga('send', 'pageview');
		</script>
		*/ ?>
	</body>
</html>
<?php if(isset($comment)): ?>
<!--
<?php echo $comment;?>
-->
<?php endif; ?>