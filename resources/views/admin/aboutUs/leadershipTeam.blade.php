@include('admin.header')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <h3 class="mb-3">Leadership Team</h3>

            <!-- Edit Form -->
            <div class="card">
                <div class="card-header bg-primary text-white">Edit Leadership Content</div>
                <div class="card-body">
                    <form id="leaderForm" method="POST">
                        @csrf

                        <input type="hidden" name="leader_id" id="leader_id">

                        <!-- Name -->
                        <div class="form-group mb-3">
                            <label>Leader Name</label>
                            <input type="text" id="leader_name" class="form-control" readonly>
                        </div>

                        <!-- Position -->
                        <div class="form-group mb-3">
                            <label>Position</label>
                            <input type="text" id="leader_position" class="form-control" readonly>
                        </div>

                        <!-- Content 1 -->
                        <div class="form-group mb-3">
                            <label>Content</label>
                            <textarea name="content1" id="summernote" class="form-control" rows="4"></textarea>
                        </div>

                        {{-- <input type="hidden" name="leader_id" id="leader_id"> --}}

                        <button type="submit" id="updateLeaderBtn" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>

            <!-- Leaders List -->
            <div class="card mt-4">
                <div class="card-header"><strong>Leadership Team Members</strong></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($leaders as $leader)
                                <tr>
                                    <td>{{ $leader->name }}</td>
                                    <td>{{ $leader->position }}</td>
                                    <td>{!! html_entity_decode($leader->content1) !!}</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary editLeaderBtn" data-id="{{ $leader->id }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if($leaders->isEmpty())
                        <p class="text-muted">No leaders added yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')

<script>
$(document).on("click", ".editLeaderBtn", function () {
    let id = $(this).data("id");

    $.ajax({
        url: "{{ route('leadership.edit', ':id') }}".replace(':id', id),
        type: "GET",
        success: function (response) {
            $("#leader_id").val(response.id);
            $("#leader_name").val(response.name);
            $("#leader_position").val(response.position);
            $('#summernote').summernote('code', response.content1);
           
            // Update form action
            $("#leaderForm").attr("action",  "{{ route('leadership.update') }}");

            // Scroll to form
            $('html, body').animate({
                scrollTop: $("#leaderForm").offset().top - 20
            }, 600);
        }
    });
});
</script>
