@include('admin.header')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <div class="card mt-4">
                <div class="card-header">
                    <strong>Submitted Applications</strong>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>sr.no.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Attachment</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($careers as $index => $career)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $career->first_name }}</td>
                                    <td>{{ $career->last_name }}</td>
                                    <td>{{ $career->email }}</td>
                                    <td>{{ $career->phone }}</td>
                                    <td>{{ $career->message ?? '-' }}</td>
                                    <td>
                                        @if($career->resume_path)
                                            <a href="{{ asset('storage/' . $career->attachment) }}" target="_blank" class="btn btn-sm btn-info">
                                                View File
                                            </a>
                                        @else
                                            <span class="text-muted">No File</span>
                                        @endif
                                    </td>
                                   
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center text-muted">No applications submitted yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                  

                </div>
            </div>

        </div>
    </div>
</div>
