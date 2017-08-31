@extends('layouts.theme.master')

@section('content')
    <h3 class="heading_b uk-margin-bottom">Tabs</h3>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-tab" data-uk-tab="{connect:'#tabs_1_content'}" id="tabs_1">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="named_tab"><a href="#">Item</a></li>
                        <li class="uk-disabled"><a href="#">Disabled</a></li>
                    </ul>
                    <ul id="tabs_1_content" class="uk-switcher uk-margin">
                        <li>Content 1</li>
                        <li>Content 2</li>
                        <li>Content 3</li>
                        <li>Content 4</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <h4 class="heading_a uk-margin-bottom">Horizontal modifiers</h4>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <ul id="tabs_3" class="uk-switcher uk-margin">
                        <li>Content 1</li>
                        <li>Content 2</li>
                        <li>Content 3</li>
                        <li>Content 4</li>
                    </ul>
                    <ul class="uk-tab uk-tab-bottom" data-uk-tab="{connect:'#tabs_3'}">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-disabled"><a href="#">Disabled</a></li>
                    </ul>
                </div>
                <div class="uk-width-medium-1-2">
                    <ul class="uk-tab uk-tab-flip" data-uk-tab="{connect:'#tabs_2'}">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-disabled"><a href="#">Disabled</a></li>
                    </ul>
                    <ul id="tabs_2" class="uk-switcher uk-margin">
                        <li>Content 1</li>
                        <li>Content 2</li>
                        <li>Content 3</li>
                        <li>Content 4</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-grid uk-margin-medium-bottom" data-uk-grid-margin>
        <div class="uk-width-medium-1-2">
            <h4 class="heading_a uk-margin-bottom">Justify tabs</h4>
            <div class="md-card">
                <div class="md-card-content">
                    <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#tabs_4'}">
                        <li class="uk-width-1-3 uk-active"><a href="#">Active</a></li>
                        <li class="uk-width-1-3"><a href="#">Item</a></li>
                        <li class="uk-width-1-3"><a href="#">Item</a></li>
                    </ul>
                    <ul id="tabs_4" class="uk-switcher uk-margin">
                        <li>Content 1</li>
                        <li>Content 2</li>
                        <li>Content 3</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="uk-width-medium-1-2">
            <h4 class="heading_a uk-margin-bottom">Center tabs</h4>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-tab-center">
                        <ul class="uk-tab" data-uk-tab="{connect:'#tabs_5'}">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                    <ul id="tabs_5" class="uk-switcher uk-margin">
                        <li>Content 1</li>
                        <li>Content 2</li>
                        <li>Content 3</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <h4 class="heading_a uk-margin-bottom">Vertical modifiers</h4>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                <div class="uk-width-large-1-2">
                    <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                        <div class="uk-width-1-3">
                            <ul class="uk-tab uk-tab-left" data-uk-tab="{connect:'#tabs_6'}">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                        <div class="uk-width-2-3">
                            <ul id="tabs_6" class="uk-switcher uk-margin-small-top">
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at, dignissimos esse eveniet id itaque laudantium modi nisi perferendis placeat provident quia recusandae reprehenderit sed sit soluta voluptas! Architecto, laboriosam?</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, autem, blanditiis consequatur cumque dicta distinctio ea esse eum exercitationem explicabo id incidunt molestiae numquam quae rem repellat reprehenderit tempore voluptatem!</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam architecto, atque aut autem dicta dolorem enim fugit impedit maxime nam, nesciunt provident quibusdam rerum sed similique voluptate voluptatibus. Laudantium.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-1-2">
                    <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                        <div class="uk-width-2-3">
                            <ul id="tabs_7" class="uk-switcher uk-margin-small-top">
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at, dignissimos esse eveniet id itaque laudantium modi nisi perferendis placeat provident quia recusandae reprehenderit sed sit soluta voluptas! Architecto, laboriosam?</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, autem, blanditiis consequatur cumque dicta distinctio ea esse eum exercitationem explicabo id incidunt molestiae numquam quae rem repellat reprehenderit tempore voluptatem!</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam architecto, atque aut autem dicta dolorem enim fugit impedit maxime nam, nesciunt provident quibusdam rerum sed similique voluptate voluptatibus. Laudantium.</li>
                            </ul>
                        </div>
                        <div class="uk-width-1-3">
                            <ul class="uk-tab uk-tab-right" data-uk-tab="{connect:'#tabs_7'}">
                                <li><a href="#">Item</a></li>
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4 class="heading_a uk-margin-bottom">Animations</h4>
    <div class="uk-grid" >
        <div class="uk-width-medium-1-3">
            <div class="md-card" data-uk-grid-margin>
                <div class="md-card-content">
                    <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim1', animation:'scale'}">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                    <ul id="tabs_anim1" class="uk-switcher uk-margin">
                        <li>Vero sapiente iusto et voluptas quasi inventore sit maxime dolor repellat omnis quibusdam quia reprehenderit voluptatibus id occaecati est perspiciatis minima pariatur nemo quo qui ducimus soluta quos labore.</li>
                        <li>Laborum voluptas qui et at eligendi voluptas in assumenda voluptas repudiandae quisquam architecto dolore veniam quibusdam est aspernatur possimus perspiciatis molestias numquam quia non eum et at enim rem est hic recusandae accusantium aut enim molestiae distinctio et laudantium beatae et quae commodi omnis.</li>
                        <li>Qui maiores aliquam assumenda at dolorem debitis iusto quisquam unde est repellat repellendus eos ipsam eos vel incidunt fuga quasi consequatur blanditiis odio nihil odio ex unde voluptate laudantium distinctio error.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="uk-width-medium-1-3">
            <div class="md-card" data-uk-grid-margin>
                <div class="md-card-content">
                    <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim2', animation:'slide-horizontal'}">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                    <ul id="tabs_anim2" class="uk-switcher uk-margin">
                        <li>Pariatur est sit et aut alias recusandae totam ea ad aut nisi totam aut iusto voluptatem corrupti.</li>
                        <li>Nam nihil ipsam doloribus reiciendis autem velit voluptatem voluptatem esse aut soluta molestias quia sequi aut doloribus iure sit excepturi aperiam labore quod rerum tenetur aspernatur nostrum nam eligendi voluptatum ut aperiam fuga asperiores qui voluptates sunt fuga adipisci est commodi repellendus sunt inventore laborum quasi iure maxime ea ut.</li>
                        <li>Enim voluptatem consectetur a accusamus dolorem magnam illum ut ipsa perspiciatis adipisci id ex est quibusdam quis vel aperiam cumque dolorem sit numquam ipsam similique temporibus vel est amet eaque deserunt consequuntur qui beatae.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="uk-width-medium-1-3">
            <div class="md-card" data-uk-grid-margin>
                <div class="md-card-content">
                    <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim3', animation:'slide-vertical'}">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                    <ul id="tabs_anim3" class="uk-switcher uk-margin">
                        <li>In voluptatem officia fuga beatae voluptatem doloremque recusandae asperiores voluptates modi facilis eos officia odio qui reprehenderit et nulla accusamus autem quod minus amet iste voluptatibus corporis aperiam voluptatem odit ut tenetur autem.</li>
                        <li>Qui veniam debitis qui mollitia aut facilis saepe dolorem labore illum qui nihil harum enim sit iure et qui error rem vel non est aut iusto sint.</li>
                        <li>Error dolor ipsam est velit sint aliquid similique distinctio voluptates facilis perferendis dolor distinctio magnam aut rem laborum ut harum molestias vel inventore ex possimus eos eum vel sunt ut sapiente sit est pariatur sed voluptas deserunt.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-grid" >
        <div class="uk-width-medium-1-3">
            <div class="md-card" data-uk-grid-margin>
                <div class="md-card-content">
                    <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim4', animation:'slide-left'}">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                    <ul id="tabs_anim4" class="uk-switcher uk-margin">
                        <li>Et illo perspiciatis consequatur fugiat ea eum dicta molestias placeat sint omnis odio hic ut aut et sit placeat iste autem est non praesentium magni rerum.</li>
                        <li>Quam cupiditate eos deserunt deserunt vel libero deserunt est adipisci sequi corporis consequuntur cupiditate in eum aliquam cupiditate fugit qui nam iste corrupti provident quia ut reiciendis unde sint sit rerum aut enim tempore deleniti et velit nam porro expedita nostrum cumque molestiae voluptatem quos voluptatum repellendus libero ipsam et modi qui.</li>
                        <li>Tenetur dolorem dicta blanditiis quibusdam voluptatibus ratione aut qui libero non omnis laboriosam quis exercitationem rerum vel optio iure aliquid.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="uk-width-medium-1-3">
            <div class="md-card" data-uk-grid-margin>
                <div class="md-card-content">
                    <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim5', animation:'slide-right'}">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                    <ul id="tabs_anim5" class="uk-switcher uk-margin">
                        <li>Porro laudantium soluta ut distinctio quia commodi debitis tenetur facilis id laboriosam doloribus voluptatem omnis suscipit est accusamus enim commodi illum eligendi odio labore ipsa eos.</li>
                        <li>Itaque eveniet corrupti et beatae quibusdam voluptatibus in culpa animi aliquam aliquam quo repudiandae enim porro eos aperiam saepe hic architecto sed et ut possimus ut molestias ullam aliquid quasi minima sequi voluptas ex non quo.</li>
                        <li>Vitae neque nihil beatae rerum sint aspernatur officiis officia qui quae ducimus nam aliquid omnis quia dolores earum quasi voluptatem ut ad nesciunt neque repellendus ea ex inventore vero sunt laborum sed sit unde reprehenderit eius quis praesentium sapiente.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="uk-width-medium-1-3">
            <div class="md-card" data-uk-grid-margin>
                <div class="md-card-content">
                    <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim6', animation:'slide-bottom'}">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                    <ul id="tabs_anim6" class="uk-switcher uk-margin">
                        <li>Dignissimos accusamus fuga aliquid nesciunt tenetur quos fuga dolore eum et placeat illum explicabo et magnam.</li>
                        <li>Rerum aut maiores vel debitis aut maxime aliquid totam amet et eos alias eum consequatur quis doloribus amet similique laudantium in ut dolores officiis nesciunt eum temporibus nobis dolor tenetur quaerat eaque non qui explicabo cupiditate minus dolorem voluptatem labore voluptatibus maxime dolores omnis dolorem ea accusamus eaque aspernatur.</li>
                        <li>Eos qui aperiam vel sunt molestiae sit molestias reiciendis labore cupiditate rerum fuga perferendis suscipit qui porro temporibus praesentium iure officiis voluptatibus minima voluptates nemo quae dolorem quod adipisci fuga et quas nesciunt rerum.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection