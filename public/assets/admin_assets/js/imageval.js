// Define a function to handle image change
function handleImageChange(inputId, errorId, minWidth, maxWidth, minHeight, maxHeight) {
    var id = document.getElementById(inputId);
    if (!id) return; // Ensure the element exists

    var fileList = id.files[0];
    if (fileList) {
        var _URL = window.URL || window.webkitURL;
        var img = new Image();

        img.src = _URL.createObjectURL(fileList);
        img.onload = function () {
            var imgWidth = this.width;
            var imgHeight = this.height;

            if ((imgWidth < minWidth || imgWidth > maxWidth) || (imgHeight < minHeight || imgHeight > maxHeight)) {
                var errorMessage = `Image dimensions must be between ${minWidth}x${minHeight} and ${maxWidth}x${maxHeight}.`;
                document.getElementById(errorId).textContent = errorMessage;
                id.value = ""; // Clear the file input
            } else {
                document.getElementById(errorId).textContent = ""; // Clear any previous error messages
            }
        };
    } else {
        alert("No file selected or failed to load.");
    }
}

// Attach event listeners to handle image changes dynamically
function attachImageValidation(inputId, errorId, minWidth, maxWidth, minHeight, maxHeight) {
    var inputElement = document.getElementById(inputId);
    if (inputElement) {
        inputElement.addEventListener("change", function () {
            handleImageChange(inputId, errorId, minWidth, maxWidth, minHeight, maxHeight);
        });
    }
}

attachImageValidation("banner_image", "bannerimage_error", 1920, 1950, 1000, 1000);
attachImageValidation("mobilebanner_image", "mobilebannerimage_error", 834, 850, 600, 600);

attachImageValidation("aboutimage1", "aboutimage1_error", 522, 550, 595, 600);
attachImageValidation("aboutimage2", "aboutimage2_error", 228, 250, 274, 300);

attachImageValidation("hop", "hop_error", 644, 650,  434,450);
attachImageValidation("impregimage1", "impregimage1_error", 600, 650, 600, 650);
attachImageValidation("source", "source_error", 624, 650, 380, 400);


attachImageValidation("aboutvision", "aboutvision_error", 900, 1000, 600, 700);

attachImageValidation("services", "services_error", 400, 500, 600, 700);




