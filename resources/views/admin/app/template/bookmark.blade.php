<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Bookmarks
    </h1>
</div>

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bookmarks DataTables</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>User ID</th>
                        <th>Word</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>User ID</th>
                        <th>Word</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item['id_user'] }}</td>
                            <td>{{ $item['word'] }}</td>
                            <td><form action="/admin/bookmarks/delete/{{ $item['id'] }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button></form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
