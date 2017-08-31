@extends('layouts.theme.master')

@section('content')
<h3 class="heading_b uk-margin-bottom">Autocomplete</h3>

<div class="uk-grid" data-uk-grid-margin>
    <div class="uk-width-1-2">
        <div class="md-card">
            <div class="md-card-content">
                <h3 class="heading_a uk-margin-bottom">Default</h3>
                <div class="uk-autocomplete uk-form uk-position-relative" data-uk-autocomplete="{source:'data/search_data.json'}">
                    <input type="text" class="md-input" placeholder="Min 3 char">
                </div>
            </div>
        </div>
    </div>
    <div class="uk-width-1-2">
        <div class="md-card">
            <div class="md-card-content">
                <h3 class="heading_a uk-margin-bottom">Custom template</h3>
                <div class="uk-autocomplete uk-form uk-position-relative" data-uk-autocomplete="{source:'data/search_data.json'}">
                    <input type="text" class="md-input" placeholder="Min 3 char">
                    <script type="text/autocomplete">
                                    <ul class="uk-nav uk-nav-autocomplete uk-autocomplete-results">

                        <li data-value="">
                                            <a href="">
                                                <br>
                                                <span class="uk-text-muted uk-text-small"></span>
                                            </a>
                                        </li>

                        </ul>
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection