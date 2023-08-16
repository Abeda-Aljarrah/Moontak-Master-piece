const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 0.10;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseFloat(priceInput[0].value),
      maxPrice = parseFloat(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseFloat(rangeInput[0].value),
      maxVal = parseFloat(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = (maxVal - priceGap).toFixed(2);
      } else {
        rangeInput[1].value = (minVal + priceGap).toFixed(2);
      }
    } else {
      priceInput[0].value = minVal.toFixed(2);
      priceInput[1].value = maxVal.toFixed(2);
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

