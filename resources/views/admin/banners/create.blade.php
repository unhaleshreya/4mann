@include('admin.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="container mt-4">
                <h2>Add Banner</h2>
                <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <textarea name="text_content" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <textarea name="sub_text_content" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Is Mobile</label>
                        <input type="checkbox" name="is_mobile" value="1">
                    </div>

                    {{-- <div class="mb-3">
                        <label class="form-label">Banner Link</label>
                        <input type="text" name="banner_link" class="form-control">
                    </div> --}}

                    <div class="mb-3">
                        <label class="form-label">Display Order</label>
                        <input type="number" name="display_order" class="form-control" value="0">
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')
