<h2 class="major">Vie associative</h2>
<p>La vie associative est un aspect très important du BDE, quelque soit tes passions tu trouveras forcément un club qui te plaira !</p>

<?php $clubs = api("get_liste_clubs");
foreach ($clubs['liste'] as $c) : ?>
	<form>
		<div class="field half first">
			<span class="image"><img style="width:100%;" src="<?php echo $c['img'] ?>"></span>
		</div>
		<div class="field half">
			<h2><?php echo $c['nom'] ?></h2>
			<p><?php echo zcode($c['description_courte']); ?></p>
			<p><a href="?c=<?php echo $c['id'] ?>#details_club">En savoir plus</a></p>
			<ul class="icons">
				<?php if (!empty($c['twitter'])) : ?>
				<li><a href="'.$c['twitter'].'" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<?php endif; ?>
				<?php if (!empty($c['facebook'])) : ?>
				<li><a href="'.$c['facebook'].'" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<?php endif; ?>
			</ul>
		</div>
		<div style="clear:both"></div>
	</form>
<?php endforeach; ?>

<blockquote>
	<a href="https://www.youtube.com/watch?v=QKzsdpZ74x0&amp;feature=youtu.be&amp;t=52">ISIMALT, ISIBOUFFE, ISIOKE, Pas venu là simplement pour programmer...</a><br>
	<span style="float:right">BDE GriZZlys - 2013</span>
</blockquote>

<h3>Voir aussi:</h3>
<a href="#partenaires">Nos partenaires</a>
