{extends file="main.tpl"}

{block name=footer}Copyright &copy 2022, gCode dev. All rights reserved.{/block}

{block name=content}
<div style="position:relative;display:flex;flex-direction:row;align-items:center;margin:0px auto 10px auto;width:17em;">
<div style="flex:1">
<a href="{$conf->action_url}logout" class="btn"">Log out</a>
</div>
<div style="flex:1">
<span><strong>User: </strong></span>{$user->login} <br>
<span><strong>Role: </strong></span>{$user->role}
</div>
</div>
<form action="{$conf->action_root}calcCompute" method="post">
    <h2>{$p_title}</h2>
    <label for="amount">How much do you need?</label>
    <input type="text" name="amount" placeholder="Amount" id="amount" required>
    <label for="range2">For how many months?</label>
    <input type="range" name="duration" min="2" max="36" value="20" id="range2">
    <label for="currency">In what currency?</label>
    <select name="currency" class="currency" id="currency">
        {foreach from=$currencyMap key=$k item=$v}
        {strip}
        <option value="{{$v->mid}}">{$v->currency}</option>;
        {/strip}
        {/foreach}
    </select>
    <input type="submit" value="Przelicz!" name="submitted">
</form>

   
    {if isset($result->result) }
    <div class="resultContainer">
    <h4>Your payment per month is: </h4>
    {strip}
    {$result->result} PLN
    {/strip}
    </div>
    {/if}

    
    {if $messages->isError()}
    <div class="errorContainer">
    <h4>Oops.. some errors occured: </h3>
    {foreach $messages->getErrors() as $err}
    {strip}
        {$err}<br>
    {/strip}
    {/foreach}
    </div>
    {/if}

    
    {if $messages->isInfo()}
    <div class="infoContainer">
    <h4>Additional information: </h4>
    {foreach $messages->getInfos() as $inf}
    {strip}
    {$inf}<br>
    {/strip}
    {/foreach}
    </div>
    {/if}
{/block}