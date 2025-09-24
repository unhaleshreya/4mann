@include('admin.header')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <h3 class="mb-3">Home Page</h3>

            <!-- Add Banner Section -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Add Banner
                </div>
                <div class="card-body">
                    <form action="{{ route('banners.store') }}" id="bannerForm" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Title -->
                        <div class="form-group mb-3">
                            <label for="title">Banner Title</label>
                            <input type="text" name="text_content" id="text_content" class="form-control" placeholder="Enter banner title">
                            @error('text_content') <div class="text-danger">{{ $message }}</div> @enderror

                        </div>

                        <!-- Subtitle -->
                        <div class="form-group mb-3">
                            <label for="subtitle">Banner Subtitle</label>
                            <input type="text" name="sub_text_content" id="sub_text_content" class="form-control" placeholder="Enter banner subtitle">
                            @error('sub_text_content') <div class="text-danger">{{ $message }}</div> @enderror

                        </div>

                        <!-- Display Order -->
                        <div class="form-group mb-3">
                            <label for="display_order">Display Order</label>
                            <input type="number" name="display_order" id="display_order" class="form-control" placeholder="1, 2, 3...">
                            @error('display_order') <div class="text-danger">{{ $message }}</div> @enderror

                        </div>

                        <!-- Website View Image -->
                        <div class="form-group mb-3">
                            <label for="web_image">Upload image for Website View
                                <small class="text-danger">(≥ 1920 x 750px)</small>
                            </label>
                            <input type="file" name="image" id="image" class="form-control">
                            <span id="image_error" class="text-danger"></span>
                            @error('image') <div class="text-danger">{{ $message }}</div> @enderror

                        </div>

                        <!-- Mobile View Image -->
                        <div class="form-group mb-3">
                            <label for="mobile_image">Upload image for Mobile View
                                <small class="text-danger">(≥ 834 x 1194px)</small>
                            </label>
                            <input type="file" name="mobile_image" id="mobile_image" class="form-control">
                            <span id="mobile_image_error" class="text-danger"></span>
                            @error('mobile_image') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="addBannerbtn" class="btn btn-primary">Submit</button>
                        <input type="hidden" name="banner_id" id="banner_id">
                    </form>
                </div>
            </div>

            <!-- Uploaded Banners Table -->
            <div class="card mt-4">
                <div class="card-header">
                    <strong>Uploaded Banners</strong>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Order</th>
                                <th>Web Image</th>
                                <th>Mobile Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($banners as $banner)
                            <tr>
                                <td>{{ $banner->text_content }}</td>
                                <td>{{ $banner->sub_text_content }}</td>
                                <td>{{ $banner->display_order }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $banner->image_path) }}" width="150">
                                </td>
                                <td>
                                    <img src="{{ asset('storage/' . $banner->mobile_img_path) }}" width="100">
                                </td>
                                <td>
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm btn-primary editBannerBtn"
                                            data-id="{{ $banner->id }}">
                                        <i class="fas fa-edit"></i>
                                        </a>
                                    {{-- <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this banner?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($banners->isEmpty())
                        <p class="text-muted">No banners uploaded yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on("click", ".editBannerBtn", function () {
    let id = $(this).data("id");

    $.ajax({
        url: "{{ route('banners.ajax.edit', ':id') }}".replace(':id', id),
        type: "GET",
        success: function (response) {
            // Fill form with banner data
            $("#banner_id").val(response.id);
            $("#text_content").val(response.text_content);
            $("#sub_text_content").val(response.sub_text_content);
            $("#display_order").val(response.display_order);
 $("#addBannerbtn").text("Update").removeClass("btn-success").addClass("btn-primary");
            // Change form action to update
            $("form").attr("action", "{{ route('banners.ajax.update') }}");
            $("form").attr("method", "POST");
              $('html, body').animate({
                scrollTop: $("#bannerForm").offset().top - 20 // adjust 20px above
            }, 600);
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
        if (this.width < minWidth || this.height < minHeight) {
            image_error.innerText = "Image must be at least " + minWidth + "x" + minHeight + " pixels.";
            input.value = "";
        }
    };
    img.src = URL.createObjectURL(file);
}

// Call validation on change
document.getElementById("image").addEventListener("change", function() {
    validateImage(this, 1920, 750, "image_error"); // Website image
});

document.getElementById("mobile_image").addEventListener("change", function() {
    validateImage(this, 834, 1194, "mobile_image_error"); // Mobile image
});

</script>

