@include('admin.header')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <h3 class="mb-3">Media Blog</h3>

            <!-- Add Blog Form -->
            <div class="card">
                <div class="card-header bg-primary text-white">Add Blog</div>
                <div class="card-body">
                    <form action="{{ route('media-blog.store') }}" id="blogForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <input type="hidden" name="blog_id" id="blog_id">

                        <!-- Title -->
                        <div class="form-group mb-3">
                            <label>Blog Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter title">
                        </div>

                        <!-- Description -->
                        {{-- <div class="form-group mb-3">
                            <label>Description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div> --}}

                        <!-- Content -->
                        <div class="form-group mb-3">
                            <label>HTML Content</label>
                            <textarea name="html_content" id="html_content" class="form-control" rows="5"></textarea>
                        </div>

                        <!-- Image -->
                        <div class="form-group mb-3">
                            <label>Blog Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <span class="text-dandger">(Image should be 1200 x 675px)</span>
                        </div>

                        <button type="submit" id="addBlogBtn" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Blogs List -->
            <div class="card mt-4">
                <div class="card-header"><strong>Blogs</strong></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                {{-- <th>Description</th> --}}
                                {{-- <th>Slug</th> --}}
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mediaBlogs as $blog)
                                <tr>
                                    <td>{{ $blog->title }}</td>
                                    {{-- <td>{{ Str::limit($blog->description, 50) }}</td> --}}
                                    {{-- <td>{{ $blog->slug }}</td> --}}
                                    <td>
                                        @if($blog->image)
                                            <img src="{{ asset('storage/' . $blog->image) }}" width="120">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary editBlogBtn" data-id="{{ $blog->id }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                       
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if($mediaBlogs->isEmpty())
                        <p class="text-muted">No blogs yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('html_content');
</script>
<script>
$(document).on("click", ".editBlogBtn", function () {
    let id = $(this).data("id");

    $.ajax({
        url: "{{ route('media-blog.edit', ':id') }}".replace(':id', id),
        type: "GET",
        success: function (response) {
            $("#blog_id").val(response.id);
            $("#title").val(response.title);
            // $("#description").val(response.d?escription);
            CKEDITOR.instances['html_content'].setData(response.html_content);
            // $("#html_content").val(response.html_content);

            $("#addBlogBtn").text("Update");
            $("#blogForm").attr("action", "{{ route('media-blog.update') }}");
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
    validateImage(this, 1200, 675, "image_error"); // Website image
});
</script>
