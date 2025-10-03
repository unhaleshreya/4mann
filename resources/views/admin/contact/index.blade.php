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
                    <table class="table table-bordered table-striped" id="example1">
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
@include('admin.footer')
