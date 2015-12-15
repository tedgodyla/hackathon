<?php

	$sort = $_GET['sort'];

	$items = array();
	$items[] = array('slug' => 'panda', 'title' => 'Poot', 'views' => '123', 'type' => "fav", 'imagename' => 'poot-beer.jpg');
	$items[] = array('slug' => 'zebra', 'title' => 'Beer', 'views' => '234', 'type' => "upload", 'imagename' => 'img002.jpg');
	$items[] = array('slug' => 'paard', 'title' => 'Oren', 'views' => '345', 'type' => "upload", 'imagename' => 'oor-beer.jpg');
	$items[] = array('slug' => 'leeuw', 'title' => 'Hartje', 'views' => '456', 'type' => "upload", 'imagename' => 'groen-hart.jpg');
	$items[] = array('slug' => 'chimp', 'title' => 'Beer', 'views' => '146', 'type' => "fav", 'imagename' => 'img003.jpg');
	$items[] = array('slug' => 'eland', 'title' => 'Beertje', 'views' => '952', 'type' => "upload", 'imagename' => 'img001.jpg');

	$temp_items = array();

	if ($sort === 'favs')
	{
		// sort the items by alphabetic order
		for ($i = 0; $i < count($items); $i++)
		{ 
			if ($items[$i]['type'] === "fav")
			{
				$temp_items[] = $items[$i];
			}
		}
	}

	else
	{
		// sort the items by alphabetic order
		for ($i = 0; $i < count($items); $i++)
		{ 
			if ($items[$i]['type'] === "upload")
			{
				$temp_items[] = $items[$i];
			}
		}
	}

	$items = $temp_items;

	$uploadsclass = (!$sort || $sort === "uploads") ? " class='active'" : "";
	$favclass = ($sort === "favs") ? " class='active'" : "";

?>

<section class="container brown profile">
    <section class="wrapper">
        <div class="column-small-left">
        	<img src="/hackathon/lib/images/trudy.jpg" />
        </div>
        <div class="column-big-right">
        	<h1>Trudy van der laan</h1>
        	<p>
        		<span class="icon icon-female">Vrouw, 59 jaar</span><br><br>
			</p>
			<p>
				Hoi, ik ben trudy. Ik ben 59 jaar oud en houd erg van breien en kaartjes maken en natuurlijk van Teddypy stukjes maken. Het combineert me hobby met het oplossen van een wereldwijd probleem, namelijk jonge kinderen met trauma's helpen. Dat vind ik zo leuk van Teddypy
			</p>
        </div>
        <div class="clear"></div>
    </section>
</section>

<section class="container">
	<section class="wrapper">
		<div class="opties">
			<section class="sort">
				Bekijk:
				<a<?= $uploadsclass; ?> href="/hackathon/?page=jouw-profiel&sort=uploads">Jouw uploads</a>
				<a<?= $favclass; ?> href="/hackathon/?page=jouw-profiel&sort=favs">Jouw favorieten</a>
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