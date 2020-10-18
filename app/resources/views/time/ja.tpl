{extends file='skeleton.tpl'}

{block body}
<div class="text-center">
	<h1>🔥Het is {$tijd}!🔥</h1>

	<img src="/assets/img/ja/{$picture|escape}" class="img-fluid rounded" alt="Mooi plaatje!"/>
</div>
{/block}
