{extends file="main.tpl"}

{block name=content}
<form action="{$conf->action_url}login" method="post">
<h2>{$p_title}</h2>
<input type="text" placeholder="Login" name="login">
<input type="password" placeholder="Password" name="password">
<input type="submit" value="Log in!">

</form>

{include file="messages.tpl"}

{/block}