@include('admin.header')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <h3 class="mb-3">Add Project</h3>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card">
                <div class="card-header bg-primary text-white">New Project</div>
                <div class="card-body">
                    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" id="projectsForm">
                        @csrf
                        <!-- Project Title -->
                        <div class="form-group mb-3">
                            <label for="title">Project Title</label>
                            <input type="text" name="project_title" id="project_title" class="form-control">
                            @error('project_title') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <!-- Product Description -->
                        <div class="form-group mb-3">
                            <label for="description">Project Description</label>
                            <textarea name="project_description" id="project_description" class="form-control"></textarea>
                            @error('project_description') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <!-- Product Image -->
                        <div class="form-group mb-3">
                            <label for="project_image">Upload Image</label>
                            <small class="text-danger">(Image should be 800 x 800px)</small>
                            <input type="file" name="project_image" id="project_image" class="form-control">
                            <span id="image_error" class="text-danger"></span>
                            @error('project_image') <div class="text-danger">{{ $message }}</div> @enderror

                            <!-- Current Image Display -->
                            <div id="currentImageContainer" class="mt-2" style="display: none;">
                                <label class="text-muted">Current Image:</label>
                                <div class="mt-1">
                                    <img id="currentImage" src="" alt="Current Product Image" style="max-width: 200px; max-height: 200px; border: 1px solid #ddd; border-radius: 4px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
    <label>Project Images (Up to 9)</label>
    <div class="row">
        @for ($i = 1; $i <= 9; $i++)
            <div class="col-lg-2 col-md-4 mb-2">
                <input type="file" name="project_image{{ $i }}" class="form-control">
            </div>
        @endfor
    </div>
</div>


                        <div class="form-group mb-3">
                            <label for="project_products_id">Select Product</label>
                            <select name="project_products_id" id="project_products_id" class="form-control">
                            <option value="">-- Select Product --</option>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->product_title }}</option>
                            @endforeach
                        </select>
                        @error('project_products_id') <div class="text-danger">{{ $message }}</div> @enderror

                            @error('project_products_id') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                         <div class="form-group mb-3">
                            <label for="project_client">Project Client</label>
                            <input type="text" name="project_client" id="project_client" class="form-control">
                            @error('project_client') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                         <div class="form-group mb-3">
                            <label for="project_sector">Project Sector</label>
                            <select id="project_sector" name="project_sector" class="form-control">
                                    <option value="">Select Sector</option>
                                    <option value="Hotel">Hotel</option>
                                    <option value="Hospital">Hospital</option>
                                    <option value="Interior">Interior</option>
                                    <option value="Mall">Mall</option>
                                </select>
                            @error('project_sector') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                     <div class="form-group mb-3">
    <label for="project_state">Select State</label>
    <select name="project_state" id="project_state" class="form-control">
        <option value="">-- Select State --</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Ladakh">Ladakh</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
    </select>
    @error('project_state') <div class="text-danger">{{ $message }}</div> @enderror
</div>

                        {{-- <div class="form-group mb-3">
                            <label for="project_state">Project State</label>
                            <input type="text" name="project_state" id="project_state" class="form-control">
                            @error('project_state') <div class="text-danger">{{ $message }}</div> @enderror
                        </div> --}}
                       <div class="form-group mb-3">
    <label for="project_city">Select City</label>
    <select name="project_city" id="project_city" class="form-control">
        <option value="">-- Select City --</option>
    </select>
    @error('project_city') <div class="text-danger">{{ $message }}</div> @enderror
</div>

                          <div class="form-group mb-3">
                            <label for="project_location">Project Location</label>
                            <input type="text" name="project_location" id="project_location" class="form-control">
                            @error('project_location') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <button type="submit" class="btn btn-success" id="formSubmitBtn">Add Project</button>
                        <button type="button" class="btn btn-secondary ml-2" id="resetFormBtn" style="display: none;">Reset Form</button>
                        <input type="hidden" name="project_id" id="project_id">

                    </form>
                </div>
            </div>

            <!-- Products Table -->
            <div class="card mt-4">
                <div class="card-header"><strong>All Projects</strong></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="projectsTable">
                        <thead>
                            <tr>
                                <th>Project Ttile</th>
                                <th>Product </th>
                                <th>Project Client</th>
                                <th>Project Sector</th>
                                <th>Project State</th>
                                <th>Project Location</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->project_title }}</td>
                                <td>{{ $project->product->product_title ?? 'N/A' }}</td>
                                <td>{{ $project->project_client }}</td>
                                <td>{{ $project->project_sector }}</td>
                                <td>{{ $project->project_state }}</td>
                                <td>{{ $project->project_location }}</td>
                                <td>
                                    @if($project->project_image)
                                        <img src="{{ asset('storage/' . $project->project_image) }}" width="100">
                                    @endif
                                </td>

                                 <td>
                                    <button class="btn btn-sm btn-primary editProjectBtn" data-id="{{ $project->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($projects->isEmpty())
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
$(document).on("click", ".editProjectBtn", function () {
    let id = $(this).data("id");

    $.ajax({
        url: "{{ route('projects.edit', ':id') }}".replace(':id', id),

        type: "GET",
        success: function (response) {
            console.log('Project data received:', response);

            // Fill form
            $("#project_id").val(response.id);

            // Fill other fields
            $("#project_client").val(response.project_client);
            $("#project_title").val(response.project_title);
            $("#project_description").val(response.project_description);
            $("#project_sector").val(response.project_sector);
            $("#project_state").val(response.project_state);
            // $("#project_city").val(response.project_city);
            $("#project_location").val(response.project_location);
           $("#project_products_id").val(response.project_products_id);
               if (response.project_state) {
        $.ajax({
            url: '{{ route('get.cities') }}/' + response.project_state,
            type: 'GET',
            success: function (data) {
                $('#project_city').empty().append('<option value="">-- Select City --</option>');
                $.each(data, function (id, name) {
                    let selected = (name === response.project_city) ? 'selected' : '';
                    $('#project_city').append('<option value="' + name + '" ' + selected + '>' + name + '</option>');
                });
            }
        });
    }

            // Show current image if exists
            if (response.project_image) {
                $("#currentImage").attr("src", "{{ asset('storage/') }}/" + response.project_image);
                $("#currentImageContainer").show();
            } else {
                $("#currentImageContainer").hide();
            }

            // Change button text to "Update Product"
            $("#formSubmitBtn").text("Update Project").removeClass("btn-success").addClass("btn-primary");

            // Show reset button
            $("#resetFormBtn").show();

            // Change form action
            $("#projectsForm").attr("action", "{{ route('projects.update') }}");
             $('html, body').animate({
                scrollTop: $("#projectsForm").offset().top - 20 // adjust 20px above
            }, 600);
        }
    });
});

// Reset form functionality
$(document).on("click", "#resetFormBtn", function () {
    // Reset form to add new product mode
    $("#projectsForm")[0].reset();
    $("#projectsForm").attr("action", "{{ route('projects.store') }}");
    $("#formSubmitBtn").text("Add Project").removeClass("btn-primary").addClass("btn-success");
    $("#resetFormBtn").hide();
    $("#productCodeField").show();
    $("#currentImageContainer").hide();
    $("#project_id").val("");
    $("#subcategory_id").prop('disabled', true).html('<option value="">-- Select Subcategory --</option>');
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
        $('#projectsTable').DataTable({
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
document.getElementById("project_image").addEventListener("change", function() {
    validateImage(this, 800, 800, "image_error");
});

    </script>
<script>
    $('#project_state').on('change', function () {
        var stateName = $(this).val();

        if (stateName) {
            $.ajax({
                url: '{{ route('get.cities') }}/' + stateName,
                type: 'GET',
                success: function (data) {
                    $('#project_city').empty().append('<option value="">-- Select City --</option>');
                    $.each(data, function (id, name) {
                        $('#project_city').append('<option value="' + name + '">' + name + '</option>');
                    });
                }
            });
        } else {
            $('#project_city').empty().append('<option value="">-- Select City --</option>');
        }
    });
</script>


