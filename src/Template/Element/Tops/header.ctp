<div id="header">
	<div id="logo">
		<div id="logo_text">
			<!-- class="logo_colour", allows you to change the colour of the text -->
			<h1>
				<?=$this->Html->link('TECH' . $this->Html->tag('span', 'Tech Blogs', ['class' => 'logo_colour']), ['controller' => 'tops', 'action' => 'top'], ['escape' => false]) ?>
			</h1>
			<h2>Simple. Contemporary. Website Template.</h2>
		</div>
	</div>
	<?=$this->element('Tops/menu')?>
</div>