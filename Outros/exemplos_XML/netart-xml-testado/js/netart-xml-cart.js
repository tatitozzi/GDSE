/* NetArt XML Cart - www.netartmedia.net/xml-cart
 * Copyright 2013-2017 NetArt Media
 * http://www.netartmedia.net
 *
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0 */ 
 
 var cart_products = Array();
var cart_quantities = Array();
var str_checkout_buttons='<a href="javascript:ProceedUpdate()" class="btn btn-xs btn-default add-right-margin">Update</a> <a href="javascript:GoToPayment()" type="button" class="btn btn-xs btn-info">Checkout</a>';

function ShowPopup(x)
{
	document.getElementById("popup").innerHTML=x;
	document.getElementById("popup").style.display="block";
	setTimeout('HidePopup()', 3000);
}

function HidePopup()
{
	document.getElementById("popup").style.display="none";
}

function AddToCart(x)
{
	var product_index = cart_products.indexOf(x);
	
	if (product_index > -1) 
	{
		cart_quantities[x]++;
		
	}
	else
	{
		cart_products.push(x);
		cart_quantities[x] = 1;
	}
	ShowPopup("The product was added successfully to your cart!");
	UpdateCart();
}

function DeleteProduct(x)
{
	var product_index = cart_products.indexOf(x);
	
	if (product_index > -1) 
	{
		cart_products.splice(product_index, 1);
		cart_quantities[x] = 0;
	}
	
}

function UpdateCart()
{
	var cart_html = "";
	var subtotal=0;
	if(cart_products.length>0)
	{
		for(i=0;i<cart_products.length;i++)
		{
			cart_html +='<input name="quantity_'+cart_products[i]+'" id="quantity_'+cart_products[i]+'" type="text" value="'+cart_quantities[cart_products[i]]+'" maxlength="2" class="quantity-text"/>';
			cart_html += products[cart_products[i]];
			cart_html += '<span class="pull-right">'+currency_symbol+(product_prices[cart_products[i]]*cart_quantities[cart_products[i]])+'</span>';
			cart_html += '<hr/>';
			subtotal+=product_prices[cart_products[i]]*cart_quantities[cart_products[i]];
		}
		
		cart_html += '<span class="pull-right">Subtotal: '+currency_symbol+subtotal+'</span>';
					
		cart_html += '<div class="clearfix"></div>';
		cart_html += str_checkout_buttons;
	}
	else
	{
		cart_html = "The cart is empty!";
	}
	
	document.getElementById("Cart").innerHTML=cart_html;
}

function GoToPayment()
{
	if(cart_products.length==0)
	{
		ShowPopup("Your cart is empty!");
	}
	else
	{
		var subtotal=0;
		var products_list="";
		for(i=0;i<cart_products.length;i++)
		{
			if(products_list!="") products_list+=", ";
			products_list+= products[cart_products[i]]+" ("+cart_quantities[cart_products[i]]+")";
			subtotal+=product_prices[cart_products[i]]*cart_quantities[cart_products[i]];
		}
		document.getElementById("products_value").value=subtotal;
	
		document.getElementById("products_list").value=products_list;
	
		document.getElementById("cart-container").style.display="none";
		document.getElementById("payment-container").style.display="block";
	}
}

function GoToCart()
{
	document.getElementById("cart-container").style.display="block";
	document.getElementById("payment-container").style.display="none";
}

function SubmitPaymentForm()
{
	ShowPopup('<img src="netart-xml-cart/images/loading.gif" alt="loading"/> Please wait while processing your order');
	document.getElementById("payment-from").submit();
}


function ProceedUpdate()
{
	

	for(i=0;i<cart_products.length;i++)
	{
	
	
		var current_quantity = parseInt(document.getElementById("quantity_"+cart_products[i]).value) || 0;
	
		if(current_quantity==0)
		{
			DeleteProduct(cart_products[i]);
		}
		else
		{
			cart_quantities[cart_products[i]] = current_quantity;
		}
	
		
	}
	
	UpdateCart();
}
