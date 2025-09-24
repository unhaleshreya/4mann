@include('admin.header')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <h3 class="mb-3">Masters Fields</h3>

            <!-- Add Subcategory Section -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Add New Sub-Category
                </div>
                <div class="card-body">
                    <form action="{{ route('subcategory.store') }}" method="POST" id="subcategoryForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="subcategory_id" id="subcategory_id">

                        <!-- Category -->
                        <div class="form-group mb-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">@error('category_id') {{ $message }} @enderror</span>
                        </div>

                        <!-- Subcategory Name -->
                        <div class="form-group mb-3">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Subcategory Name" required>
                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                        </div>
                             <div class="form-group mb-3">
                            <label for="web_image">Upload image for Sub category
                                <small class="text-danger">(Image should be 500 x 400px)</small>
                            </label>
                            <input type="file" name="sub_category_image" id="image" class="form-control">
                            <span id="image_error" class="text-danger"></span>
                            @error('image') <div class="text-danger">{{ $message }}</div> @enderror

                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="addCategorybtn" class="btn btn-primary">Save Subcategory</button>
                    </form>
                </div>
            </div>

            <!-- Subcategories Table -->
            <div class="card mt-4">

                <div class="card-body">
                    <table id="subcategoryTable" class="table table-bordered table-striped">
                        <thead class="table">
                            <tr>
                                <th>Sr. No</th>
                                <th>Belongs to Category</th>
                                <th>Name</th>
                                <th width="120">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($subcategories as $index => $subcat)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $subcat->category->name ?? '-' }}</td>
                                <td>{{ $subcat->name }}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary editSubcategoryBtn" data-id="{{ $subcat->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No subcategories found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        $('#subcategoryTable').DataTable({
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
    </script>

<script>
// $(document).on("click", ".editSubcategoryBtn", function () {
//     let id = $(this).data("id");

//     $.ajax({
//         url: "/subcategories/" + id + "/edit",
//         type: "GET",
//         success: function (response) {
//             $("#subcategory_id").val(response.id);
//             $("#category_id").val(response.category_id);
//             $("#name").val(response.name);

//             $("#subcategoryForm").attr("action", "" + response.id);
//             $("#subcategoryForm").append('<input type="hidden" name="_method" value="PUT">');
//         }
//     });
// });

$(document).on("click", ".editSubcategoryBtn", function () {
    let id = $(this).data("id");

    $.ajax({
        url: "/admin/subcategories/" + id + "/edit",
        type: "GET",
        success: function (response) {
            // Fill form with banner data
            $("#subcategory_id").val(response.id);
            $("#category_id").val(response.category_id);
            $("#name").val(response.name);
 $("#addCategorybtn").text("Update").removeClass("btn-success").addClass("btn-primary");

            // Change form action to update
            // $("#subcategoryForm").attr("action", "" + response.id);
            $("subcategoryForm").attr("action", "{{ route('subcategory.ajax.update') }}");
            $("subcategoryForm").attr("method", "POST");
             $('html, body').animate({
                scrollTop: $("#subcategoryForm").offset().top - 20 // adjust 20px above
            }, 600);
        }
    });
});
$(document).on("submit", "#subcategoryForm", function (e) {
    e.preventDefault();

    let formData = new FormData(this); // This will grab all form inputs + file

    $.ajax({
        url: $(this).attr("action"),
        type: "POST",
        data: formData,
        processData: false, // required for FormData
        contentType: false, // required for FormData
        success: function (response) {
             window.location.reload();
            // You can refresh DataTable or update UI here
        },
        error: function (xhr) {
            console.log(xhr.responseText);
        }
    });
});

function validateImage(input, minWidth, minHeight, errorSpanId) {
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
document.getElementById("image").addEventListener("change", function() {
    validateImage(this, 500, 400, "image_error"); // Website image
});


</script>
