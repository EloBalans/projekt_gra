{extends file="main.tpl"}


{block name=content}




<div style="margin: 25px 90%">
        <a href="{$conf->action_root}gameView" class="button primary">Back</a>
    </div>


    
    
<div class="bottom-margin">
    
<h3>Ranking</h3>

</div>
    
    
    
<div class="bottom-margin">
    
    <form class="pure-form pure-form-stacked" action="{$conf->action_url}rankingload">
	<fieldset>
		<input type="text" placeholder="nick" name="nick" value="{$searchnickForm->nick}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Szukaj gracza</button>
	</fieldset>
    </form>
</div>	  
   
    

    <div class="table-wrapper" >
            <table class="alt">
                    <thead>
                            <tr>
                                    <th>Nazwa</th>
                                    <th>Id</th>
                                    <th>Poziom</th>
                                    
                            </tr>
                    </thead>
                    <tbody>
                            {foreach $players as $p}
                                {strip}
                                        <tr>
                                                <td>{$p["nick"]}</td>
                                                <td>{$p["iduser"]}</td>
                                                <td>{$p["lvl"]}</td>
                                                
                                        </tr>
                                {/strip}
                            {/foreach}
                    </tbody>
            </table>
    </div>
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
    
{/block}