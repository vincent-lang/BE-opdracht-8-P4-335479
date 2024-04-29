<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Leverancier;
use App\Models\Product;
use App\Models\ProductPerAllergeen;
use App\Models\ProductPerLeverancier;
use Illuminate\Http\Request;

class GegevensController extends Controller
{
    public function index(Request $request, $info = null)
    {
        if ($request != null) {
            $info = $request->input('allergeen');
        }
        if ($info == null) {
            $data = ProductPerAllergeen::join('allergeens', 'allergeens.id', '=', 'product_per_allergeens.allergeen_id')->join('products', 'product_per_allergeens.product_id', '=', 'products.id')->join('magazijns', 'magazijns.product_id', '=', 'products.id')->orderBy('products.Naam', 'asc')->get();
            return view('allergeen.index', compact('data', 'info'));
        } else {
            $data = ProductPerAllergeen::join('allergeens', 'allergeens.id', '=', 'product_per_allergeens.allergeen_id')->join('products', 'products.id', '=', 'product_per_allergeens.product_id')->join('magazijns', 'magazijns.product_id', '=', 'Product_per_allergeens.product_id')->where('allergeens.Naam', $info)->orderBy('products.Naam', 'asc')->get();
            return view('allergeen.index')->with(['data' => $data]);
        }
    }

    public function indexLeverancier(Product $data)
    {
        $product = $data;
        $data = ProductPerLeverancier::with('leverancier')->where('product_id', $product->id)->get();
        $leverancier = Leverancier::where('id', $data[0]->leverancier_id)->get();
        $contact = Contact::where('id', $leverancier[0]->contact_id)->get();
        return view('leverancier.index', compact('data', 'leverancier', 'contact'));
    }
}
