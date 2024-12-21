<?php

namespace App\DataTables;

use App\Models\District;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Services\DataTable;

class DistrictDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('divisionID', function ($row) {
                return $row->division->name ?? "No Record Found";
            })
            ->editColumn('action', function ($row) {
                return view('admin.inc.action', [
                    'edit'   => 'admin.district.edit',
                    'delete' => 'admin.district.destroy',
                    'data'   => $row,
                    'primaryKey' => $row->districtID,
                ]);
            })
            ->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(District $model): QueryBuilder
    {
        return $model->newQuery()->with('division');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('district-table')
            ->addColumn(['data' => 'districtID', 'title' => __('#'), 'orderable' => false, 'searchable' => false,])
            ->addColumn(['data' => 'name', 'title' => __('Name'), 'orderable' => false, 'searchable' => false,])
            ->addColumn(['data' => 'divisionID', 'title' => __('Division'), 'orderable' => true, 'searchable' => true,])
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
        return 'District' . date('YmdHis');
    }
}
