{extends file="main.tpl"}


{block name=content}
 <div style="margin: 25px 87%">
       <a href="{$conf->action_root}rankingload" class="button primary">Ranking</a>
       </div>   

<div style="margin: 120px 43%">
<form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	
	<fieldset>
			<label>login: </label>
			<input id="login" type="text" name="login"/>
			<label>hasło: </label>
			<input id="password" type="password" name="password" />
	</fieldset>
        <div style="margin: 20px">
        <input type="submit" value="login" class="pure-button pure-button-primary"/>
         </div>
</form>
{if $msgs->isMessage()}
        <div class="messages bottom-margin">
                <ul>
                {foreach $msgs->getMessages() as $msg}
                {strip}
                        <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
                {/strip}
                {/foreach}
                </ul>
        </div>
{/if}  
       
</div>
 <div style="margin: 25px 38%">
     
     <h2>Nie masz konta?</h2>
 </div>
 <div style="margin: 25px 38%">
     
        <a href="{$conf->action_root}registershow" class="button primary">Zarejestruj się!</a>
 </div>


    
{/block}