@extends('admin.templates.default')

@section('content')

<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
    <div class="page-title d-flex flex-column me-3">
        <h1 class="d-flex text-dark fw-bolder my-1 fs-3">{{$title ?? ''}}</h1>
        {{ Breadcrumbs::render('dashboard') }}
    </div>
</div>

<div class="content flex-column-fluid" id="kt_content">
    <div class="card">
        <div class="card-body p-5 px-lg-19 py-lg-16">
            <div class="mb-15">
                <h1 class="fs-2x text-dark mb-6">Dashboard</h1>
                <div class="fs-5 text-muted fw-bold">
                    test
                </div>
            </div>
            <div class="row g-10 mb-15">

            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

    <script>
        var element = document.getElementById('menu_dashboard');
            element.classList.add('active');
    </script>

@endpush
