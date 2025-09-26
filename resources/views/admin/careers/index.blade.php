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
                    <table class="table table-bordered table-striped" id="careersTable">
                        <thead>
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
                                           <a href="{{ asset('storage/' . $career->attachment) }}"
                                             target="_blank">View File</a>
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
        $('#careersTable').DataTable({
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
