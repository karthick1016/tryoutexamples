
let carts=document.querySelectorAll('.add-cart'); //get the all a class buttons in js

let products=[  //Array contain object
    {name:'Blue Sofa',tag:'bluesofa',price:23000,inCart:0},
    {name:'Double Cart Bed',tag:'doublecartbed',price:32000,inCart:0}, 
    {name:'Wooden Cub-board',tag:'woodencubboard',price:29000,inCart:0},
    {name:'Washing Machine',tag:'washingmachine',price:14000,inCart:0},
    {name:'Tpoy',tag:'tpoy',price:4000,inCart:0},
    {name:'LG AC',tag:'lgac',price:31500,inCart:0},
    {name:'Cushion Sofa',tag:'cushionsofa',price:40000,inCart:0},
    {name:'Butterfly Stove',tag:'butterflystove',price:6000,inCart:0},
];

for(let i=0;i<carts.length; i++){                  //loop all carts
	carts[i].addEventListener('click', () => {     //whenever i click a button it do something
		cartNumbers(products[i]);  //whenever i click it shows which products
		totalCost(products[i]); //pass the values of products
	})
}

function onLoadCartNumbers() {
	let productNumbers=localStorage.getItem('cartNumbers'); 
	if(productNumbers){
		document.querySelector('.cart span').textContent= productNumbers; //this textcontent = productnumbers
	}
}
function cartNumbers(product) {
	let productNumbers=localStorage.getItem('cartNumbers'); //check to get the item from cartnumbers in localstorage and the type of product number is string 
	productNumbers = parseInt(productNumbers);  //we convert the type of product numbers from string into int
	if(productNumbers){  
		localStorage.setItem('cartNumbers',productNumbers+1);  //if already have productnumbers it will add
		document.querySelector('.cart span').textContent= productNumbers+1; 
	}else{
		localStorage.setItem('cartNumbers',1); //if nan it will add the 1 
		document.querySelector('.cart span').textContent=1; //it will get the cart from html file and access the text it will increase the number
	}
	setItems(product); //call the fxn
}

function setItems(product) {  
	let cartItems = localStorage.getItem('productsInCart'); //it gets items from productsincart
	cartItems=JSON.parse(cartItems);// convert json object into javascript object
	if(cartItems!=null){ //if already exist it will increase one --66
		if(cartItems[product.tag] == undefined){ //if we click another product it will undefined
			cartItems={   //update cartitems
				...cartItems, //rest operator from js
				[product.tag]: product
			}
		}
		cartItems[product.tag].inCart += 1;
	}else{
		product.inCart = 1; 
	    cartItems ={
		    [product.tag]:product //it shows like a product tag and products
	    }
	}
	localStorage.setItem("productsInCart",JSON.stringify(cartItems));// we convert json object into an js object
}

function totalCost(product) {
	console.log("The product price is",product.price);

	let cartCost=localStorage.getItem('totalCost');
	
	console.log("My cart cost",cartCost);

	if(cartCost!=null) {
		cartCost=parseInt(cartCost);
		localStorage.setItem("totalCost",cartCost+product.price);
	}else{
		localStorage.setItem("totalCost",product.price);
	}
}

function displayCart() {
	let cartItems=localStorage.getItem("productsInCart");
	cartItems = JSON.parse(cartItems);
	let productContainer=document.querySelector(".products");
	let cartCost=localStorage.getItem('totalCost');
	if(cartItems && productContainer){
		productContainer.innerHTML='';
		Object.values(cartItems).map(item => {
			productContainer.innerHTML +=`
			<div class="mycontainer">
			<table class="product-container">
			<tr class="row1"><td class="product-title"><span>${item.name}</span></td>
			<td class="price"><span>Rs.${item.price}.00</span></td>
			<td class="quantity"><span>${item.inCart}</span</td>
			<td class="total"><span>Rs.${item.inCart * item.price}.00</span></td>
			</tr>
			</table>
			</div
			`;
		});
		productContainer.innerHTML +=`
		     <div class="basketTotalContainer">
		         <h4 class="basketTotalTitle">
		            Basket total
		         </h4>
		         <h4 class="basketTotal">
		            Rs.${cartCost}.00
		         </h4> </div>
		`;
	}
}
onLoadCartNumbers();//whenever i load the page this fxn will run
displayCart(); // whenever i load the page this fxn will run

