{extends file="main.tpl"}
{block name=content}
    <div style="margin: 25px 87%">
        
        <a href="{$conf->action_root}logout" class="button primary">Wyloguj</a>
    
        
    </div>
        <div style="margin: 25px 87%">
       <a href="{$conf->action_root}ranking" class="button primary">Ranking</a>
       </div>   
    
    <header>
        <ul class="actions fit">
										
									</ul>
      
            <div class="table-wrapper">
               
                <table>
                        
                        <tbody>
                                <tr>
                                        <td>Punkty życia</td>
                                        

                                </tr>
                                <tr>
                                        <td>Item Two</td>
                                       
                                </tr>
                                <tr>
                                        <td>Item Three</td>
                                      
                                </tr>
                               
                        </tbody>
                </table>

                
                
            </div>
    
         </ul>
       

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

    
{/block}