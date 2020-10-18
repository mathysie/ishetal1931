{extends file='skeleton.tpl'}

{block body}
<div class="text-center">
	<h1>😢&nbsp;Het is {$tijd}, helaas geen 19:31&nbsp;😢</h1>

	<button type="button" class="btn btn-block btn-danger" id="push-subscription-button">Ontvang meldingen wanneer het wel 19:31 is!</button>

	<img src="/assets/img/nee/{$picture|escape}" class="img-fluid rounded my-3" alt="Zielig plaatje..."/>
</div>
{/block}
