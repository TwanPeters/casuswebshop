<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderrowRequest;
use App\Models\Order;
use App\Models\Orders;
use App\Models\Product;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OrderrowCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OrderrowCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Orderrow::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/orderrow');
        CRUD::setEntityNameStrings('orderrows', 'orderrows');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        
        CRUD::column('id');
        CRUD::column('orders_id')->label('Orders_ID')->type('select')->name('orders_id')->entity('orderrow')->attribute('id')->model(Order::class);
        CRUD::column('product_id')->label('Products_ID')->type('select')->name('product_id')->entity('orderrow')->attribute('name')->model(Product::class);
       
        
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        
        CRUD::field('id');
        $this->crud->addField([
            'name'            => 'orders_id',
            'label'           => "Orders",
            'type'            => 'select',
            'entity'          => 'orderrow',
            'model'           => Order::class,
            'attribute'       => 'id',
           
        ]);
        
        $this->crud->addField([
            'name'            => 'products_id',
            'label'           => "Product",
            'type'            => 'select',
            'entity'          => 'orderrow',
            'model'           => Product::class,
            'attribute'       => 'name',
           
        ]);
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
