<?php

	$items = array();
	$items[] = array('slug' => 'oortjes', 'title' => 'Oortjes', 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'staart', 'title' => 'Staart', 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'voetjes', 'title' => 'Voetjes', 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'strikje', 'title' => 'Strikje', 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'ogen', 'title' => 'Ogen', 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'neusje', 'title' => 'Neusje', 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'versiering', 'title' => 'Versiering', 'imagename' => 'img001.jpg');

?>

<section class="container">
	<section class="wrapper">
		<h1>Instructies</h1>

		<ul class="instructies gridlist">
			<?php foreach ($items as $itemkey => $itemprops): ?>
				<li data-imgsrc="<?= $itemprops['imagename']; ?>" data-title="<?= $itemprops['title']; ?>" data-slug="<?= $itemprops['slug']; ?>">
					<div class="image" style="background-image: url(/hackathon/uploads/instructies/<?= $itemprops['imagename']; ?>);">
						<a href="/hackathon/?page=instructies#<?= $itemprops['slug']; ?>"></a>
					</div>
					<header>
						<h3><a href="/hackathon/?page=instructies#<?= $itemprops['slug']; ?>"><?= $itemprops['title']; ?></a></h3>
					</header>
				</li>
			<?php endforeach; ?>
			<div class="clear"></div>
		</ul>
	</section>
</section>