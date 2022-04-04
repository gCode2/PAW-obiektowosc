<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$p_desc|default:"Default description"}">


    <link rel="stylesheet" type="text/css" href="{$conf->app_url}/css/index.css">

    <title>{$p_title|default:"Default title!"}</title>
</head>
<body>
    <div class="formContainer">
    {block name=content}No content loaded{/block}
    </div>
    
    <div class="footer">
        {block name=footer} No footer loaded! {/block}
    </div>
    <script src="{$conf->app_url}/js/main.js"></script>
</body>

</html>