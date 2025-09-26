@include('admin.header')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <h3 class="mb-3">Resources</h3>

            <!-- Add Resource Section -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Add Resource
                </div>
                <div class="card-body">
                    <form action="{{ route('resources.store') }}" id="resourceForm" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <!-- Title -->
                        <div class="form-group mb-3">
                            <label for="title">Resource Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Enter resource title">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Document Type -->
                        <!-- Document Type -->
                        <div class="form-group mb-3">
                            <label for="document_type">Document Type</label>
                            <select name="document_type" id="document_type" class="form-control">
                                <option value="">-- Select Document Type --</option>
                                <option value="technical-manual">4MANN - Technical Manual</option>
                                <option value="BIS-Certificate">BIS Certificate</option>
                                <option value="Catalogs">Catalogs</option>
                                <option value="IGBC-Certificate">IGBC Certificate</option>
                                <option value="Fire-Test-Certificate">Fire Test Certificate</option>
                                <option value="ISO-Certificates">ISO Certificates</option>
                                <option value="TDS">TDS</option>
                                <option value="Other-Test-Reports">Other Test Reports</option>
                                <option value="Other-Resources">Other Resources</option>
                            </select>
                            @error('document_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <!-- Document Upload -->
                        <div class="form-group mb-3">
                            <label for="document_path">Upload Document
                                <small class="text-danger">(PDF/DOC/DOCX)</small>
                            </label>
                            <input type="file" name="document_path" id="document_path" class="form-control">
                            @error('document_path')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Image Upload -->
                        <div class="form-group mb-3">
                            <label for="image_path">Upload Image (Optional)</label>
                            <input type="file" name="image_path" id="image_path" class="form-control">
                            @error('image_path')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="addResourceBtn" class="btn btn-primary">Submit</button>
                        <input type="hidden" name="resource_id" id="resource_id">
                    </form>
                </div>
            </div>

            <!-- Uploaded Resources Table -->
            <div class="card mt-4">
                <div class="card-header">
                    <strong>Uploaded Resources</strong>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Document</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resources as $resource)
                                <tr>
                                    <td>{{ $resource->title }}</td>
                                    <td>{{ $resource->document_type }}</td>
                                    <td>
                                        @if ($resource->document_path)
                                            <a href="{{ asset('storage/' . $resource->document_path) }}" target="_blank"
                                                class="btn btn-sm btn-info">
                                                View Document
                                            </a>
                                        @else
                                            <span class="text-muted">No file</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($resource->image_path)
                                            <img src="{{ asset('storage/' . $resource->image_path) }}" width="100">
                                        @else
                                            <span class="text-muted">No image</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary editResourceBtn"
                                            data-id="{{ $resource->id }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($resources->isEmpty())
                        <p class="text-muted">No resources uploaded yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on("click", ".editResourceBtn", function() {
        let id = $(this).data("id");

        $.ajax({
            url: "{{ route('resources.edit', ':id') }}".replace(':id', id),
            type: "GET",
            success: function(response) {
                // Fill form with resource data
                $("#resource_id").val(response.id);
                $("#title").val(response.title);
                $("#document_type").val(response.document_type);

                // Update button & form action
                $("#addResourceBtn").text("Update").removeClass("btn-success").addClass(
                    "btn-primary");
                $("#resourceForm").attr("action", "{{ route('resources.update') }}");
                $("#resourceForm").attr("method", "POST");

                $('html, body').animate({
                    scrollTop: $("#resourceForm").offset().top - 20
                }, 600);
            }
        });
    });
</script>
