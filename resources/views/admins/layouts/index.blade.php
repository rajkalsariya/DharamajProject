@extends('admins.layouts.master')
@section('css')
@endsection
@section('admin')
<header class="page-header">
    <h2>Admin Dashboard</h2>

    <div class="right-wrapper text-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.html">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li><span>Admin</span></li>
            <li><span>Dashboard</span></li>
        </ol>

        <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
    </div>
</header>
<!-- start: page -->
<div class="row">
    <div class="col-lg-12">
        <div class="row mb-3">
            <div class="col-xl-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fas fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Today's Sale</h4>
                                    <div class="info">
                                        <strong class="amount">₹</strong>
                                        <span class="text-primary">INR</span>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="javascript:void(0)">(view all)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-3">
                <section class="card card-featured-left card-featured-secondary">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-secondary">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Monthly Sale</h4>
                                    <div class="info">
                                        <strong class="amount">₹</strong>
                                        <span class="text-primary">INR</span>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="javascript:void(0)">(withdraw)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-3">
                <section class="card card-featured-left card-featured-tertiary mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-tertiary">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                <h4 class="title">Yearly Sale</h4>
                                    <div class="info">
                                        <strong class="amount">₹</strong>
                                        <span class="text-primary">INR</span>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="javascript:void(0)">(statement)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-3">
                <section class="card card-featured-left card-featured-quaternary">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-quaternary">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Pending Orders</h4>
                                    <div class="info">
                                        <strong class="amount"></strong>
                                        <span class="text-primary">Orders</span>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="javascript:void(0)">(Orders)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- end: page -->

@endsection

@section('script')


@endsection