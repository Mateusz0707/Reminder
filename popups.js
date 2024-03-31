const openPopupBtn = document.getElementById("openPopup");
const popup = document.getElementById("popup");
const saveBtn = document.getElementById("saveBtn");
const cancelBtn = document.getElementById("cancelBtn");

openPopupBtn.addEventListener("click", () => {
  popup.style.display = "block";
});

cancelBtn.addEventListener("click", () => {
  popup.style.display = "none";
});

window.addEventListener("click", (e) => {
  if (e.target === popup) {
    popup.style.display = "none";
  }
});
