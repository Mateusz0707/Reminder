const openPopup = (event) => {
  event.stopPropagation(); // Zapobiega propagacji zdarzenia kliknięcia
  const popup = document.getElementById("popup");
  popup.style.display = "block";
};

const cancelBtn = document.getElementById("cancelBtn");

cancelBtn.addEventListener("click", () => {
  const popup = document.getElementById("popup");
  popup.style.display = "none";
});

window.addEventListener("click", (e) => {
  const popup = document.getElementById("popup");
  // Sprawdź, czy kliknięty element nie jest dzieckiem okna popup
  if (
    !popup.contains(e.target) &&
    e.target !== document.getElementById("openPopup")
  ) {
    popup.style.display = "none";
  }
});
const toggles = document.querySelectorAll('[id^="toggle"]');
toggles.forEach((toggle) => {
  toggle.addEventListener("change", function () {
    const toggleId = toggle.id;
    const toggleCheckbox = document.querySelector(
      `#${toggleId} + label .toggle-checkbox`
    );
    const toggleBackground = document.querySelector(
      `#${toggleId} + label #toggle-bg${toggleId.slice(-1)}`
    );
    if (toggle.checked) {
      toggleCheckbox.style.transform = "translateX(100%)";
      toggleBackground.classList.remove("bg-gray-400");
      toggleBackground.classList.add("bg-blue-500");
    } else {
      toggleCheckbox.style.transform = "translateX(0)";
      toggleBackground.classList.remove("bg-blue-500");
      toggleBackground.classList.add("bg-gray-400");
    }
  });
});

const openPopup_user = (event) => {
  event.stopPropagation(); // Zapobiega propagacji zdarzenia kliknięcia
  const popup = document.getElementById("popup_user");
  popup.style.display = "block";
};

window.addEventListener("click", (e) => {
  const popup = document.getElementById("popup_user");
  // Sprawdź, czy kliknięty element nie jest dzieckiem okna popup
  if (
    !popup.contains(e.target) &&
    e.target !== document.getElementById("openPopupUser")
  ) {
    popup.style.display = "none";
  }
});
