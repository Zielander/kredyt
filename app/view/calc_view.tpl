{extends file=$conf->root_path|cat:"/app/view/view.tpl"}
{block name=title}Kalkulator kredytowy{/block}
{block name=body}Oblicz ile będą Cię kosztować raty i odsetki{/block}
{block name=content}
<div style="width:90%; margin: 2em auto;">
<form action="{$app_url}/app/calc.php?action=process" method="post" class="pure-form pure-form-stacked">
		<label for="id_kwota">Kwota: </label>
		<input id="id_kwota" type="text" name="kwota" value="{$form->kwota}"/><br />
		<label for="id_oprocentowanie">Oprocentowanie (w %): </label>
		<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="{$form->oprocentowanie}"/><br />
		<label for="id_lata">Długość kredytu w latach: </label>
		<input id="id_lata" type="text" name="lata" value="{$form->lata}"/><br />
		<label for="id_ile_rat">Częstość spłacania raty: </label>
		<select name="ile_rat">
			<option value="miesięczna">miesięczna</option>
			<option value="tygodniowa">tygodniowa</option>
			<option value="kwartalna">kwartalna</option>
			<option value="półroczna">półroczna</option>
		</select><br />
		
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	
</div>


{if $messages->isError()}
	<h3>Wystąpiły błędy: </h3>
	<ol class="err">
	{foreach $messages->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}


{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $messages->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($result->rata) && isset($result->suma) && isset($result->odsetki)}
	<h3> Wynik </h3>
	<p class="res">
    {$result->rata}
    </p>
	
	<p class="res">
    {$result->suma}
    </p>

	<p class="res">
    {$result->odsetki}
    </p>
{/if}

{/block}