<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stock;
use App\Product;
use App\Category;
use App\Sub_category;
use Auth;

class StocksController extends Controller
{

    public function edit(){
        return view('partials.admin.makeOrder');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $stockId)
    {
		if (!$stock = Stock::find($stockId)) {
			abort(404);
		}

		$validateData = $request->validate([
			'amount' => 'required'
	  	]);

		$stock->amount = $request->input('amount');

		$stock->save();
    }

    public function searchStock(){

        if (!Auth::check() || Auth::user()->role!="root") {
            abort(404);
        }

        return view('partials.admin.checkStock');

    }

    public function action(Request $request){

        if (!Auth::check() || Auth::user()->role!="root") {
            abort(404);
        }

        if($request->ajax()){
            $output = '';
            $query = $request->get('query');
            if($query != ''){
                $data = Stock::where('amount', '<', $query)->orderBy('productId', 'desc')->get();
                $products = Product::all();
                $rows = $data->count();
                if($rows > 0){
                    foreach($data as $row){
                        $output .= '
                            <tr>
                        ';
                        foreach ($products as $product) {
                            if($row->productId == $product->id){
                                $stockId = Stock::where('productId', $product->id)->where('size', $row->size)->first()->id;
                                $sub_category = Sub_category::find($product->subCategoryId);
                                $categoryId = $sub_category->categoryId;
                                $output .= '<td>' . $product->name . '</td>';
                                $output .= '
                                <td class="text-center">' . $row->size . '</td>
                                <td class="text-center">' . $row->amount . '</td>
                                <td><a href="makeOrder/'.$stockId.'/edit"><button type="button" class="btn btn-warning buttonChangeStock">Make an order</button></a></td>
                            </tr>
                        ';
                            }
                        }
                        
                        //user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products/{productId}/edit
                    }
                }
            }else{
                return view('partials.admin.checkStock')->with('message', 'You have not entered amount yet');
            }
            $data = array(
                'table_data' => $output
            );

            echo json_encode($data);
        }

    }


}
