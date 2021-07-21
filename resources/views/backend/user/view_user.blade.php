@extends('admin.admin_master')
@section('admin')


    <div class="col-md-12">
        <div class="card">

            <div class="card-header card-header-primary">
                <h4 class="card-title "><b>Active Users</b></h4>
            </div>

            <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="{{ route('users.add') }}">Add
                    User</a></button>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th width="5%">SL</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th width="25%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $user)
                              <tr>
                                  <th>{{ $key + 1 }}</th>
                                  <th>{{ $user->usertype }}</th>
                                  <th>{{ $user->name }}</th>
                                  <th>{{ $user->email }}</th>
                                  <td>
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="btn btn-outline-info">Edit</a>
                                    <a href="{{ route('users.delete', $user->id) }}" class="btn btn-outline-danger"
                                        id="delete">Delete</a>
                                  </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
