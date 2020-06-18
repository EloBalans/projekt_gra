{extends file="main.tpl"}
{block name=content}
    <div style="margin: 25px 87%">
        
        <a href="{$conf->action_root}logout" class="button primary">Wyloguj</a>
    
        
    </div>
        <div style="margin: 25px 87%">
       <a href="{$conf->action_root}rankingload" class="button primary">Ranking</a>
       </div>   
    
    <header>
        <ul class="actions fit">
										
	</ul>
<div class="table-wrapper">      
<table class="alt">  
    
	<tbody>	
            <tr>
     <td>
        <p><div class="image left"><img src="images/pic02.jpg"  alt="" /></div> 
        <h1>{$player["nick"]}</h1> 
        Poziom: {$player["lvl"]} <br/> 
        Doświadczenie:  {$player["exp"]}<br/> 
        Złoto: {$player["gold"]}<br/> 
        Punkty życia: {$player["hp"]}<br/>
        Punkty ataku: {$player["attack"]} <br/> </p>
   </td>
    
   	</tr>
</tbody>
</table>
</div>   
      
            
    
        
       

    </header>
    
        <section class="tiles">
            <article class="style10">
                    <span class="image">
                            <img src="images/forest.png" alt="" />
                    </span>
                    <a href="{$conf->action_root}map1">
                            <h2>Las</h2>
                            <div class="content">
                                    <p>Tutaj znajdują się potwory od 1 lvl do 5 lvl</p>	
                            </div>
                    </a>
            </article>
            <article class="style10">
                    <span class="image">
                            <img src="images/pustynia.png" alt="" />
                    </span>
                    <a href="{$conf->action_root}map2">
                            <h2>Pustynia</h2>
                            <div class="content">
                                    <p>Tutaj znajdują się potwory od 6 lvl do 10 lvl</p>
                            </div>
                    </a>
            </article>
            <article class="style10">
                    <span class="image">
                            <img src="images/bagno.png" alt="" />
                    </span>
                    <a href="{$conf->action_root}map3">
                            <h2>Bagna</h2>
                            <div class="content">
                                    <p>Tutaj znajdują się potwory od 11 lvl do 15 lvl</p>
                            </div>
                    </a>
            </article>

    </section>
 
                    
     <div style="margin: 25px 87%">
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
    
{/block}