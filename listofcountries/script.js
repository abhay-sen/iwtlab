function displayCapital() {
    var countrySelect = document.getElementById("countrySelect");
    var capitalOutput = document.getElementById("capitalOutput");
    var selectedCountry = countrySelect.value;

    switch (selectedCountry) {
        case "india":
            capitalOutput.innerText = "Capital: New Delhi";
            break;
        case "usa":
            capitalOutput.innerText = "Capital: Washington, D.C.";
            break;
        case "uk":
            capitalOutput.innerText = "Capital: London";
            break;
        case "france":
            capitalOutput.innerText = "Capital: Paris";
            break;
        case "japan":
            capitalOutput.innerText = "Capital: Tokyo";
            break;
        default:
            capitalOutput.innerText = "";
            break;
    }
}
