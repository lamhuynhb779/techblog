<div id="menubar">
	<ul id="menu">
		<li class="selected">
			<?=$this->Html->link('Home', ['controller' => 'tops', 'action' => 'top'])?>
		</li>
		<li>
			<?=$this->Html->link('Examples', ['controller' => 'tops', 'action' => 'example'])?>
		</li>
		<li>
			<?=$this->Html->link('A Page', ['controller' => 'tops', 'action' => 'onePage'])?>
		</li>
		<li>
			<?=$this->Html->link('Another Page', ['controller' => 'tops', 'action' => 'another'])?>
		</li>
		<li>
			<?=$this->Html->link('Contact Us', ['controller' => 'tops', 'action' => 'contact'])?>
		</li>
	</ul>
</div>