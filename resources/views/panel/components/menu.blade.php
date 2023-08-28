<ul class="menu-inner py-1">
    <!-- Page -->
    <li class="menu-item active">
      <a href="{{ route('panel.index', app()->getLocale()) }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div>@lang('Dashboard')</div>
      </a>
    </li>
    
    <!-- Layouts -->
    <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
            <div>@lang('Trading')</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('panel.account', app()->getLocale()) }}" class="menu-link">
                    <div>@lang('Accounts')</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('panel.bank_card', app()->getLocale()) }}" class="menu-link">
                    <div>@lang('My Cards')</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('panel.wallet', app()->getLocale()) }}" class="menu-link">
                    <div>@lang('Wallet')</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('panel.banking', app()->getLocale()) }}" class="menu-link">
                    <div>@lang('banking')</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('panel.verification', app()->getLocale()) }}" class="menu-link">
                    <div>@lang('verification')</div>
                </a>
            </li>
        </ul>

    </li>

    <li class="menu-item">
        <a href="{{ route('panel.account', app()->getLocale()) }}" class="menu-link">
            <div>@lang('Accounts')</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{ route('panel.bank_card', app()->getLocale()) }}" class="menu-link">
            <div>@lang('My Cards')</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{ route('panel.wallet', app()->getLocale()) }}" class="menu-link">
            <div>@lang('Wallet')</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{ route('panel.banking', app()->getLocale()) }}" class="menu-link">
            <div>@lang('banking')</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{ route('panel.verification', app()->getLocale()) }}" class="menu-link">
            <div>@lang('verification')</div>
        </a>
    </li>
    
    
  </ul>