<?php

namespace App\DataTables;

use App\Http\Controllers\Controller;
use App\Models\Tehsil;
use App\Models\Uc;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Services\DataTable;

class UcDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('tehsilID', function ($row) {
                return $row->tehsil->name ?? "No Record Found";
            })
            ->editColumn('action', function ($row) {
                return view('admin.inc.action', [
                    'edit'   => 'admin.uc.edit',
                    'delete' => 'admin.uc.destroy',
                    'data'   => $row,
                    'primaryKey' => $row->ucID,
                ]);
            })
            ->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Uc $model): QueryBuilder
    {
        return $model->newQuery()->with('tehsil');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('uc-table')
            ->addColumn(['data' => 'ucID', 'title' => __('#'), 'orderable' => false, 'searchable' => false,])
            ->addColumn(['data' => 'name', 'title' => __('Name'), 'orderable' => false, 'searchable' => false,])
            ->addColumn(['data' => 'tehsilID', 'title' => __('Tehsil'), 'orderable' => true, 'searchable' => true,])
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
        return 'Uc' . date('YmdHis');
    }
}
