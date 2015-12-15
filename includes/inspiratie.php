<?php

	$items = array();
	$items[] = array('slug' => 'panda', 'title' => 'Panda', 'views' => '123', 'fav' => true, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'zebra', 'title' => 'zebra', 'views' => '234', 'fav' => false, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'paard', 'title' => 'paard', 'views' => '345', 'fav' => false, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'leeuw', 'title' => 'leeuw', 'views' => '456', 'fav' => false, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'chimp', 'title' => 'chimp', 'views' => '146', 'fav' => true, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'eland', 'title' => 'eland', 'views' => '952', 'fav' => false, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'koala', 'title' => 'koala', 'views' => '421', 'fav' => false, 'imagename' => 'img001.jpg');

?>

<section class="container">
	<section class="wrapper">
		<h1>Inspiratie</h1>
		<a href="/hackathon/?page=inspiratie&subpage=voorbeelden">Voorbeelden</a>
		<a href="/hackathon/?page=inspiratie&subpage=maaksels-van-anderen">Maaksels van anderen</a>	

		<ul class="inspiration">
			<?php foreach ($items as $itemkey => $itemprops): ?>
			<?php $faved = ($itemprops['fav'] === true) ? 'fav active' : 'fav'; ?>			
			<li data-imgsrc="<?= $itemprops['imagename']; ?>" data-fav="<?= $itemprops['fav']; ?>" data-title="<?= $itemprops['title']; ?>" data-slug="<?= $itemprops['slug']; ?>" data-views="<?= $itemprops['views']; ?>">
				<div class="image" style="background-image: url(/hackathon/uploads/inspiration/<?= $itemprops['imagename']; ?>);">
					<a href="/hackathon/?page=inspiratie#<?= $itemprops['slug']; ?>"></a>
				</div>
				<header>
					<h3><a href="/hackathon/?page=inspiratie#<?= $itemprops['slug']; ?>"><?= $itemprops['title']; ?></a></h3>
					<div class="details">
						<div class="views"><?= $itemprops['views']; ?></div>
						<div class="<?= $faved; ?>"></div>
					</div>
				</header>
			</li>
			<?php endforeach; ?>
		</ul>
	</section>
</section>