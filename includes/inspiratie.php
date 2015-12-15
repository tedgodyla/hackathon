<?php

	$sort = $_GET['sort'];

	$items = array();
	$items[] = array('slug' => 'panda', 'title' => 'Panda', 'views' => '123', 'fav' => true, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'zebra', 'title' => 'zebra', 'views' => '234', 'fav' => false, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'paard', 'title' => 'paard', 'views' => '345', 'fav' => false, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'leeuw', 'title' => 'leeuw', 'views' => '456', 'fav' => false, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'chimp', 'title' => 'chimp', 'views' => '146', 'fav' => true, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'eland', 'title' => 'eland', 'views' => '952', 'fav' => false, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'koala', 'title' => 'koala', 'views' => '421', 'fav' => false, 'imagename' => 'img001.jpg');

	if ($sort === "abc")
	{
		// sort the items by alphabetic order
		usort($items, function($a, $b) {
		    return strcmp(strtolower($a['title']), strtolower($b['title']));
		});
	}

	else if ($sort === 'views')
	{
		// sort the items by amount of views
		usort($items, function($a, $b) {
		    return $b['views'] - $a['views'];
		});
	}

	else
	{
		// sort items by date. newest should be above.
		$items = array_reverse($items);
	}

?>

<section class="container">
	<section class="wrapper">
		<h1>Inspiratie</h1>
		<section class="sort">
			Sorteer op
			<a href="/hackathon/?page=inspiratie&sort=new">Nieuwste</a>
			<a href="/hackathon/?page=inspiratie&sort=abc">Alfabet</a>
			<a href="/hackathon/?page=inspiratie&sort=views">Views</a>
		</section>

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