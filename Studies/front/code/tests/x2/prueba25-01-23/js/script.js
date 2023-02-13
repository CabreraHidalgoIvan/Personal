document.addEventListener("DOMContentLoaded", initialize);


function initialize() {
    let btnButtons = document.querySelector("#btnAddButtons");
    container = document.querySelector("#containerButtons");



    btnButtons.addEventListener("click", addButtons);
    container.addEventListener("click", delegation);
}

function addButtons(e) {
    e.preventDefault();
    fragment = new DocumentFragment();
    let arrayClasses = ["btn btn-primary", "btn btn-secondary", "btn btn-success", "btn btn-danger", "btn btn-warning"];

    let mapClasses = new Map();

    mapClasses.set("btn btn-primary", "primario");
    mapClasses.set("btn btn-secondary", "secundario");
    mapClasses.set("btn btn-success", "exitoso");
    mapClasses.set("btn btn-danger", "peligroso");
    mapClasses.set("btn btn-warning", "precaucion");

    mapClasses.forEach((value, key) => {
        let btn = document.createElement("button");
        btn.className = key;
        btn.textContent = value;
        fragment.appendChild(btn);
    });

    container.appendChild(fragment);
}

function delegation(e) {

    console.log(e.target.className);

    switch (e.target.className) {
        case "btn btn-primary":
            document.body.className = "bg-primary";
            break;
        case "btn btn-secondary":
            document.body.className = "bg-secondary";
            break;
        case "btn btn-success":
            document.body.className = "bg-success";
            break;
        case "btn btn-danger":
            document.body.className = "bg-danger";
            break;
        case "btn btn-warning":
            document.body.className = "bg-warning";
            break;
    }

}