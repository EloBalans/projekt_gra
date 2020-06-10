{extends file="main.tpl"}


{block name=content}


<div style="margin: 120px 43%">
<form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<legend>Zaloguj się</legend>
	<fieldset>
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
			<label for="id_pass">hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
	</fieldset>
        <input type="submit" value="login" class="pure-button pure-button-primary"/>
</form>	
       
</div>
 <div style="margin: 25px 38%">
     
     <h2>Nie masz konta?
 </div>
 <div style="margin: 25px 38%">
     
        <a href="{$conf->action_root}register" class="button primary">Zarejestruj się!</a>
 </div>
<div class="messages">
{if $msgs->isError()}
	<h4>Errors occured: </h4>
	<ol id="err">
	{foreach  $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if $msgs->isInfo()}
	<h4>Info: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Result</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>


    
{/block}