{extends file="main.tpl"}


{block name=content}
    
  
   <div style="margin: 80px 40%">         
        <form method="post" action="{$conf->action_root}register"  class="pure-form pure-form-aligned bottom-margin">
            
            <fieldset>
                            <label>Adres email </label>
                            <input type="text" id="email" name="email"  />
                            
                            <label>Nick </label>
                            <input type="text" id="nick" name="nick"  />
                            
                            <label>Login </label>
                            <input type="text" id="login" name="login" />
                            
                            <label>Hasło </label>
                            <input type="password" id="password"  name="password"  />
                          
            </fieldset>
            <div style="margin: 20px 17%">
            <input type="submit" value="register" class="pure-button pure-button-primary"/>
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
   

<div style="margin: 10px 41%">
     
     <h2>Masz konto?</h2>
 </div>
        
 <div style="margin: 5px 41%">
     
        <a href="{$conf->action_root}loginview" class="button primary">Zaloguj się!</a>
 </div>
        
{/block}