@extends('layouts.theme.master')

@section('content')
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <div class="uk-overflow-container">
                <table class="uk-table uk-table-nowrap table_check">
                    <thead>
                    <tr>
                        <th class="uk-width-1-10 uk-text-center small_col"><input type="checkbox" data-md-icheck class="check_all"></th>
                        <th class="uk-width-1-10 uk-text-center">User Image</th>
                        <th class="uk-width-2-10">User Name</th>
                        <th class="uk-width-2-10 uk-text-center">Order Number</th>
                        <th class="uk-width-1-10 uk-text-center">Order Date</th>
                        <th class="uk-width-1-10 uk-text-center">Status</th>
                        <th class="uk-width-2-10 uk-text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                        <td class="uk-text-center"><img class="md-user-image" src="assets/img/avatars/avatar_01_tn.png" alt=""/></td>
                        <td>Martina Mayer</td>
                        <td class="uk-text-center">52/2015</td>
                        <td class="uk-text-center">03-10-1971</td>
                        <td class="uk-text-center"><span class="uk-badge">Accepted</span></td>
                        <td class="uk-text-center">
                            <a href="#"><i class="md-icon material-icons">&#xE254;</i></a>
                            <a href="#"><i class="md-icon material-icons">&#xE88F;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                        <td class="uk-text-center"><img class="md-user-image" src="assets/img/avatars/avatar_02_tn.png" alt=""/></td>
                        <td>Sidney Romaguera</td>
                        <td class="uk-text-center">87/2015</td>
                        <td class="uk-text-center">06-10-2007</td>
                        <td class="uk-text-center"><span class="uk-badge">Accepted</span></td>
                        <td class="uk-text-center">
                            <a href="#"><i class="md-icon material-icons">&#xE254;</i></a>
                            <a href="#"><i class="md-icon material-icons">&#xE88F;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                        <td class="uk-text-center"><img class="md-user-image" src="assets/img/avatars/avatar_03_tn.png" alt=""/></td>
                        <td>Arlene Mraz</td>
                        <td class="uk-text-center">60/2015</td>
                        <td class="uk-text-center">07-10-2003</td>
                        <td class="uk-text-center"><span class="uk-badge uk-badge-danger">Declined</span></td>
                        <td class="uk-text-center">
                            <a href="#"><i class="md-icon material-icons">&#xE254;</i></a>
                            <a href="#"><i class="md-icon material-icons">&#xE88F;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                        <td class="uk-text-center"><img class="md-user-image" src="assets/img/avatars/avatar_04_tn.png" alt=""/></td>
                        <td>Cody Powlowski</td>
                        <td class="uk-text-center">56/2015</td>
                        <td class="uk-text-center">17-12-1999</td>
                        <td class="uk-text-center"><span class="uk-badge uk-badge-danger">Declined</span></td>
                        <td class="uk-text-center">
                            <a href="#"><i class="md-icon material-icons">&#xE254;</i></a>
                            <a href="#"><i class="md-icon material-icons">&#xE88F;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                        <td class="uk-text-center"><img class="md-user-image" src="assets/img/avatars/avatar_05_tn.png" alt=""/></td>
                        <td>Hattie Mayer</td>
                        <td class="uk-text-center">3/2015</td>
                        <td class="uk-text-center">27-01-1985</td>
                        <td class="uk-text-center"><span class="uk-badge uk-badge-primary">New</span></td>
                        <td class="uk-text-center">
                            <a href="#"><i class="md-icon material-icons">&#xE254;</i></a>
                            <a href="#"><i class="md-icon material-icons">&#xE88F;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                        <td class="uk-text-center"><img class="md-user-image" src="assets/img/avatars/avatar_06_tn.png" alt=""/></td>
                        <td>Vito Huel</td>
                        <td class="uk-text-center">55/2015</td>
                        <td class="uk-text-center">06-01-1993</td>
                        <td class="uk-text-center"><span class="uk-badge uk-badge-success">Shipped</span></td>
                        <td class="uk-text-center">
                            <a href="#"><i class="md-icon material-icons">&#xE254;</i></a>
                            <a href="#"><i class="md-icon material-icons">&#xE88F;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                        <td class="uk-text-center"><img class="md-user-image" src="assets/img/avatars/avatar_07_tn.png" alt=""/></td>
                        <td>Wilma Walter</td>
                        <td class="uk-text-center">44/2015</td>
                        <td class="uk-text-center">17-03-2011</td>
                        <td class="uk-text-center"><span class="uk-badge uk-badge-primary">New</span></td>
                        <td class="uk-text-center">
                            <a href="#"><i class="md-icon material-icons">&#xE254;</i></a>
                            <a href="#"><i class="md-icon material-icons">&#xE88F;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                        <td class="uk-text-center"><img class="md-user-image" src="assets/img/avatars/avatar_08_tn.png" alt=""/></td>
                        <td>Zakary Mayer</td>
                        <td class="uk-text-center">29/2015</td>
                        <td class="uk-text-center">14-07-2014</td>
                        <td class="uk-text-center"><span class="uk-badge uk-badge-primary">New</span></td>
                        <td class="uk-text-center">
                            <a href="#"><i class="md-icon material-icons">&#xE254;</i></a>
                            <a href="#"><i class="md-icon material-icons">&#xE88F;</i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <ul class="uk-pagination uk-margin-medium-top">
                <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                <li class="uk-active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><span>&hellip;</span></li>
                <li><a href="#">10</a></li>
                <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin="">
        <div class="uk-width-medium-1-2">
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-table-hover uk-table-nowrap table_check">
                            <thead>
                            <tr>
                                <th class="uk-width-1-10 uk-text-center small_col"><input type="checkbox" data-md-icheck class="check_all"></th>
                                <th class="uk-width-1-10 uk-text-center uk-text-upper">Clients</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                                <td>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-2-5 uk-width-small-1-5 uk-text-center">
                                            <img class="md-user-image-large" src="assets/img/avatars/avatar_01.png" alt=""/>
                                        </div>
                                        <div class="uk-width-3-5 uk-width-small-4-5">
                                            <h4 class="heading_a uk-margin-small-bottom">Kendra Kerluke</h4>
                                            <p class="uk-margin-remove"><span class="uk-text-muted">Phone:</span> (592)280-9513x395</p>
                                            <p class="uk-margin-remove"><span class="uk-text-muted">Email:</span> pbarton@sipesfriesen.com</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                                <td>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-2-5 uk-width-small-1-5 uk-text-center">
                                            <img class="md-user-image-large" src="assets/img/avatars/avatar_02.png" alt=""/>
                                        </div>
                                        <div class="uk-width-3-5 uk-width-small-4-5">
                                            <h4 class="heading_a uk-margin-small-bottom">Berniece Huels</h4>
                                            <p class="uk-margin-remove"><span class="uk-text-muted">Phone:</span> (186)495-1217x8798</p>
                                            <p class="uk-margin-remove"><span class="uk-text-muted">Email:</span> dooley.lorna@yahoo.com</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                                <td>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-2-5 uk-width-small-1-5 uk-text-center">
                                            <img class="md-user-image-large" src="assets/img/avatars/avatar_03.png" alt=""/>
                                        </div>
                                        <div class="uk-width-3-5 uk-width-small-4-5">
                                            <h4 class="heading_a uk-margin-small-bottom">Americo Reichert</h4>
                                            <p class="uk-margin-remove"><span class="uk-text-muted">Phone:</span> 1-868-059-3142x34532</p>
                                            <p class="uk-margin-remove"><span class="uk-text-muted">Email:</span> dave29@hotmail.com</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                                <td>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-2-5 uk-width-small-1-5 uk-text-center">
                                            <img class="md-user-image-large" src="assets/img/avatars/avatar_04.png" alt=""/>
                                        </div>
                                        <div class="uk-width-3-5 uk-width-small-4-5">
                                            <h4 class="heading_a uk-margin-small-bottom">Merritt Fadel</h4>
                                            <p class="uk-margin-remove"><span class="uk-text-muted">Phone:</span> 709-990-2078</p>
                                            <p class="uk-margin-remove"><span class="uk-text-muted">Email:</span> kgreenfelder@schmidt.com</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                                <td>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-2-5 uk-width-small-1-5 uk-text-center">
                                            <img class="md-user-image-large" src="assets/img/avatars/avatar_05.png" alt=""/>
                                        </div>
                                        <div class="uk-width-3-5 uk-width-small-4-5">
                                            <h4 class="heading_a uk-margin-small-bottom">Romaine Crooks</h4>
                                            <p class="uk-margin-remove"><span class="uk-text-muted">Phone:</span> (582)531-4658x42449</p>
                                            <p class="uk-margin-remove"><span class="uk-text-muted">Email:</span> favian.waters@tillman.com</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                                <td>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-2-5 uk-width-small-1-5 uk-text-center">
                                            <img class="md-user-image-large" src="assets/img/avatars/avatar_06.png" alt=""/>
                                        </div>
                                        <div class="uk-width-3-5 uk-width-small-4-5">
                                            <h4 class="heading_a uk-margin-small-bottom">Elliott Rowe</h4>
                                            <p class="uk-margin-remove"><span class="uk-text-muted">Phone:</span> (669)587-5811</p>
                                            <p class="uk-margin-remove"><span class="uk-text-muted">Email:</span> katrina04@yahoo.com</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="uk-pagination uk-margin-medium-top">
                        <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                        <li><span>&hellip;</span></li>
                        <li><a href="#">4</a></li>
                        <li class="uk-active"><span>5</span></li>
                        <li><a href="#">6</a></li>
                        <li><span>&hellip;</span></li>
                        <li><a href="#">20</a></li>
                        <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="uk-width-medium-1-2">
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-table-hover uk-table-nowrap uk-table-align-vertical">
                            <thead>
                            <tr>
                                <th class="uk-width-1-10"></th>
                                <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-US"></i> USD</th>
                                <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-EU"></i> EUR</th>
                                <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-JP"></i> JPY</th>
                                <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-GB"></i> GBP</th>
                                <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-CH"></i> CHF</th>
                                <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-CA"></i> CAD</th>
                                <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-AU"></i> AUD</th>
                                <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-HK"></i> HKD</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="md-bg-grey-100 uk-text-small"><i class="item-icon flag-US"></i> USD</td>
                                <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                <td class="uk-text-center">1.1113</td>
                                <td class="uk-text-center">0.0080</td>
                                <td class="uk-text-center">1.5650</td>
                                <td class="uk-text-center">1.0242</td>
                                <td class="uk-text-center">0.7638</td>
                                <td class="uk-text-center">0.7381</td>
                                <td class="uk-text-center">0.1289</td>
                            </tr>
                            <tr>
                                <td class="md-bg-grey-100 uk-text-small"><i class="item-icon flag-EU"></i> EUR</td>
                                <td class="uk-text-center">0.8998</td>
                                <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                <td class="uk-text-center">0.0072</td>
                                <td class="uk-text-center">1.4081</td>
                                <td class="uk-text-center">0.9217</td>
                                <td class="uk-text-center">0.6873</td>
                                <td class="uk-text-center">0.6637</td>
                                <td class="uk-text-center">0.1160</td>
                            </tr>
                            <tr>
                                <td class="md-bg-grey-100 uk-text-small"><i class="item-icon flag-JP"></i> JPY</td>
                                <td class="uk-text-center">124.2700</td>
                                <td class="uk-text-center">138.1100</td>
                                <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                <td class="uk-text-center">194.4670</td>
                                <td class="uk-text-center">127.2860</td>
                                <td class="uk-text-center">94.9140</td>
                                <td class="uk-text-center">91.6770</td>
                                <td class="uk-text-center">16.0220</td>
                            </tr>
                            <tr>
                                <td class="md-bg-grey-100 uk-text-small"><i class="item-icon flag-GB"></i> GBP</td>
                                <td class="uk-text-center">0.6390</td>
                                <td class="uk-text-center">0.7103</td>
                                <td class="uk-text-center">0.0051</td>
                                <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                <td class="uk-text-center">0.6545</td>
                                <td class="uk-text-center">0.4881</td>
                                <td class="uk-text-center">0.4714</td>
                                <td class="uk-text-center">0.0824</td>
                            </tr>
                            <tr>
                                <td class="md-bg-grey-100 uk-text-small"><i class="item-icon flag-CH"></i> CHF</td>
                                <td class="uk-text-center">0.9763</td>
                                <td class="uk-text-center">1.0851</td>
                                <td class="uk-text-center">0.0079</td>
                                <td class="uk-text-center">1.5279</td>
                                <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                <td class="uk-text-center">0.7458</td>
                                <td class="uk-text-center">0.7203</td>
                                <td class="uk-text-center">0.1259</td>
                            </tr>
                            <tr>
                                <td class="md-bg-grey-200 uk-text-small"><i class="item-icon flag-CA"></i> CAD</td>
                                <td class="uk-text-center">1.3092</td>
                                <td class="uk-text-center">1.4552</td>
                                <td class="uk-text-center">0.0105</td>
                                <td class="uk-text-center">2.0489</td>
                                <td class="uk-text-center">1.3411</td>
                                <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                <td class="uk-text-center">0.9659</td>
                                <td class="uk-text-center">0.1688</td>
                            </tr>
                            <tr>
                                <td class="md-bg-grey-200 uk-text-small"><i class="item-icon flag-AU"></i> AUD</td>
                                <td class="uk-text-center">1.3554</td>
                                <td class="uk-text-center">1.5064</td>
                                <td class="uk-text-center">0.0109</td>
                                <td class="uk-text-center">2.1213</td>
                                <td class="uk-text-center">1.3885</td>
                                <td class="uk-text-center">1.0353</td>
                                <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                <td class="uk-text-center">0.1748</td>
                            </tr>
                            <tr>
                                <td class="md-bg-grey-200 uk-text-small"><i class="item-icon flag-HK"></i> HKD</td>
                                <td class="uk-text-center">7.7558</td>
                                <td class="uk-text-center">8.6204</td>
                                <td class="uk-text-center">0.0624</td>
                                <td class="uk-text-center">12.1374</td>
                                <td class="uk-text-center">7.9443</td>
                                <td class="uk-text-center">5.9240</td>
                                <td class="uk-text-center">5.7218</td>
                                <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection