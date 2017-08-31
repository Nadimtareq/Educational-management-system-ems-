@extends('layouts.theme.master')

@section('content')

    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Modals</h3>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-3">
                    <p class="uk-text-large">Default</p>
                    <button class="md-btn" data-uk-modal="{target:'#modal_default'}">Open</button>
                    <div class="uk-modal" id="modal_default">
                        <div class="uk-modal-dialog">
                            <button type="button" class="uk-modal-close uk-close"></button>
                            <p>Est cumque qui dolorem voluptas aut est iure autem ullam veritatis sit quia eum impedit non voluptas sit aperiam libero et accusamus odit aperiam labore ad qui accusantium labore eum eius rerum numquam vitae blanditiis quos labore perferendis unde incidunt assumenda commodi non et facilis dignissimos minima in autem nulla totam quidem est tenetur voluptates fugit ratione facilis velit culpa nulla aspernatur officia aliquid et recusandae id non aliquid quo rerum cupiditate cum eaque libero aut rerum voluptatem commodi aut aut eius.</p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <p class="uk-text-large">Header/Footer</p>
                    <button class="md-btn" data-uk-modal="{target:'#modal_header_footer'}">Open</button>
                    <div class="uk-modal" id="modal_header_footer">
                        <div class="uk-modal-dialog">
                            <div class="uk-modal-header">
                                <h3 class="uk-modal-title">Headline <i class="material-icons" data-uk-tooltip="{pos:'top'}" title="headline tooltip">&#xE8FD;</i></h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aliquid amet animi aspernatur aut blanditiis doloribus eligendi est fugiat iure iusto laborum modi mollitia nemo pariatur, rem tempore. Dolor, excepturi.</p>
                            <div class="uk-modal-footer uk-text-right">
                                <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button><button data-uk-modal="{target:'#modal_new'}" type="button" class="md-btn md-btn-flat md-btn-flat-primary">Open New Modal</button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-modal" id="modal_new">
                        <div class="uk-modal-dialog">
                            <button type="button" class="uk-modal-close uk-close"></button>
                            <p class="uk-text-bold">New modal triggered from other modal.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aliquid amet animi aspernatur aut blanditiis doloribus eligendi est fugiat iure iusto laborum modi mollitia nemo pariatur, rem tempore. Dolor, excepturi.</p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <p class="uk-text-large">Lightbox</p>
                    <button class="md-btn" data-uk-modal="{target:'#modal_lightbox'}">Open</button>
                    <div class="uk-modal" id="modal_lightbox">
                        <div class="uk-modal-dialog uk-modal-dialog-lightbox">
                            <button type="button" class="uk-modal-close uk-close uk-close-alt"></button>
                            <img src="assets/img/gallery/Image01.jpg" alt=""/>
                            <div class="uk-modal-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi autem consequuntur deleniti dolor ea expedita facere ipsum labore, libero magni, minus quas quibusdam quod quos saepe sequi veritatis vitae!</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-3">
                    <p class="uk-text-large">Large dialog modifier</p>
                    <button class="md-btn" data-uk-modal="{target:'#modal_large'}">Open</button>
                    <div class="uk-modal" id="modal_large">
                        <div class="uk-modal-dialog uk-modal-dialog-large">
                            <button type="button" class="uk-modal-close uk-close"></button>
                            <p>Quia eos eum eos itaque velit voluptatem quo beatae est sint officiis pariatur et accusantium odio maxime praesentium et rerum doloremque expedita autem ut velit nulla dignissimos quos optio nisi sequi necessitatibus quibusdam nihil voluptas iste sed ipsa quam excepturi pariatur voluptatem voluptatem et perspiciatis et non et rerum doloribus velit praesentium molestias dolorem debitis quo error hic porro sunt tempore et sit ut et rerum illo officia.</p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <p class="uk-text-large">Overflow container in modal</p>
                    <button class="md-btn" data-uk-modal="{target:'#modal_overflow'}">Open</button>
                    <div id="modal_overflow" class="uk-modal">
                        <div class="uk-modal-dialog">
                            <button type="button" class="uk-modal-close uk-close"></button>
                            <h2 class="heading_a">Some text above the scrollable box</h2>
                            <p>Fuga architecto velit magni et unde odit deserunt et voluptatem ut dolorem at recusandae ratione eius debitis autem labore voluptas esse delectus tempore id ut sequi placeat eos et dolorem in.</p>
                            <div class="uk-overflow-container">
                                <h2 class="heading_b">Overflow container</h2>
                                <img src="assets/img/gallery/Image06.jpg" alt=""/>
                                <p>Doloremque magnam beatae et sed explicabo deleniti quisquam facilis magni odio officia qui non tempore neque corporis omnis voluptatem dicta error neque vitae est voluptas accusamus mollitia veniam incidunt rerum et libero laudantium odio est provident in quo delectus voluptas blanditiis ut laboriosam quos sunt eum quis aut est voluptatem ut odio est totam illo optio modi voluptas possimus ex sit quia sed quas dolores repellat iste animi dolorem incidunt nulla in debitis sunt est aut iure voluptate recusandae rerum aut et et totam adipisci cumque pariatur consectetur quis accusamus molestiae saepe sit sit nostrum omnis voluptas minima quia vel molestiae sunt facilis fugit et beatae illo sunt quia beatae earum sunt laborum aut recusandae numquam ut quae ab laboriosam nam nesciunt nulla veritatis quidem ut possimus ut totam ut pariatur et dolorem nostrum neque nulla ipsa libero nihil et et non dolorum cupiditate id beatae voluptatem recusandae modi eius quibusdam quo voluptatem sit optio iusto alias officia temporibus sit dolor tempore recusandae ut eaque magni iste consequatur sequi iste cum nemo in ut nihil officiis rerum eos vero ut est illum optio et laborum quos illum provident voluptatem et provident inventore quod dolorum eaque maxime quia mollitia ut est voluptatem facere est ducimus asperiores explicabo consectetur beatae et adipisci eum quo blanditiis sunt est et nam quos temporibus suscipit distinctio omnis temporibus dicta modi est qui ad illo voluptas magnam porro consequuntur voluptate culpa quibusdam impedit illum voluptatum quo animi inventore dolor itaque quisquam ipsum sint assumenda architecto voluptatem at voluptas numquam quis vitae consequatur molestias nulla cum ducimus aliquam consectetur eos vitae voluptatem veniam ex magni aut sit consequatur in facere similique quasi odio nobis porro quaerat expedita veritatis est sed officiis quam dolor quia aspernatur repudiandae provident voluptatibus quia aut quia fugit nostrum debitis est quas doloribus perspiciatis quasi possimus veniam illo pariatur voluptas rem eos qui ea quia labore quo qui blanditiis tempora ipsum aut eaque et voluptates et cumque in beatae optio culpa temporibus modi magnam et velit vitae nemo fuga inventore totam unde nobis sint sint enim totam et quam voluptatibus commodi modi quis veritatis voluptatum ut qui provident odio dolores molestias qui aut voluptatem ea laboriosam earum ullam voluptas tempora corrupti est sequi eos deleniti at sapiente provident reiciendis expedita voluptatibus quia unde inventore impedit cupiditate qui eum sunt sit aliquid soluta repudiandae quia iusto minima molestiae sit qui ipsam commodi facere et nisi inventore laborum et sed qui iusto quaerat nam sapiente ut laudantium ducimus eveniet nulla at et hic sequi doloribus doloremque sint harum quod temporibus beatae exercitationem quam saepe vel et quis dolore fugit possimus natus illum quam recusandae in eos error est in possimus qui ullam non quia in quia sequi quia ipsa fuga temporibus nihil asperiores omnis quia et tenetur magni minus facilis voluptatem illo nisi assumenda harum odit aliquam ducimus.</p>
                                <p>Accusamus voluptatum accusantium a voluptas beatae sit ut quia ut fugiat molestiae ut nam excepturi magnam dicta commodi omnis enim earum quo vel minima nihil voluptas odit quidem qui exercitationem dolore quis porro saepe pariatur incidunt qui occaecati nihil quis voluptas ut corporis quibusdam eos eum laborum earum nisi quia nihil in in quam nobis corporis facilis quo tempora occaecati ipsum natus adipisci voluptatem quasi mollitia eos quae enim deserunt debitis quibusdam voluptatem reprehenderit illo voluptatem eos veritatis molestias sed velit ipsum laudantium ut sequi temporibus exercitationem vel cumque omnis consequatur harum nobis dolore aut nam quaerat aut occaecati vel sapiente nobis aut cum minus et error nulla et et at quis sequi et et aliquid iste quod ut tempore quidem sed quos nemo fuga optio alias aut et non vel voluptate molestiae modi maxime dicta eum fugiat quasi rerum accusamus asperiores et consequatur dolorem et porro nisi molestias quibusdam qui aut autem nihil deserunt optio consequatur eaque qui qui consequatur impedit non dolorum voluptas vel qui ea expedita sapiente quaerat id voluptates dolores vel libero consequatur qui aut voluptates nesciunt occaecati excepturi ut nihil voluptates et expedita tenetur doloremque et dignissimos accusantium reiciendis ipsam ex quia non quis repellat magni doloribus incidunt corporis dolor non consequatur consequatur in nihil vel ea aut quos exercitationem omnis temporibus aspernatur nostrum tenetur voluptatem quae earum voluptas saepe asperiores sint molestias sit consequatur sunt aut non natus repellat dolor eius rem alias consectetur eius enim dolor eos ipsa molestiae quisquam inventore non voluptatem eos error facilis impedit ipsam vero voluptatibus corrupti quasi sit eius doloribus deserunt quo et a fuga architecto voluptas nam ipsa nihil ut est earum aut ab tenetur ut dignissimos excepturi quis ipsam et et at neque ut magnam quisquam libero minus dolore fuga corporis ducimus iure cupiditate cupiditate vel est temporibus dolorem saepe voluptas ullam sed et et earum itaque sint quidem sapiente quis qui consequuntur asperiores ea dolor eaque nihil debitis et possimus delectus qui similique fugiat et itaque aut officiis optio blanditiis perspiciatis eveniet esse veritatis consequatur quas quia ducimus sed ut qui natus iure architecto deserunt placeat vero recusandae ullam et et et deserunt cum quos perspiciatis voluptatibus est eum ab facilis fugiat non quis occaecati autem alias dolorem dolorem autem et repellendus sapiente eos et assumenda esse odit quia eum consequatur quos et facilis voluptas sequi occaecati dolorem enim soluta pariatur odio accusamus repellat consequuntur aliquam est qui dolore libero occaecati et consequatur non tempore officia perspiciatis inventore fugiat voluptas at illo.</p>
                                <p>Similique numquam necessitatibus libero provident ullam molestiae perferendis non sint doloremque eligendi commodi dolores iusto dolorum atque facere officiis eaque molestiae et et sit quod eveniet animi delectus nobis blanditiis deleniti dolor autem laudantium tempore est ut enim laudantium quae quia quo quam expedita corporis et consequatur dolores rerum molestiae atque et est a dolor itaque magni blanditiis nulla vel optio perspiciatis accusamus iure corrupti eaque at blanditiis quam quas minus voluptatem ut similique illum ut odio nobis nesciunt et odio aut molestiae voluptas sapiente est nesciunt eos optio nostrum repudiandae iure non qui aliquam minus consequatur omnis consequatur beatae exercitationem ut qui quia minus autem ut quia blanditiis perferendis aperiam tempora harum libero officiis voluptatem maiores velit ut sint voluptas qui ipsa ut quos quod hic quis molestiae rerum doloribus cum tempore maxime omnis voluptatem nihil maxime necessitatibus maiores rerum voluptate in velit vel exercitationem facere at dolorum pariatur aut optio nihil enim tempora eos fugiat sapiente iusto fuga eligendi explicabo pariatur soluta dolore rerum asperiores provident praesentium dolores qui voluptatem quidem culpa perferendis quis voluptate corporis asperiores repellendus est est commodi aut sit unde minus sed adipisci nesciunt debitis est dolores voluptas quas voluptatem qui unde non ut consequatur reiciendis est sint quas illo nostrum qui est qui at qui et tenetur voluptatum minima est dolorem blanditiis eligendi quod id dolorem quia eos dolor autem optio aut neque labore animi occaecati dolores porro fugiat temporibus aut id placeat dolorum optio velit laudantium recusandae maxime qui quia possimus quam hic necessitatibus velit voluptatem voluptatum in placeat laudantium doloremque non eos maiores sit consequatur ut consectetur ea recusandae illum iure ut accusantium neque iste nulla animi atque et accusantium beatae vel et suscipit enim sed omnis nihil quas sunt perspiciatis expedita ex deleniti et sit ad omnis sunt amet in et officia cupiditate neque ducimus illum alias tempora sit optio qui aut eaque rem et velit dolor ab ut ut voluptatem omnis eius exercitationem id ad ut delectus cupiditate quisquam harum et sed quis fugit qui neque itaque quas est quo doloremque quisquam animi at commodi sint voluptas nesciunt maiores voluptas modi perspiciatis quia harum consequatur earum laudantium asperiores esse delectus optio eum expedita vel voluptas veritatis ea vero assumenda sed dolores alias unde accusamus sint nam mollitia in architecto provident eum animi quo quo est autem consequuntur fugit provident corporis facere neque temporibus culpa illum perspiciatis quasi quod magni a dolorem vel eaque rerum et illum suscipit totam cum sit voluptates cumque quidem vel aliquid maxime ea in iusto fugit consequatur delectus voluptatum necessitatibus ut sit quaerat laboriosam voluptatum delectus ut sed voluptas quaerat a incidunt earum non deleniti ullam exercitationem dolorem quas culpa minus nihil fugit magnam deleniti atque deleniti sunt amet omnis quaerat quasi eum blanditiis quidem voluptate a hic et odit qui qui voluptas neque unde ad possimus nesciunt temporibus aut rerum libero nihil voluptatem voluptatem architecto qui ut sed aut nobis quae sapiente aut qui et illum aut soluta magni temporibus voluptas est pariatur nesciunt ex ut dolorum reiciendis dolorem aliquam consequatur mollitia et dolor quibusdam voluptatem aspernatur natus tenetur ut inventore aut vel exercitationem ratione consequatur modi non debitis eum reprehenderit aliquam neque temporibus cum magni debitis esse earum dolorum quam sit praesentium fugiat laboriosam maiores ut modi suscipit praesentium sit ex eveniet placeat hic quia mollitia exercitationem ab fugit earum rerum architecto explicabo dolor.</p>
                                <p>Perferendis ut nemo asperiores reprehenderit explicabo qui voluptas temporibus ea non quas voluptatem suscipit ut qui itaque voluptatibus nesciunt qui in omnis sint fugiat veniam at eveniet labore enim tenetur sapiente quae molestiae exercitationem id corrupti cum facilis consequatur molestiae dolores delectus nesciunt laudantium omnis consequuntur eum eum dolore excepturi natus ratione qui facere sunt rerum fugiat error rerum qui aspernatur cumque sed fuga cumque cupiditate placeat quod quasi architecto autem numquam molestiae magni et distinctio veniam inventore aut modi suscipit in ipsum voluptatem ipsam magni eum reiciendis voluptates quia nesciunt deserunt qui sit voluptatem magni esse ut est minus et corrupti commodi est omnis est dolorum facilis ipsum vitae sed dolores sint eligendi dolorem et vitae eos minus necessitatibus molestiae ab et dolores dicta amet tenetur voluptatem voluptatem quo sint id dolorum alias sunt doloremque et tempora voluptatum animi tempore et fuga voluptatem saepe aut libero alias repudiandae quisquam qui dolores qui eaque qui quidem sed qui sint corporis quia perferendis ut sit labore nostrum harum optio distinctio quis voluptatum delectus explicabo ut quas delectus numquam debitis assumenda excepturi qui distinctio consequatur asperiores quo voluptatum dolorum porro voluptas ut magnam ex vel aut dolore ipsa ut recusandae fugiat laboriosam quisquam assumenda voluptatem repudiandae libero sequi voluptatem quas ut nesciunt voluptatum eius incidunt ipsa quae vel quibusdam nulla repudiandae vel occaecati ipsa sint quia laboriosam exercitationem nesciunt alias fuga quod voluptas id quasi est omnis iure reiciendis id vel in sint.</p>
                            </div>
                            <h2 class="heading_a">Some text below the overflow container</h2>
                            <p>Rerum voluptate cupiditate quae enim in eveniet nostrum corporis sunt voluptates rerum modi tempore corrupti odit dolores quam in sunt omnis voluptas qui aliquid autem perferendis optio autem consequuntur non error facere cum omnis provident asperiores qui ullam suscipit.</p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <p class="uk-text-large">Full screen card</p>
                    <button class="md-btn" data-uk-modal="{target:'#modal_full'}">Open</button>
                    <div class="uk-modal uk-modal-card-fullscreen" id="modal_full">
                        <div class="uk-modal-dialog uk-modal-dialog-blank">
                            <div class="md-card uk-height-viewport">
                                <div class="md-card-toolbar">
                                    <div class="md-card-toolbar-actions">
                                        <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                            <i class="md-icon material-icons">&#xE5D4;</i>
                                            <div class="uk-dropdown">
                                                <ul class="uk-nav">
                                                    <li><a href="#">Action 1</a></li>
                                                    <li><a href="#">Action 2</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="md-icon material-icons uk-modal-close">&#xE5C4;</span>
                                    <h3 class="md-card-toolbar-heading-text">
                                        Card Heading
                                    </h3>
                                </div>
                                <div class="md-card-content">
                                    Est eveniet quis eum tempora vel nihil velit necessitatibus qui rerum placeat praesentium voluptas cum ut ut corporis et sunt qui aspernatur dignissimos nisi minus cupiditate commodi culpa error ab saepe qui odit modi molestiae quam distinctio et quis et rerum atque et consectetur doloribus reiciendis optio fuga quia nihil sed aut deleniti esse non dolore tempora libero temporibus sint repellat qui est eum sit in minima sed voluptatem harum magni beatae quis quae cumque sed hic dolores reiciendis ut quaerat quidem dolorem mollitia est exercitationem qui repellat veniam officiis consequatur sit facilis sed consectetur porro quibusdam inventore reiciendis repudiandae accusantium velit sed tempore repellendus dolor quod minus praesentium et aut aliquid exercitationem adipisci ullam vel dicta cum non voluptatem quo fugiat necessitatibus tenetur est totam commodi provident magni non ipsa eos dolor voluptas perspiciatis perferendis provident laboriosam officiis consequatur nesciunt iure nobis nulla est accusamus velit culpa suscipit eos sapiente excepturi sunt ea voluptas eveniet cupiditate et quam dolor qui sed temporibus placeat animi ea ullam voluptas repellendus consequatur enim reprehenderit ut quia magnam sint qui voluptas voluptate recusandae quia repellendus expedita quia dolor occaecati quasi deserunt consequatur temporibus natus et et tempore quas harum sit animi atque nisi rerum magni facilis cum dignissimos facere perspiciatis consequatur reiciendis suscipit cumque consequatur et doloribus pariatur perspiciatis sed at expedita ut voluptatem laudantium rerum voluptas omnis et voluptates aut qui amet sapiente quisquam doloribus quam porro illum et ut eveniet non fugit perferendis aut voluptate consequatur vitae facere dolorum deserunt assumenda perferendis numquam inventore cum quo voluptatem non pariatur asperiores eveniet atque ad commodi perferendis maxime impedit autem et tenetur sint dolorum enim aspernatur et velit dolores dolorem est occaecati ab voluptas labore quasi voluptatum ipsa aut cupiditate maxime deserunt aliquid sit repudiandae est ullam ut voluptatibus quia architecto consequuntur rem nam quaerat corrupti et velit nobis voluptates numquam illum iste quibusdam soluta distinctio quod ut fugiat aut in culpa officia atque neque et ipsa est consequatur nihil delectus fugiat id aut dolores id et ut autem velit ut nemo atque omnis quod voluptatibus commodi et consequatur nemo dolor nobis perspiciatis et nobis unde delectus adipisci voluptatibus sunt consequatur est cum consequatur iure cupiditate optio nesciunt maxime dignissimos rem dolorem est doloribus nihil quia vel natus qui voluptas autem autem sed quam optio autem cumque voluptatem eveniet voluptas numquam eligendi hic consequatur non quaerat laudantium velit magnam saepe ea et hic eum ipsum illo magni et consequuntur aperiam eligendi sed debitis accusantium dolorem facilis consectetur optio eos harum nobis quam et sit et perferendis qui voluptatem omnis ea pariatur porro et temporibus vel minima ut rerum neque deleniti enim impedit eius aliquam quo suscipit modi voluptate qui consectetur libero earum facilis asperiores reiciendis accusantium occaecati minima reprehenderit quas eius consequatur exercitationem et quis et culpa ullam odit atque voluptatem eaque voluptas illo ab dicta nobis quod ut tempore iusto sed omnis natus laboriosam vel earum praesentium numquam sequi voluptates quos eum tenetur ut magnam tenetur consequatur rerum architecto aut quod occaecati nihil consequatur consequatur et et in consequatur voluptatem qui id sed aut doloribus modi quia sed voluptatem quos et porro atque cumque et sit dolor commodi quae qui ut et a ut dolore voluptas ad aut dicta aspernatur possimus perferendis suscipit corporis voluptatum voluptatem perferendis eos maxime voluptatem quaerat quas sunt sunt reprehenderit nobis rem saepe sint nam omnis natus debitis qui et blanditiis enim odit qui fuga culpa magni sapiente praesentium non et sunt aliquam illo aliquid eius harum voluptatem deserunt libero ut sequi illo ducimus ex ex in consequatur voluptatem est voluptates sunt amet impedit et sint ut sit est qui quis rerum provident ut perspiciatis consequatur aliquam exercitationem consequatur voluptas et et placeat ullam at amet sequi officiis et veritatis in numquam voluptatem ducimus numquam consequatur ipsa necessitatibus dolor dolor placeat nihil ut quae maiores maiores ex quam iste odit rerum qui accusamus corrupti numquam alias quia commodi sit eligendi corporis temporibus laborum maxime iste in autem accusantium repellat aut beatae eligendi cum veritatis dolores ut culpa sunt dolorum non rerum distinctio quia.                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Dialogs</h3>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-4">
                    <button type="button" class="md-btn" onclick="UIkit.modal.alert('Attention!')">Alert</button>
                </div>
                <div class="uk-width-medium-1-4">
                    <button type="button" class="md-btn" onclick="UIkit.modal.confirm('Are you sure?', function(){ UIkit.modal.alert('Confirmed!'); });">Confirm</button>
                </div>
                <div class="uk-width-medium-1-4">
                    <button type="button" class="md-btn" onclick="UIkit.modal.prompt('Name:', '', function(val){ UIkit.modal.alert('Hello '+(val || 'Mr noname')+'!'); });">Prompt</button>
                </div>
                <div class="uk-width-medium-1-4">
                    <button type="button" class="md-btn" onclick="(function(modal){ modal = UIkit.modal.blockUI('<div class=\'uk-text-center\'>Wait 5 sec...<br/><img class=\'uk-margin-top\' src=\'assets/img/spinners/spinner.gif\' alt=\'\'>'); setTimeout(function(){ modal.hide() }, 5000) })();">Block UI</button>
                </div>
            </div>
        </div>
    </div>
@endsection