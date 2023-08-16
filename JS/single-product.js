function increaseQuantity(quantityInputId) {
    var quantityInput = document.getElementById(quantityInputId);
    var currentQuantity = parseInt(quantityInput.value);
    quantityInput.value = currentQuantity + 1;
  }

  function decreaseQuantity(quantityInputId) {
    var quantityInput = document.getElementById(quantityInputId);
    var currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 0) {
      quantityInput.value = currentQuantity - 1;
    }
  }


