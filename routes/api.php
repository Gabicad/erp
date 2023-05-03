<?php

use App\Http\Controllers\ManufacturerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AttributeValueController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\MeasurementUnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductInstanceController;
use App\Http\Controllers\ProductVariantController;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\PurchaseOrderItemController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\VariantAttributeController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\WarehouseProductInstanceController;

Route::apiResources([
    'attributes' => AttributeController::class,
    'attribute-values' => AttributeValueController::class,
    'categories' => CategoryController::class,
    'currencies' => CurrencyController::class,
    'manufacturers' => ManufacturerController::class,
    'measurement-units' => MeasurementUnitController::class,
    'products' => ProductController::class,
    'product-instances' => ProductInstanceController::class,
    'product-variants' => ProductVariantController::class,
    'purchase-orders' => PurchaseOrderController::class,
    'purchase-order-items' => PurchaseOrderItemController::class,
    'suppliers' => SupplierController::class,
    'variant-attributes' => VariantAttributeController::class,
    'warehouses' => WarehouseController::class,
    'warehouse-product-instances' => WarehouseProductInstanceController::class,
]);

