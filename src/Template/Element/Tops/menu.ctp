<div id="menubar">
	<ul id="menu">
		<!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
		<li class="selected">
			<?=$this->Html->link('Home', ['controller' => 'tops', 'action' => 'top'])?>
		</li>
		<li>
			<?=$this->Html->link('Examples', ['controller' => 'tops', 'action' => 'top'])?>
		</li>
		<li>
			<?=$this->Html->link('A Page', ['controller' => 'tops', 'action' => 'top'])?>
		</li>
		<li>
			<?=$this->Html->link('Another Page', ['controller' => 'tops', 'action' => 'top'])?>
		</li>
		<li>
			<?=$this->Html->link('Contact Us', ['controller' => 'tops', 'action' => 'top'])?>
		</li>
	</ul>
</div>