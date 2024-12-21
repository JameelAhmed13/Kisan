<?php

namespace App\DataTables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('role', function ($row) {
                return $row->roles[0]->roleName;
            })
            ->editColumn('name', function ($row) {
                return $row->name;
            })
            ->editColumn('Image', content: function ($row) {
                if ($row->name) {
                    $imageTag = '<div class="initial-letter">'.strtoupper(substr($row->name, 0, 1)).'</div>';
                    return '<div class="initial-div">'.$imageTag.' '.'</div>';
                } else {
                    return '<div class="initial-letter">NA</div>';
                }
            })
            ->editColumn('action', function ($row) {
                return view('admin.inc.action', [
                    'edit'   => 'admin.user.edit',
                    'delete' => 'admin.user.destroy',
                    'data'   => $row,
                    'primaryKey' => $row->userID,
                ]);
            })
            ->editColumn('status', function ($row) {
                return view('admin.inc.action', [
                    'toggle' => $row->userID,
                    'name' => 'status',
                    'route' => 'admin.user.status',
                    'value' => $row->status,
                ]);
            })
            ->rawColumns(['created_at', 'action','Image','status']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        return $model->newQuery()->with('roles');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                ->setTableId('user-table')
                ->addColumn(['data' => 'userID', 'title' => __('#'), 'orderable' => false, 'searchable' => false,])
                ->addColumn(['data' => 'Image', 'title' => __('Image'), 'orderable' => false, 'searchable' => false,])
                ->addColumn(['data' => 'name', 'title' => __('Name'), 'orderable' => true, 'searchable' => true,])
                ->addColumn(['data' => 'email', 'title' => __('Email'), 'orderable' => true, 'searchable' => true,])
                ->addColumn(['data' => 'role', 'title' => __('Role'), 'orderable' => false, 'searchable' => false,])
                ->addColumn(['data' => 'status', 'title' =>  __('Status'), 'orderable' => true, 'searchable' => false])
                ->addColumn(['data' => 'action', 'title' => __('Action'), 'orderable' => false, 'searchable' => false])
                ->minifiedAjax()
                ->orderBy(1)->parameters([
                    'language' => [
                        'emptyTable' =>'No Records Found',
                        'infoEmpty' => '',
                        'zeroRecords' => 'No Records Found',
                    ],
                    'drawCallback' => 'function(settings) {
                        if (settings._iRecordsDisplay === 0) {
                            $(settings.nTableWrapper).find(".dataTables_paginate").hide();
                        } else {
                            $(settings.nTableWrapper).find(".dataTables_paginate").show();
                        }
                        feather.replace();
                    }',
                ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'User_' . date('YmdHis');
    }
}
