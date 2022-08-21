const checkbox = document.querySelector("input[type='checkbox']");
const body = document.querySelector(".main-body");
const button_text = document.querySelector(".mode");
const main = document.body;
const input = document.querySelector(".type-dark");
const input2 = document.querySelector(".type-dark2");
// Aldilla Ulinnaja
checkbox.addEventListener("click", () =>{
    body.classList.toggle("light")
    button_text.classList.toggle("btn-light")
    main.classList.toggle("body-light")
    input.classList.toggle("type-light")
    input2.classList.toggle("type-light")
    if(checkbox.checked){
        button_text.textContent = "Light Mode";
    }else{
        button_text.textContent = "Dark Mode";
    }
})

