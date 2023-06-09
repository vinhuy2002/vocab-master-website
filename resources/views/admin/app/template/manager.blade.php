<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manager Account</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">Account Manager</h6>
        <button type="button" class="btn btn-primary" style="display: inline-block; float: right;" data-toggle="modal"
            data-target="#addForm">Add new user</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="addFormLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addForm">Add user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('adminAddUser') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-floating">
                            <label for="name">Name</label>
                            <input class="form-control" id="name" name="name" type="text" />
                        </div>
                        <div class="form-floating">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" />
                        </div>
                        <div class="form-floating">
                            <label for="password">Password</label>
                            <input class="form-control" id="password" name="password" type="password" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['email'] }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" style="display: inline-block"
                                    data-toggle="modal" data-target="#updateForm">Update</button>
                                <div class="modal fade" id="updateForm" tabindex="-1" role="dialog"
                                    aria-labelledby="updateFormLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addForm">Update user</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="POST" action="/admin/manager/update/{{ $item['id'] }}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-floating">
                                                        <label for="name">Name</label>
                                                        <input class="form-control" id="name" name="name" type="text" value="{{ $item['name'] }}"/>
                                                    </div>
                                                    <div class="form-floating">
                                                        <label for="email">Email</label>
                                                        <input class="form-control" id="email" name="email" type="email" value="{{ $item['email'] }}" />
                                                    </div>
                                                    <div class="form-floating">
                                                        <label for="password">Password</label>
                                                        <input class="form-control" id="password" name="password" type="password" />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Add</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <form action="/admin/manager/delete/{{ $item['id'] }}" method="GET" style="display: inline-block">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
