<?php

require_once('model/contactModel.php');

class contactController
{	
	function __construct()
	{
		$this->model = new contactModel;
	}

	public function contact() 
	{
		include('view/contact.php');
		
	}
	public function displayProducts()
	{
		/**
         * Get all the products and put them in a card
		 * 
		 * @return html
         */

		$sql = "SELECT * FROM products";
		$products = $this->dataHandler->readAllData($sql);

		$this->html = '';

		foreach($products as $product)
		{
			if($product->sale == 0)
			{
				$price = '&euro;'.$product->product_price;
			}
			else
			{
				$price = '<span class="sale">&euro;'.$product->product_price.'</span> &euro;'.$product->sale_price;
			}

			$this->html .= "<div class='col-lg-4 col-md-6 col-sm-12 portfolio-item mb-3'>
                       <div class='card h-100'> 
                       <a href='/details?pid=$product->product_id'><img class='card-img-top p-3' src=assets/custom/img/$product->product_image alt='$product->product_name'></a>
					   <div class='card-body d-flex align-items-start flex-column'>
					   <h5><a href='/details?pid=$product->product_id'>$product->product_name</a></h5>
					   <h5 class='card-title price'>$price</h5>
					   <button class='btn btn-success mt-auto' type='button'><a href='/cart?pid=$product->product_id'>In winkelwagen</a></button>
					   ";
					   
            $this->html .= "</div></div></div>";
		}
		$this->html .= "</div></div>";

		return $this->html;
	}
	
}
