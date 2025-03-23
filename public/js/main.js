// window.onload = function(){
// }


// scrolls to top of page
const back_to_top = document.querySelector("#back-to-top");

back_to_top.addEventListener("click", function () {
    //Safari
    document.body.scrollTop = 0;
    //Chrome, Firefox, IE, Opera
    document.documentElement.scrollTop = 0;
});


document.addEventListener("DOMContentLoaded", function () {
    const headerToggle = document.querySelector("#textToggle");
    const settingsToggle = document.querySelector("#settingsTextToggle"); 

    function applyTextSize(size) {
        document.body.setAttribute("data-text-size", size);
        localStorage.setItem("textSize", size);

        if (headerToggle) headerToggle.checked = (size === "large");
        if (settingsToggle) settingsToggle.checked = (size === "large");
    }

    const savedTextSize = localStorage.getItem("textSize") || "normal";
    applyTextSize(savedTextSize);

    if (headerToggle) {
        headerToggle.addEventListener("change", function () {
            applyTextSize(headerToggle.checked ? "large" : "normal");
        });
    }

    if (settingsToggle) {
        settingsToggle.addEventListener("change", function () {
            applyTextSize(settingsToggle.checked ? "large" : "normal");
        });
    }
});

document.getElementById("size-type").addEventListener("change", function () {
    let sizeType = this.value;
    let sizes = document.getElementById("sizes");
    sizes.innerHTML = "";

    let sizesAll = {
        "XS-XL": ["XS", "S", "M", "L", "XL"],
        Numbered: ["6", "8", "10", "12", "14"],
        OneSize: ["O/S"],
    };

    if (sizesAll[sizeType]) {
        sizesAll[sizeType].forEach(function (size) {
            let label = document.createElement("label");
            label.classList.add("form-check-label", "me-3");

            let input = document.createElement("input");
            input.type = "checkbox";
            input.name = "sizes[]";
            input.value = size;
            input.classList.add("form-check-input");

            label.appendChild(input);
            label.appendChild(document.createTextNode(" " + size));

            let div = document.createElement("div");
            div.classList.add("size-form");
            div.appendChild(label);

            sizes.appendChild(div);
        });
    } else {
        sizes.innerHTML = "<p>Please Select a Size Type</p>";
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const product_form = document.getElementById("new-Product-Form");

    product_form.addEventListener("submit", function (event) {
        let sizes = document.querySelectorAll('input[name="sizes[]"]:checked');

        if (sizes.length == 0) {
            let firstSizeOption = document.querySelector("#sizes input");
            firstSizeOption.setCustomValidity("Please select at least one size.");
            firstSizeOption.reportValidity();
            event.preventDefault();
        }
    });

    document.querySelector("#sizes").addEventListener("change", function () {
        document.querySelectorAll('input[name="sizes[]"]').forEach((cb) => {
            cb.setCustomValidity("");
        });
    });
});

document.getElementById('price').addEventListener("blur", function(){
    let price = parseFloat(this.value);
    if(!isNaN(price)){
        this.value = price.toFixed(2);
    }
})

document.getElementById("image").addEventListener("change", function (event) {
    let file = event.target.files[0];
    let preview = document.getElementById("image-preview");

    if (file) {
        let reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
            preview.style.display = "block";
        };
        reader.readAsDataURL(file);
    } else {
        preview.style.display = "none";
    }
});