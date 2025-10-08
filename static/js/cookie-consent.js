document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("cookie-banner");
    const acceptBtn = document.getElementById("accept-cookies");
    const declineBtn = document.getElementById("decline-cookies");

    if (localStorage.getItem("cookiesAccepted") === "true") {
        banner.style.display = "none";
    } else {
        banner.style.display = "block";
    }

    acceptBtn.addEventListener("click", function () {
        localStorage.setItem("cookiesAccepted", "true");
        banner.style.display = "none";
    });

    declineBtn.addEventListener("click", function () {
        localStorage.setItem("cookiesAccepted", "false");
        banner.style.display = "none";
    });
});