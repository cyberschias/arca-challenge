
<li class="m-menu__item  m-menu__item--{!! Request::is('dashboard') ? 'active' : '' !!}" aria-haspopup="true">
    <a href="{!! url('dashboard') !!}" class="m-menu__link ">
        <i class="m-menu__link-icon fa fa-home"></i>
        <span class="m-menu__link-title">
            <span class="m-menu__link-wrap">
                <span class="m-menu__link-text">
                    Home
                </span>
            </span>
        </span>
    </a>
</li>


<li class="m-menu__item  m-menu__item--{!! Request::is('dashboard/users*') ? 'active' : '' !!}" aria-haspopup="true">
    <a href="{!! route('users.index') !!}" class="m-menu__link ">
        <i class="m-menu__link-icon fa fa-users"></i>
        <span class="m-menu__link-title">
            <span class="m-menu__link-wrap">
                <span class="m-menu__link-text">
                    Users
                </span>
            </span>
        </span>
    </a>
</li>

<li class="m-menu__item  m-menu__item--{!! Request::is('dashboard/categories*') ? 'active' : '' !!}" aria-haspopup="true">
    <a href="{!! route('categories.index') !!}" class="m-menu__link ">
        <i class="m-menu__link-icon fa fa-list"></i>
        <span class="m-menu__link-title">
            <span class="m-menu__link-wrap">
                <span class="m-menu__link-text">
                    Categories
                </span>
            </span>
        </span>
    </a>
</li>

<li class="m-menu__item  m-menu__item--{!! Request::is('dashboard/businesses*') ? 'active' : '' !!}" aria-haspopup="true">
    <a href="{!! route('businesses.index') !!}" class="m-menu__link ">
        <i class="m-menu__link-icon fa fa-building"></i>
        <span class="m-menu__link-title">
            <span class="m-menu__link-wrap">
                <span class="m-menu__link-text">
                    Businesses
                </span>
            </span>
        </span>
    </a>
</li>
