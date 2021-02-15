const elements = document.querySelectorAll(".element");
const periods = document.querySelectorAll('input[name="period"]');
const premiumPrice = document.querySelector(".premium .price");

function toggleActive(e) {
  if (this.classList.contains("active")) return;
  else {
    elements.forEach((element) => element.classList.remove("active"));
    this.classList.toggle("active");
  }
}

elements.forEach((element) =>
  element.addEventListener("mouseover", toggleActive)
);
periods.forEach((period) =>
  period.addEventListener(
    "change",
    () => (premiumPrice.textContent = period.value)
  )
);
