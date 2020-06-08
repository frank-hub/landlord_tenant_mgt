@extends('layouts.main')
@section('main')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card bootstrap-table">
                    <div class="card-body table-full-width">
                        
                        <div class="bootstrap-table">
                            <div class="fixed-table-toolbar">
                            <div class="bars pull-left">
                                <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                    </div>
                
                    <div class="pull-left search">
                        <input class="form-control" type="text" placeholder="Search">
                    </div>
                </div>
                <div class="fixed-table-container" style="padding-bottom: 0px;">
                    <div class="fixed-table-header" style="display: none;">
                        <table>
                            </table>
                        </div>
                        <div class="fixed-table-body">
                            <div class="fixed-table-loading" style="top: 41px;">
                                Loading, please wait...
                            </div>
                            <table id="bootstrap-table" class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="bs-checkbox " style="width: 36px; " data-field="state">
                                        <div class="th-inner ">
                                            <input name="btSelectAll" type="checkbox">
                                        </div>
                                        <div class="fht-cell">
                                            </div>
                                        </th>
                                        <th class="text-center" style="" data-field="id">
                                            <div class="th-inner ">ID</div>
                                            <div class="fht-cell">
                                                </div>
                                            </th>
                                            <th style="" data-field="name">
                                                <div class="th-inner sortable both">Full Name</div>
                                                <div class="fht-cell">
                                                    </div>
                                            </th>
                                            <th style="" data-field="salary">
                                                <div class="th-inner sortable both">No. Id</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="" data-field="occupation_s">
                                                <div class="th-inner sortable both">Occupation Status</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="" data-field="emg_n">
                                                <div class="th-inner ">Emergency Name</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="" data-field="emg_contact">
                                                <div class="th-inner ">Emergency Contact</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="" data-field="actions">
                                                <div class="th-inner ">Actions</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            {{-- <th class="td-actions text-right" style="" data-field="actions">
                                                <div class="th-inner ">Actions</div>
                                                <div class="fht-cell"></div>
                                            </th> --}}
                                        </tr>
                            </thead>
                            <tbody>
                                @foreach ($tenants as $tenant)
                                    <tr data-index="0">
                                        <td class="bs-checkbox">
                                            <input data-index="0" name="btSelectItem" type="checkbox">
                                        </td>
                                        <td class="text-center" style="">{{$tenant->id}}</td>
                                        <td style="">{{$tenant->f_name}}</td>
                                        <td style="">{{$tenant->no_id}}</td>
                                        <td style="">{{$tenant->occupation_status}}</td>
                                        <td style="">{{$tenant->emg_name}}</td>
                                        <td style="">{{$tenant->emg_phone}}</td>
                                        <td class="td-actions text-right" style="">
                                            <a rel="tooltip" title="View" class="btn btn-link btn-info table-action view" href="javascript:void(0)">
                                                <i class="fa fa-image"></i>
                                            </a>
                                            <a rel="tooltip" title="Edit" class="btn btn-link btn-warning table-action edit" href="javascript:void(0)">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a rel="tooltip" title="Remove" class="btn btn-link btn-danger table-action remove" href="javascript:void(0)">
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="fixed-table-footer" style="display: none;">
                        <table>
                            <tbody>
                                <tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="fixed-table-pagination" style="">
                            <div class="pull-left pagination-detail">
                                <span class="pagination-info"></span>
                                <span class="page-list" style="display: none;">
                                    <span class="btn-group dropup">
                                        <button type="button" class="btn btn-outline  dropdown-toggle" data-toggle="dropdown">
                                            <span class="page-size">8</span> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="active">
                                                <a href="javascript:void(0)">8</a>
                                            </li>
                                        </ul>
                                    </span> rows visible</span>
                                </div>
                                <div class="pull-right pagination" style="display: none;">
                                    <ul class="pagination">
                                        <li class="page-first disabled">
                                            <a href="javascript:void(0)">«</a>
                                        </li>
                                        <li class="page-pre disabled">
                                            <a href="javascript:void(0)">‹</a>
                                        </li>
                                        <li class="page-number active">
                                            <a href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-next disabled">
                                            <a href="javascript:void(0)">›</a>
                                        </li>
                                        <li class="page-last disabled">
                                            <a href="javascript:void(0)">»</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
