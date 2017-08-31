@if(Sentinel::getUser()->inRole('admin') || Sentinel::getUser()->inRole('superadmin'))
<div id="menu_top_dropdown" class="uk-float-left uk-hidden-small">
    <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
        <a href="#" class="top_menu_toggle"><i class="material-icons md-24">&#xE8F0;</i></a>
        <div class="uk-dropdown uk-dropdown-width-3">

            <div class="uk-grid uk-dropdown-grid">
                <div class="uk-width-2-3">
                    <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-bottom uk-text-center">
                        <a href="{{ route('notice') }}" class="uk-margin-top">
                            <i class="material-icons md-36 md-color-light-green-600">&#xE616;</i>
                            <span class="uk-text-muted uk-display-block">Notice</span>
                        </a>
                        <a href="{{ route('dailyaccounts') }}" class="uk-margin-top">
                            <i class="material-icons md-36 md-color-purple-600">&#xE53E;</i>
                            <span class="uk-text-muted uk-display-block">Daily Accounts</span>
                        </a>

                        <a href="{{ route('AccountType') }}" class="uk-margin-top">
                            <i class="material-icons md-36 md-color-red-600">&#xE85C;</i>
                            <span class="uk-text-muted uk-display-block">Account Type</span>
                        </a>
                        <a href="{{ route('message') }}" class="uk-margin-top">
                            <i class="material-icons md-36 md-color-cyan-600">&#xE0B9;</i>
                            <span class="uk-text-muted uk-display-block">Message</span>
                        </a>

                        <a href="page_user_profile.html" class="uk-margin-top">
                            <i class="material-icons md-36 md-color-orange-600">&#xE87C;</i>
                            <span class="uk-text-muted uk-display-block">User profile</span>
                        </a>
                    </div>
                </div>
                <div class="uk-width-1-3">
                    <ul class="uk-nav uk-nav-dropdown uk-panel">
                        <li class="uk-nav-header">Reports</li>
                        <li><a href="{{ route('AccountTransection') }}">Account Transection</a></li>
                        <li><a href="{{ route('Generalladger') }}"> General Ladger</a></li>
                        <li><a href="{{ route('ProfitLoss') }}"> Profit Loss</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
@endif