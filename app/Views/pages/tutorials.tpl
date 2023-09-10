{extends file='../pages/head.tpl'}
{block name='styles'}

{/block}
{block name='body'}
    {block name="container"}
        <div class="overlay none"></div>

        <section class="header-tutorials">
            <div class="header-t-content">
                <div>
                    <h1>¿No sabes como?</h1>
                    <h2>Nosotros te enseñamos</h2>
                </div>
                <div class="ctn-search d-flex align-items-center">
                    <input type="text" id="search_tutorial" class="inp-search" placeholder="Buscar en Tutoriales...">
                    <div class="ctn-icon-s">
                        <span class="icon-search material-symbols-outlined">
                            search
                        </span>
                    </div>
                    <div id="recent_search" class="recent-search none">
                        <div id="user_searchs"></div>
                        <div id="suggest"></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="ctn-tutorials">
            <div
                class="container-fluid d-flex pagination justify-content-between align-items-center align-items-center pl-25 mt-4 mb-4 p-0">
                <div id="search_result" class="container-fluid p-0 col-5">
                    <h6>Últimos tutoriales subidos</h6>
                </div>
                <div class="pag_tutorials container-fluid d-flex pagination justify-content-end align-items-center align-items-center pl-25 mt-4 mb-4 p-0 col-7">
                    <div id="main_cont">
                        <p class="m-0 me-4">Mostrando <span class="nums"></span> de <span class="num"></span> elementos</p>
                    </div>
                    <div id="pag_main" class="card_pagination d-flex pagination-tutorials">

                    </div>
                    <div class="ms-3 type-view">
                        <span class="material-icons-outlined me-3" id="grid_view"  data-toggle="tooltip" data-placement="right" title="Vista en cuadrícula">
                            grid_view
                        </span>
                        <span class="material-icons-outlined" id="list_view"  data-toggle="tooltip" data-placement="right" title="Vista en lista">
                            view_list
                        </span>
                    </div>
                </div>
            </div>

            <section class="tutorials-videos grid-view" id="tutorial_videos">
            
            </section>

            <div class="container-fluid d-flex pagination justify-content-end align-items-center align-items-center pl-25 p-0">
                <div>
                    <p class="m-0 me-4">Mostrando <span class="nums"></span> de <span class="num"></span> elementos</p>
                </div>
                <div id="pag_sec" class="d-flex card_pagination_2 pagination-tutorials">

                </div>
            </div>
        </div>


    {/block}
{/block}

{block name="modals"}

{/block}

{block name='scripts'}
    <script type="text/javascript">
        var  path_tutorials                                                     =   '{$path_tutorials}';
    </script>
{/block}