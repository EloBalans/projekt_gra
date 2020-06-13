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
        
  


    <table>
            <tbody>
                    <tr>
                            <td>Nick - {$player["nick"]}</td>
                    </tr>
                    <tr>
                            <td>Poziom - {$player["lvl"]}</td>
                    </tr>
                    <tr>
                            <td>Doświadczenie - {$player["exp"]}</td>
                    </tr>
                    <tr>
                            <td>Złoto - {$player["gold"]}</td>
                    </tr>
                    <tr>
                            <td>Punkty życia - {$player["hp"]}</td>
                    </tr>
                    <tr>
                            <td>Punkty ataku - {$player["attack"]}</td>
                    </tr>

            </tbody>
    </table>


   
      
            
    
        
       

    </header>
    
    <section class="tiles">
            <article class="style10">
                    <span class="image">
                            <img src="images/forest.png" alt="" />
                    </span>
                    <a href="{$conf->action_root}location">
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
                    <a href="{$conf->action_root}location">
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
                    <a href="{$conf->action_root}location">
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