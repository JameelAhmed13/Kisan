<?php

namespace App\DataTables;

use App\Models\Kisan;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Services\DataTable;

class KisanDatatable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('action', function ($row) {
                return view('admin.inc.action', [
                    'edit'   => 'admin.user.edit',
                    'delete' => 'admin.user.destroy',
                    'data'   => $row,
                    'primaryKey' => $row->userID,
                ]);
            })
            ->rawColumns([ 'action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Kisan $model): QueryBuilder
    {
        return $model->newQuery()->all();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('user-table')
            ->addColumn(['data' => 'kisanID', 'title' => __('#'), 'orderable' => false, 'searchable' => false,])
            ->addColumn(['data' => 'registrationNo', 'title' => __('Reg No'), 'orderable' => false, 'searchable' => false,])
            ->addColumn(['data' => 'cnic', 'title' => __('Cnic'), 'orderable' => true, 'searchable' => true,])
            ->addColumn(['data' => 'name', 'title' => __('Name'), 'orderable' => true, 'searchable' => true,])
            ->addColumn(['data' => 'fatherName', 'title' => __('Father Name'), 'orderable' => false, 'searchable' => false,])
            ->addColumn(['data' => 'mobileNo', 'title' =>  __('Mobile No'), 'orderable' => true, 'searchable' => false])
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
        return 'Kisan' . date('YmdHis');
    }
}
