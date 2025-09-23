@include('admin.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="container mt-4">
                <h2>Edit Banner</h2>
                <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Image</label><br>
                        <img src="{{ asset('storage/'.$banner->image_path) }}" width="100" class="mb-2"><br>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <textarea name="text_content" class="form-control">{{ $banner->text_content }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <textarea name="sub_text_content" class="form-control">{{ $banner->sub_text_content }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Is Mobile</label>
                        <input type="checkbox" name="is_mobile" value="1" {{ $banner->is_mobile ? 'checked' : '' }}>
                    </div>

                    {{-- <div class="mb-3">
                        <label class="form-label">Banner Link</label>
                        <input type="text" name="banner_link" class="form-control" value="{{ $banner->banner_link }}">
                    </div> --}}

                    <div class="mb-3">
                        <label class="form-label">Display Order</label>
                        <input type="number" name="display_order" class="form-control" value="{{ $banner->display_order }}">
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')
