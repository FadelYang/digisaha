<?php

namespace App\DataTables;

use App\Interfaces\ProductAndServiceInterface;
use App\Models\ProductRegistration;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProductRegistrationDataTable extends DataTable
{
    private $productAndServiceInterface;

    public function __construct(ProductAndServiceInterface $productAndServiceInterface) {
        $this->productAndServiceInterface = $productAndServiceInterface;
    }

    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'productregistration.action')
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(ProductRegistration $model): QueryBuilder
    {
        $registrations = $this->productAndServiceInterface->getAllRegistrationByLoggedUser();
        return $model->newQuery()->whereIn('id', $registrations->pluck('id'));
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('productregistration-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('frtip')
                    ->orderBy(1)
                    ->selectStyleSingle();
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('company_owner'),
            Column::make('company_email'),
            Column::make('company_name'),
            Column::make('company_business_sector'),
            Column::make('status'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'ProductRegistration_' . date('YmdHis');
    }
}
