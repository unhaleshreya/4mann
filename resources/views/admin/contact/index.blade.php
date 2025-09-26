@include('admin.header')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

      <div class="card mt-4">
                <div class="card-header">
                    <strong>Contacts</strong>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="contactTable">
                        <thead>
                            <tr>
                                <th>sr.no.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company Name</th>
                                <th>Customer Type</th>
                                <th>Message</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($contact as $index => $con)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $con->fname }}</td>
                                    <td>{{ $con->lname }}</td>
                                    <td>{{ $con->email }}</td>
                                    <td>{{ $con->phone }}</td>
                                    <td>{{ $con->company_name}}</td>
                                    <td>{{ $con->who_we_serve}}</td>
                                    <td>{{ $con->message}}</td>

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
        $('#contactTable').DataTable({
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
