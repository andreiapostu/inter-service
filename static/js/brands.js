const CLASSES = "px-4 py-2 bg-white shadow rounded-lg text-gray-700 font-medium text-lg select-none hover:bg-red-400 duration-200";
const BRANDS = [
    "AEG",
    "BEKO",
    "BOSCH",
    "CANDY",
    "ELECTROLUX",
    "GAGGENAU",
    "HISENSE",
    "HOOVER",
    "HOTPOINT - ARISTON",
    "INDESIT",
    "IGNIS",
    "LG",
    "MIELE",
    "NEFF",
    "REX",
    "SAMSUNG",
    "SAN GIORGIO",
    "SIEMENS",
    "SMEG",
    "WHIRLPOOL",
    "ZANUSSI",
    "ZOPPAS",
];

const wrapper = document.querySelector("#brands-wrapper");

for (let brand of BRANDS) {
    const span = document.createElement("span");
    span.setAttribute("class", CLASSES);
    span.innerText = brand;
    wrapper.append(span);
};