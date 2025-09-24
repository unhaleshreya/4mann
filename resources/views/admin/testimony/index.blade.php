@include('admin.header')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <h3 class="mb-3">Add Testimony</h3>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card">
                <div class="card-header bg-primary text-white">Testimony</div>
                <div class="card-body">
                    <form action="{{ route('testimony.store') }}" method="POST" enctype="multipart/form-data" id="testimonyForms">
                        @csrf
                        <!-- Project Title -->
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <!-- Product Description -->
                        <div class="form-group mb-3">
                            <label for="Message">Message</label>
                            <textarea name="Message" id="Message" class="form-control"></textarea>
                            @error('Message') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <!-- Product Image -->
                        <div class="form-group mb-3">
                            <label for="image">Upload Image</label>
                            <small class="text-danger">(≥ 800 x 800)</small>
                            <input type="file" name="image" id="image" class="form-control">
                            <span id="image_error" class="text-danger"></span>
                            @error('image') <div class="text-danger">{{ $message }}</div> @enderror

                            <!-- Current Image Display -->
                            <div id="currentImageContainer" class="mt-2" style="display: none;">
                                <label class="text-muted">Current Image:</label>
                                <div class="mt-1">
                                    <img id="currentImage" src="" alt="Current Product Image" style="max-width: 200px; max-height: 200px; border: 1px solid #ddd; border-radius: 4px;">
                                </div>
                            </div>
                        </div>
      
                         <div class="form-group mb-3">
                            <label for="customer_type">Customer type</label>
                            <input type="text" name="customer_type" id="customer_type" class="form-control">
                            @error('customer_type') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <button type="submit" class="btn btn-success" id="formSubmitBtn">Add Project</button>
                        <button type="button" class="btn btn-secondary ml-2" id="resetFormBtn" style="display: none;">Reset Form</button>
                        <input type="hidden" name="testimon_id" id="testimon_id">

                    </form>
                </div>
            </div>

            <!-- Products Table -->
            <div class="card mt-4">
                <div class="card-header"><strong>All Testimonies</strong></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="TesimonyTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Message </th>
                                <th>Type</th>
                                
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonies as $project)
                            <tr>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->message}}</td>
                                <td>{{ $project->customer_type }}</td>
                                <td>
                                    @if($project->image)
                                        <img src="{{ asset('storage/' . $project->project_image) }}" width="100">
                                    @endif
                                </td>

                                 <td>
                                    <button class="btn btn-sm btn-primary editTestimonyBtn" data-id="{{ $project->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($testimonies->isEmpty())
                        <p class="text-muted">No projects added yet.</p>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

<!-- jQuery for Subcategory Dropdown -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).on("click", ".editTestimonyBtn", function () {
    let id = $(this).data("id");

    $.ajax({
        url: "/admin/testimony/" + id + "/edit",
        type: "GET",
        success: function (response) {
            console.log('Testimony data received:', response);

            // Fill form
            $("#testimony_id").val(response.id);

            // Fill other fields
            $("#name").val(response.name);
            $("#messeage").val(response.messeage);
            $("#customer_type").val(response.customer_type);
         
            
            // Show current image if exists
            if (response.image) {
                $("#currentImage").attr("src", "{{ asset('storage/') }}/" + response.project_image);
                $("#currentImageContainer").show();
            } else {
                $("#currentImageContainer").hide();
            }

            // Change button text to "Update Product"
            $("#formSubmitBtn").text("Update").removeClass("btn-success").addClass("btn-primary");

            // Show reset button
            $("#resetFormBtn").show();

            // Change form action
            $("#testimonyForms").attr("action", "{{ route('testimony.update') }}");
             $('html, body').animate({
                scrollTop: $("#testimonyForms").offset().top - 20 // adjust 20px above
            }, 600);
        }
    });
});

// Reset form functionality
$(document).on("click", "#resetFormBtn", function () {
    // Reset form to add new product mode
    $("#testimonyForms")[0].reset();
    $("#testimonyForms").attr("action", "{{ route('projects.store') }}");
    $("#formSubmitBtn").text("Add Project").removeClass("btn-primary").addClass("btn-success");
    $("#resetFormBtn").hide();
    $("#productCodeField").show();
    $("#currentImageContainer").hide();
    $("#testimony_id").val("");
    pendingSubcategoryId = null;
});

// Reset form after successful submit (optional)
$(document).on("submit", "#projectForm", function (e) {
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
        $('#TesimonyTable').DataTable({
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
        if (this.width < minWidth || this.height < minHeight) {
            image_error.innerText = "Image must be at least " + minWidth + "x" + minHeight + " pixels.";
            input.value = "";
        }
    };
    img.src = URL.createObjectURL(file);
}

// Call validation on change
document.getElementById("image").addEventListener("change", function() {
    validateImage(this, 800, 800, "image_error");
});

    </script>



