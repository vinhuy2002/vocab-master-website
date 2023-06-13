<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Lesson</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block">Lesson Manager</h6>
        <button type="button" class="btn btn-primary" style="display: inline-block; float: right;" data-toggle="modal"
            data-target="#addForm">Add more lesson</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="addFormLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addForm">Add Lesson</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('addNewLesson') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-floating">
                            <label for="lessonName">Lesson Name</label>
                            <input class="form-control" id="lessonName" name="lessonName" type="text" />
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
                        <th>Lesson Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Lesson Name</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item['name_exercise'] }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" style="display: inline-block"
                                    data-toggle="modal" name_exercise={{ $item['name_exercise'] }} data-target="#updateFormLesson" id="updateForm">Update</button>
                                @php
                                    $id = $item['id'];
                                    $name = $item['name_exercise'];
                                @endphp

                                <div class="modal fade" tabindex="-1" id="updateFormLesson" role="dialog"
                                    aria-labelledby="updateFormLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateFormLabel">Update Lesson</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form method="POST" action="/admin/lesson/update/{{ $item['id'] }}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-floating">
                                                        <label for="lessonName">Lesson New Name</label>
                                                        <input class="form-control" id="lessonNewName" name="lessonNewName"
                                                            type="text" value="{{ $item['name_exercise'] }}" />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Change</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <form action="/admin/lesson/delete/{{ $item['id'] }}" method="GET"
                                    style="display: inline-block">
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


<script>

</script>
