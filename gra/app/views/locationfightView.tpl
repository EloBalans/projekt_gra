{extends file="main.tpl"}
{block name=content}
    
<div style="margin: 25px 90%">
    <a href="{$conf->action_root}gameview" class="button primary">Back</a>
</div>
    
<header>                   
</header>
    
<div class="table-wrapper">    
    <table class="alt"> 
        <tbody>	
            <tr>
                <td>
                    <p><div class="image right  "><img src="images/pic02.jpg" alt="" /></div> 
                    <h1>{$player["nick"]}</h1> 
                    Poziom: {$player["lvl"]} <br/> 
                    Doświadczenie:  {$player["exp"]}<br/> 
                    Złoto: {$player["gold"]}<br/> 
                    Punkty życia: {$player["hp"]}<br/>
                    Punkty ataku: {$player["attack"]} <br/> </p>
                </td>


                <td>
                    <p><div class="image right"><img src="images/pic02.jpg" alt="" /></div> 
                    <h1>{$monster["name"]}</h1>
                    Poziom: {$monster["lvl"]} <br/> 
                    Punkty życia: {$monster["hp"]}<br/>
                    Punkty ataku: {$monster["attack"]} <br/>
                    Nagroda za zabicie:<br/>
                    Złoto: {$monster["gold"]}, Doświadczenie: {$monster["exp"]}<br/> 
                    </p>   
                </td>

            </tr>
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

<div style="margin: 25px 40%">
    <h1> Wygrana! </h1>
    <a href="{$conf->action_root}gameView" class="button primary">Dalej</a>
</div>
    
{/block} 