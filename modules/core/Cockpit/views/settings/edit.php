<div>
    <ul class="uk-breadcrumb">
        <li><a href="@route('/settings')">@lang('Settings')</a></li>
        <li class="uk-active"><span>@lang('System Settings')</span></li>
    </ul>
</div>


<div class="uk-margin-top" riot-view>
    @if ($configexists)
    <picoedit path="{{ basename(dirname(dirname($configexists))) }}/config/config.php"></picoedit>
    @else
    <div class="uk-alert">
        @lang('Custom config file does not exist').
    </div>
    @endif
</div>
