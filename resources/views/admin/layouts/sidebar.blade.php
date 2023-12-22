<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="{{ route('admin.dashboard') }}" class="brand-link">
<img src="{{asset('frontend/assets/img/fav-icon.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">Dashboard</span>
</a>

<div class="sidebar">

<!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Alexander Pierce</a>
</div>
</div> -->

<!-- <div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div> -->

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Starter Pages
<i class="right fas fa-angle-left"></i>
</p>
</a>
@canany('Role access','Role add','Role edit','Role delete')

<ul class="nav nav-treeview">
<li class="nav-item">
<!-- <a href="{{url('users-list')}}" class="nav-link"> -->
<a class="nav-link {{ Route::currentRouteNamed('admin.roles.index') ? 'active' : '' }}"
                    href="{{ route('admin.roles.index') }}">
<i class="far fa-circle nav-icon"></i>



<p>Role</p>
</a>
@endcanany
</li>

<li class="nav-item">
<!-- <a href="{{url('products-list')}}" class="nav-link"> -->
@canany('Permission access','Permission add','Permission edit','Permission delete')
                 <a class="nav-link {{ Route::currentRouteNamed('admin.permissions.index') ? 'active' : '' }}"
                    href="{{ route('admin.permissions.index') }}">
<i class="far fa-circle nav-icon"></i>
<p>Permission</p>
</a>
@endcanany
</li>
<li class="nav-item">
<!-- <a href="{{url('products-list')}}" class="nav-link"> -->
@canany('User access','User add','User edit','User delete')
                <a class="nav-link" {{ Route::currentRouteNamed('admin.users.index') ? 'active' : '' }}"
                    href="{{ route('admin.users.index')}}">
<i class="far fa-circle nav-icon"></i>
<p>Users</p>
</a>
@endcanany
</li>
</li>
<li class="nav-item">

<!-- @canany('Contact access','Contact add','Contact edit','Contact delete')
                <a class="nav-link" {{ Route::currentRouteNamed('admin.contacts.index') ? 'active' : '' }}"
                    href="{{ route('admin.contacts.index')}}">
<i class="far fa-circle nav-icon"></i>
<p>Contacts</p>
</a>
@endcanany
</li>
<li class="nav-item"> -->

@canany('Application access','Application add','Application edit','Application delete')
                <a class="nav-link" {{ Route::currentRouteNamed('admin.contacts.index') ? 'active' : '' }}"
                    href="{{ route('admin.applications.index')}}">
<i class="far fa-circle nav-icon"></i>
<p>Applications</p>
</a>
@endcanany
</li>
<li class="nav-item">
<!-- <a href="{{url('add-product')}}" class="nav-link "> -->
@canany('Post access','Post add','Post edit','Post delete')
                 <a class="nav-link {{ Route::currentRouteNamed('admin.posts.index') ? 'active' : '' }}"
                    href="{{ route('admin.posts.index')}}">
<i class="far fa-circle nav-icon"></i>
<p>Posts</p>
</a>
@endcanany
</li>
<li class="nav-item">
<!-- <a href="{{url('add-product')}}" class="nav-link "> -->
@canany('Category access','Category add','Category edit','Category delete')
                 <a class="nav-link {{ Route::currentRouteNamed('admin.categories.index') ? 'active' : '' }}"
                    href="{{ route('admin.categories.index')}}">
<i class="far fa-circle nav-icon"></i>
<p>Categories</p>
</a>
@endcanany
</li>
</li>
<li class="nav-item">
<!-- <a href="{{url('add-product')}}" class="nav-link "> -->
@canany('Comment access','Comment add','Comment edit','Comment delete')
                 <a class="nav-link {{ Route::currentRouteNamed('admin.categories.index') ? 'active' : '' }}"
                    href="{{ route('admin.categories.index')}}">
<i class="far fa-circle nav-icon"></i>
<p>Comments</p>
</a>
@endcanany
</li>
</li>
<li class="nav-item">
<!-- <a href="{{url('add-product')}}" class="nav-link "> -->
@canany('Tag access','Tag create','Tag edit','Tag delete')
                 <a class="nav-link {{ Route::currentRouteNamed('admin.tags.index') ? 'active' : '' }}"
                    href="{{ route('admin.tags.index')}}">
<i class="far fa-circle nav-icon"></i>
<p>Tags</p>
</a>
@endcanany
</li>
<li class="nav-item">
<!-- <a href="#" class="nav-link"> -->
@canany('Job create', 'Job edit', 'Job access')
                 <a class="nav-link {{ Route::currentRouteNamed('admin.jobs.index') ? 'active' : '' }}"
                    href="{{ route('admin.jobs.index')}}">
<i class="far fa-circle nav-icon"></i>
<p>Job</p>
</a>
@endcan
</li>
<!-- <li class="nav-item">


@canany('Mail access','Mail edit')
                 <a class="nav-link {{ Route::currentRouteNamed('admin.mail.index') ? 'active' : '' }}"
                    href="{{ route('admin.mail.index')}}">
<i class="far fa-circle nav-icon"></i>
<p>Settings</p>
</a>
@endcan
</li> -->
</ul>
</li>
<!-- <a class="nav-link"> -->
<!-- <li class="nav-item"> -->

<!-- <i class="far fa-circle nav-icon"></i> -->

<form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();"
                    class="nav-link"><li class="nav-item">
<i class="far fa-circle nav-icon" style="margin-left:10px; margin-top:-10px;"></i>&nbsp;&nbsp;Logout</a>
 </form>

</li>
</ul>
</li>
</ul>
</nav>

</div>

</aside>

