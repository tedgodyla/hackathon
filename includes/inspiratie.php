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
		// sort theitems by amount of views
		usort($items, function($a, $b) {
		    return $b['views'] - $a['views'];
		});
	}

	else
	{
		// sort items by date. newest should be above.
		$items = array_reverse($items);
	}

	$newclass = (!$sort || $sort === "new") ? " class='active'" : "";
	$viewsclass = ($sort === "views") ? " class='active'" : "";
	$abcclass = ($sort === "abc") ? " class='active'" : "";

?>

<section class="container hero">
    <section class="wrapper">
        <div class="column-mid-left">
        	<h1>Inspiratie</h1>
        	<p>
        		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			 	Nulla accumsan ligula nec accumsan ullamcorper. 
			 	In hac habitasse platea dictumst.
			  	Cum sociis natoque penatibus et magnis dis parturient montes,
			   nascetur ridiculus mus. Integer vulputate nisi in neque pulvinar aliquam.
			</p>
        </div>
        <div class="column-mid-right">
        	<img src="http://placekitten.com/450/150" />
        </div>
        <div class="clear"></div>
    </section>
</section>

<section class="container">
	<section class="wrapper">
		<section class="sort">
			Sorteer op:
			<a<?= $newclass; ?> href="/hackathon/?page=inspiratie&sort=new">Nieuwste</a>
			<a<?= $abcclass; ?> href="/hackathon/?page=inspiratie&sort=abc">Alfabet</a>
			<a<?= $viewsclass; ?> href="/hackathon/?page=inspiratie&sort=views">Views</a>
		</section>
		<ul class="inspiratie gridlist">
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
			<div class="clear"></div>
		</ul>
	</section>
</section>