<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
//use App\Models\Featured_product;
class FeaturedProdController extends Controller
{
    //
	function getData()
	{
		//return Featured_product::all();
		//$fName = DB::table('featured_products')->select('Product_Image')->get();
		//$img='<img src="data:image/jpeg;base64,'.$fName.'"  style="width: 200px;"/>';
		//$img=base64_encode( $fName );
		//$fName = DB::table('products')->select('ID','Product_Image','Prod_Name','Prod_Rate','SKU','Product_Categ')->get();		
		$fName=DB::table('products')->get();
		return $fName;
	}
	 
}
