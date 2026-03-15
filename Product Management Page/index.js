
let quantity = document.getElementById("quantity");
let totalprice = document.getElementById("total");

let unitprice = 1000;

quantity.addEventListener("input", () => {

let Pquantity = parseInt(quantity.value);

if (Pquantity < 0) 
    {
Pquantity = 0;
quantity.value = 0;
alert("Quantity cannot be negative");
}

  let total = Pquantity * unitprice;

totalprice.value = total;

if(total > 1000){
alert("Congratulations! You have won the gift coupon");
}
else{
alert("You have not won the gift coupon");
}

});