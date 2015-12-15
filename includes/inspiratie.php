<?php

	$sort = $_GET['sort'];

	$items = array();
	$items[] = array('slug' => 'panda', 'title' => 'Panda', 'views' => '123', 'fav' => true, 'imagename' => 'img001.jpg');
	$items[] = array('slug' => 'zebra', 'title' => 'Zebra', 'views' => '234', 'fav' => false, 'imagename' => 'img002.jpg');
	$items[] = array('slug' => 'paard', 'title' => 'Paard', 'views' => '345', 'fav' => false, 'imagename' => 'img003.jpg');
	$items[] = array('slug' => 'leeuw', 'title' => 'Leeuw', 'views' => '456', 'fav' => false, 'imagename' => 'img002.jpg');
	$items[] = array('slug' => 'chimp', 'title' => 'Chimp', 'views' => '146', 'fav' => true, 'imagename' => 'img003.jpg');
	$items[] = array('slug' => 'eland', 'title' => 'Eland', 'views' => '952', 'fav' => false, 'imagename' => 'img001.jpg');

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

<section class="container brown">
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
        	<img src="/hackathon/lib/images/inspiratie.jpg" />
        </div>
        <div class="clear"></div>
    </section>
</section>

<section class="container">
	<section class="wrapper">
		<div class="opties">
			<section class="sort">
				Sorteer op:
				<a<?= $newclass; ?> href="/hackathon/?page=inspiratie&sort=new">Nieuwste</a>
				<a<?= $abcclass; ?> href="/hackathon/?page=inspiratie&sort=abc">Alfabet</a>
				<a<?= $viewsclass; ?> href="/hackathon/?page=inspiratie&sort=views">Views</a>
			</section>
			<section class="uploaden">
				<a href="/hackathon/?page=inspiratie">Deel jouw Teddypy</a>
			</section>
			<div class="clear"></div>
		</div>
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
							<div class="views icon icon-eye"><span><?= $itemprops['views']; ?></span></div>
							<div class="<?= $faved; ?> icon icon-heart"></div>
						</div>
					</header>
				</li>
			<?php endforeach; ?>
			<div class="clear"></div>
		</ul>
	</section>
</section>