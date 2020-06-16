{extends file="main.tpl"}


{block name=content}
<div style="margin: 25px 90%">
        <a href="{$conf->action_root}gameView" class="button primary">Back</a>
    </div>

    <div class="bottom-margin">

</div>	
    
   
    
<h3>Ranking</h3>
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

    
{/block}