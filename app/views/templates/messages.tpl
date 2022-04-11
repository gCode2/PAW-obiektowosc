{if $messages->isError()}

<div class="errorContainer">
    {foreach $messages->getErrors() as $err}
    {strip}
    {$err}<br>
    {/strip}
    {/foreach}
</div>
{/if}

{if $messages->isInfo()}

<div class="infoContainer">
    {foreach $messages->getInfos() as $inf}
    {strip}
    {$inf}<br>
    {/strip}
    {/foreach}
</div>
{/if}

