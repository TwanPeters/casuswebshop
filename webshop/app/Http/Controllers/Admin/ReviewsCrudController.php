<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReviewsRequest;
use App\Models\Products;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use COM;

/**
 * Class ReviewsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReviewsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Reviews::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/reviews');
        CRUD::setEntityNameStrings('review', 'review');
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
        CRUD::column('comment');
        CRUD::column('created_at');
        CRUD::column('updated_at');
        CRUD::column('product_id');
        CRUD::column('users_id');
        /*
        CRUD::column('product_id')->label('Products_ID')->type('select')->name('product_id')->entity('review')->attribute('name')->model(Products::class);
*/
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
        CRUD::field('comment');
        $this->crud->addField([
            'name'            => 'users_id',
            'label'           => "Users",
            'type'            => 'select',
            'entity'          => 'review',
            'model'           => User::class,
            'attribute'       => 'name',
           
        ]);

        $this->crud->addField([
            'name'            => 'product_id',
            'label'           => "Products",
            'type'            => 'select',
            'entity'          => 'review',
            'model'           => Products::class,
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
