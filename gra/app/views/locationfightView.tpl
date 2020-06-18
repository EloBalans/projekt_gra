{extends file="main.tpl"}
{block name=content}
    
<div style="margin: 25px 90%">
    <a href="{$conf->action_root}gameview" class="button primary">Back</a>
</div>
<div style="margin: 25px 47%">
    <h1>{$location}</h1>
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
                    
                    
<div class="table-wrapper">
    <table class="alt">
            
        <tbody>
            <tr>
                <td>HP: {$player["hp"]}</td>
                <td>AT: {$player["attack"]}</td>
                <td><center>----------------------------------WALKA----------------------------------</center></td>
                <td>HP: {$monster["hp"]}</td>
                <td>AT: {$monster["attack"]}</td>
            </tr>
            
              
                <tr>   
                    <td>HP: {$hp_user}</td>
                    <td>AT: {$at_user}</td>
                    <td><center> {$player["nick"]} [AT{$at_user}] -> {$monster["name"]} [HP - {$at_user}]</center></td>
                    <td>HP: {$hp_monster}</td>
                    <td>AT: {$at_monster}</td>
                </tr>
           
          
                    
        </body>       
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

<div style="margin: 25px 42%">
    <h1> {$result} </h1>
    </div>
<div style="margin: 25px 45%">
    
    <a href="{$conf->action_root}looplocation" class="button primary">Dalej</a>
</div>
    
{/block} 