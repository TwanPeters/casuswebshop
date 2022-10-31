{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

    @if(backpack_user()->role_id == 6)
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-question"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('roles') }}"><i class="nav-icon la la-question"></i> Roles</a></li>
    @endif
    @if(backpack_user()->role_id == 3)
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('prices') }}"><i class="nav-icon la la-question"></i> Prices</a></li>
    @endif
    @if(backpack_user()->role_id == 1)
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('categories') }}"><i class="nav-icon la la-question"></i> Categories</a></li>
    @endif
    @if(backpack_user()->role_id == 2)
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('products') }}"><i class="nav-icon la la-question"></i> Products</a></li>
    @endif
    @if(backpack_user()->role_id == 4)
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('order') }}"><i class="nav-icon la la-question"></i> Orders</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('orderrow') }}"><i class="nav-icon la la-question"></i> Orderrows</a></li>
    @endif
    @if(backpack_user()->role_id == 5)
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('reviews') }}"><i class="nav-icon la la-question"></i> Reviews</a></li>
    @endif
