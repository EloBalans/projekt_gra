{extends file="main.tpl"}


{block name=content}
    
    <div style="margin: 40px 60%">
    <form action="{$conf->action_url}register" method="post">
        <div class="top-margin">
            <label>Adres email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="top-margin">
            <label>Login <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="login">
        </div>
        <div class="top-margin">
            <label>Hasło <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="top-margin">
            <label>Powtórz hasło <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="password_repeat">
        </div>

       
        <div class="row">
            <div class="col-lg-4">
                <b><a href="{$conf->action_root}login">Masz konto? Zaloguj się.</a></b>
            </div>
            <div class="col-lg-8 text-right">
                <button class="btn btn-action" type="submit">Utwórz konto</button>
            </div>
        </div>
    </form>
</div>
    
        
{/block}