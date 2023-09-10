{extends file='../pages/head.tpl'}
{block name='styles'}

{/block}
{block name='body'}
    {block name="container"}
        <div class="header-fq">
            <div class="header-fq-content">
                <div class="text-fq">
                    <h3>¿Tienes una duda?</h3>
                    <h1>Nosotros te ayudamos</h1>
                    <p>Queremos hacértelo más fácil, encuentra las respuestas que necesitas.</p>
                </div>
                <div class="figure">
                    <img src="{$RESOURCES}img/landing/frequent-img.png">
                </div>
            </div>
        </div>

        <section class="frequent-questions">        
            {foreach from=$questions item=item}
                {$item} 
            {/foreach}
        </section>
    {/block}
{/block}

{block name="modals"}

{/block}

{block name='scripts'}

{/block}