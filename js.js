const existingCustomerBtn = document.getElementById("existing-customer-btn");
const newCustomerBtn = document.getElementById("new-customer-btn");
const existingCustomerForm = document.getElementById("existing-customer-form");
const newCustomerForm = document.getElementById("new-customer-form");

existingCustomerBtn.addEventListener("click", function(){
  existingCustomerForm.style.display = "block";
  newCustomerForm.style.display = "none";
});
newCustomerBtn.addEventListener("click", function(){
  existingCustomerForm.style.display = "none";
  newCustomerForm.style.display = "block";
});