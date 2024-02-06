@extends('layout')
@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Customers</h3>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="more-options">
                        <ul class="nk-block-tools g-3">
                            <li>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-search"></em>
                                    </div>
                                    <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                                </div>
                            </li>
                            <li>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-bs-toggle="dropdown">Status</a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><span>Actived</span></a></li>
                                            <li><a href="#"><span>Inactived</span></a></li>
                                            <li><a href="#"><span>Blocked</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                <a href="#" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="nk-tb-list is-separate mb-3">
            <div class="nk-tb-item nk-tb-head">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid">
                        <label class="custom-control-label" for="uid"></label>
                    </div>
                </div>
                <div class="nk-tb-col"><span class="sub-text">User</span></div>
                <div class="nk-tb-col tb-col-mb"><span class="sub-text">Ordered</span></div>
                <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                <div class="nk-tb-col tb-col-lg"><span class="sub-text">Country</span></div>
                <div class="nk-tb-col tb-col-lg"><span class="sub-text">Last Order</span></div>
                <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li>
                            <div class="drodown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Password</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid1">
                        <label class="custom-control-label" for="uid1"></label>
                    </div>
                </div>
                <div class="nk-tb-col">
                    <a href="customer-details.html">
                        <div class="user-card">
                            <div class="user-avatar bg-primary">
                                <span>AB</span>
                            </div>
                            <div class="user-info">
                                <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ms-1"></span></span>
                                <span>info@softnio.com</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="nk-tb-col tb-col-mb">
                    <span class="tb-amount">35,040.34 <span class="currency">USD</span></span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span>+811 847-4958</span>
                </div>
                <div class="nk-tb-col tb-col-lg">
                    <span>United State</span>
                </div>
                <div class="nk-tb-col tb-col-lg">
                    <span>10 Feb 2020</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-status text-success">Active</span>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1">
                        <li class="nk-tb-action-hidden">
                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send Email" data-bs-original-title="Send Email">
                                <em class="icon ni ni-mail-fill"></em>
                            </a>
                        </li>
                        <li class="nk-tb-action-hidden">
                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Suspend" data-bs-original-title="Suspend">
                                <em class="icon ni ni-user-cross-fill"></em>
                            </a>
                        </li>
                        <li>
                            <div class="drodown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="customer-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Orders</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection