<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
    <div class="page-title d-flex flex-column me-3">
        <h1 class="d-flex text-dark fw-bolder my-1 fs-3">{{$title ?? ''}}</h1>
        <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">

            {{-- Dashboard --}}
            @if (request()->is('dashboard'))
                <li class="breadcrumb-item text-gray-600"><a class="text-gray-600" href="http://">aaa</a></li>
            @elseif (request()->is('dashboard/*'))
                <li class="breadcrumb-item text-gray-600">Dashboard</li>
            @else
            @endif

            {{-- Setting --}}
            @if (request()->is('dashboard/setting/*'))
                <li class="breadcrumb-item text-gray-600">Setting</li>
            @endif

                {{-- User --}}
                @if (request()->is('dashboard/setting/user'))
                    <li class="breadcrumb-item text-gray-600">User</li>
                @elseif (request()->is('dashboard/setting/user/*'))
                    <li class="breadcrumb-item text-gray-600">User</li>
                @else
                @endif
                @if (request()->is('dashboard/setting/user/*/edit'))
                    <li class="breadcrumb-item text-gray-600">Edit User</li>
                @endif


        </ul>
    </div>
</div>
