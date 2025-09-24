@include('admin.header')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <h3 class="mb-3">Add Product</h3>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card">
                <div class="card-header bg-primary text-white">New Product</div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" id="updateProductForm">
                        @csrf
                     <!-- Category -->
                        <div class="form-group mb-3">
                            <label for="category_id">Select Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <!-- Subcategory -->
                        <div class="form-group mb-3">
                            <label for="subcategory_id">Select Subcategory</label>
                            <select name="subcategory_id" id="subcategory_id" class="form-control" disabled>
                                <option value="">-- Select Subcategory --</option>
                            </select>
                            @error('subcategory_id') <div class="text-danger">{{ $message }}
                                </div> @enderror
                       <div class="form-group mb-3" id="productCodeField">
                            <label for="title">Product Code</label>
                            <input type="text" name="product_code" id="product_code" class="form-control">
                            <span id="product_code_error" class="text-danger"></span>
                            @error('product_code') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <!-- Product Title -->
                        <div class="form-group mb-3">
                            <label for="title">Product Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <!-- Product Description -->
                        <div class="form-group mb-3">
                            <label for="description">Product Description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <!-- Product Image -->
                        <div class="form-group mb-3">
                            <label for="product_image">Upload Product Image</label>
                            <small class="text-danger">(Image should be 600 x 300px)</small>
                            <input type="file" name="product_image" id="product_image" class="form-control">
                            <span id="image_error" class="text-danger"></span>
                            @error('product_image') <div class="text-danger">{{ $message }}</div> @enderror

                            <!-- Current Image Display -->
                            <div id="currentImageContainer" class="mt-2" style="display: none;">
                                <label class="text-muted">Current Image:</label>
                                <div class="mt-1">
                                    <img id="currentImage" src="" alt="Current Product Image" style="max-width: 200px; max-height: 200px; border: 1px solid #ddd; border-radius: 4px;">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success" id="formSubmitBtn">Add Product</button>
                        <button type="button" class="btn btn-secondary ml-2" id="resetFormBtn" style="display: none;">Reset Form</button>
                        <input type="hidden" name="product_id" id="product_id">

                    </form>
                </div>
            </div>

            <!-- Products Table -->
            <div class="card mt-4">
                <div class="card-header"><strong>All Products</strong></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="productsTable">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Subcategory</th>
                                <th>Product Code</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->subcategory->name }}</td>
                                <td>{{ $product->product_code }}</td>
                                <td>{{ $product->product_title }}</td>
                                <td>{{ $product->product_desc }}</td>
                                <td>
                                    @if($product->product_image)
                                        <img src="{{ asset('storage/' . $product->product_image) }}" width="100">
                                    @endif
                                </td>

                                 <td>
                                    <button class="btn btn-sm btn-primary editProductBtn" data-id="{{ $product->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($products->isEmpty())
                        <p class="text-muted">No products added yet.</p>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

<!-- jQuery for Subcategory Dropdown -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// Store the subcategory ID that needs to be selected after loading
let pendingSubcategoryId = null;

$("#category_id").change(function () {
    let categoryId = $(this).val();
    let subcategorySelect = $("#subcategory_id");

    if (categoryId) {
        subcategorySelect.prop('disabled', false);
        subcategorySelect.html('<option value="">-- Loading... --</option>');

        $.ajax({
            url: "{{ route('get.subcategories') }}/" + categoryId,
            type: "GET",
            success: function (data) {
                subcategorySelect.empty().append('<option value="">-- Select Subcategory --</option>');
                $.each(data, function (key, subcat) {
                    subcategorySelect.append('<option value="' + subcat.id + '">' + subcat.name + '</option>');
                });

                // If there's a pending subcategory ID, select it now
                if (pendingSubcategoryId) {
                    console.log('Selecting subcategory ID:', pendingSubcategoryId);
                    subcategorySelect.val(pendingSubcategoryId);
                    console.log('Subcategory selected:', subcategorySelect.val());
                    pendingSubcategoryId = null; // Reset
                }
            },
            error: function() {
                subcategorySelect.html('<option value="">-- Error loading subcategories --</option>');
            }
        });
    } else {
        subcategorySelect.prop('disabled', true);
        subcategorySelect.html('<option value="">-- Select Subcategory --</option>');
        pendingSubcategoryId = null; // Reset
    }
});
</script>
<script>
$(document).on("click", ".editProductBtn", function () {
    let id = $(this).data("id");

    $.ajax({
        url: "{{ route('products.edit', ':id') }}".replace(':id', id),
        type: "GET",
        success: function (response) {
            console.log('Product data received:', response);

            // Fill form
            $("#product_id").val(response.id);

            // Set pending subcategory ID before triggering category change
            pendingSubcategoryId = response.sub_category_id;
            console.log('Pending subcategory ID set to:', pendingSubcategoryId);
            $("#category_id").val(response.category_id).trigger("change");

            // Fallback: Try to set subcategory after a longer delay
            setTimeout(function() {
                if (pendingSubcategoryId && $("#subcategory_id").val() != pendingSubcategoryId) {
                    console.log('Fallback: Setting subcategory ID:', pendingSubcategoryId);
                    $("#subcategory_id").val(pendingSubcategoryId);
                }
            }, 1000);

            // Fill other fields
            $("#product_code").val(response.product_code);
            $("#title").val(response.product_title);
            $("#description").val(response.product_desc);

            // Show current image if exists
            if (response.product_image) {
                $("#currentImage").attr("src", "{{ asset('storage/') }}/" + response.product_image);
                $("#currentImageContainer").show();
            } else {
                $("#currentImageContainer").hide();
            }

            // Hide product code field
            $("#productCodeField").hide();

            // Change button text to "Update Product"
            $("#formSubmitBtn").text("Update Product").removeClass("btn-success").addClass("btn-primary");

            // Show reset button
            $("#resetFormBtn").show();

            // Change form action
            $("#updateProductForm").attr("action", "{{ route('products.update') }}");
             $('html, body').animate({
                scrollTop: $("#updateProductForm").offset().top - 20 // adjust 20px above
            }, 600);
        }
    });
});

// Reset form functionality
$(document).on("click", "#resetFormBtn", function () {
    // Reset form to add new product mode
    $("#updateProductForm")[0].reset();
    $("#updateProductForm").attr("action", "{{ route('products.store') }}");
    $("#formSubmitBtn").text("Add Product").removeClass("btn-primary").addClass("btn-success");
    $("#resetFormBtn").hide();
    $("#productCodeField").show();
    $("#currentImageContainer").hide();
    $("#product_id").val("");
    $("#subcategory_id").prop('disabled', true).html('<option value="">-- Select Subcategory --</option>');
    pendingSubcategoryId = null;
});

// Reset form after successful submit (optional)
$(document).on("submit", "#updateProductForm", function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: $(this).attr("action"),
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function () {
            window.location.reload();
        },
        error: function () {
            alert("Something went wrong!");
        }
    });
});
</script>
<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script>
    $(document).ready(function () {
        $('#productsTable').DataTable({
            dom: 'Bfrtip',   // Show buttons (Copy, CSV, Print, etc.)
            paging: true,    // Enable pagination
            searching: true, // Enable search
            ordering: true,  // Enable sorting
            responsive: true,
            lengthMenu: [10, 25, 50, 100],
            buttons: [
                'copy', 'csv', 'print'
            ]
        });
    });
    function validateImage(input, minWidth, minHeight, errorSpanId) {
        // alert('minWidth='+minWidth);
    let file = input.files[0];
    let image_error = document.getElementById(errorSpanId);
    image_error.innerText = ""; // clear old error

    if (!file) return;

    // File type check
    let validTypes = ["image/jpeg", "image/png", "image/jpg", "image/webp"];
    if (!validTypes.includes(file.type)) {
        image_error.innerText = "Only JPG, PNG, WEBP images are allowed.";
        input.value = "";
        return false;
    }

    // File size check (2MB max)
    if (file.size > 2 * 1024 * 1024) {
        image_error.innerText = "File size must be less than 2MB.";
        input.value = "";
        return false;
    }

    // Dimension check
    let img = new Image();
    img.onload = function() {
        if (this.width != minWidth || this.height != minHeight) {
            image_error.innerText = "Image must be at least " + minWidth + "x" + minHeight + " pixels.";
            input.value = "";
        }
    };
    img.src = URL.createObjectURL(file);
}

// Call validation on change
document.getElementById("product_image").addEventListener("change", function() {
    validateImage(this, 600, 300, "image_error");
});
$(document).on("keyup", "#product_code", function () {
    let productCode = $(this).val();

    if (productCode.length > 0) {
        $.ajax({
            url: "{{ route('check.product.code') }}",
            type: "POST",
            data: {
                product_code: productCode,
                _token: "{{ csrf_token() }}"
            },
            success: function (res) {
                if (res.exists) {
                    $("#product_code_error").text("This product code is already taken.");
                } else {
                    $("#product_code_error").text("");
                }
            }
        });
    } else {
        $("#product_code_error").text("");
    }
});


    </script>

