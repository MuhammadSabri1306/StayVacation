<header class="bg-light pt-12">
	<h6 class="mb-4 brand text-center">StayVacation</h6>
	<nav class="navbar">
		<div class="container grid-16 grid-cols-1 lg:px-12">
			<div class="flex justify-between items-center">
				<ul class="flex items-center"><?php

foreach($this->nav as $nav):

					?><li class="pr-5">
						<a href="<?=$nav['url']?>" class="p-3 primary-link<?=$nav['active'] ? ' active' : ''?>"><?=$nav['title']?></a>
					</li><?php
endforeach;

				?></ul>
				<a href="<?=$this->btnContact['url']?>" class="btn-hero bg-transparent transition-color transition-200 hover:bg-dark hover:text-white"><?=$this->btnContact['title']?></a>
			</div>
		</div>
	</nav>
</header>
