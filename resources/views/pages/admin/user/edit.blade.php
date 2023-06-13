@extends('layouts.parent')

@section('content')
<div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {!! \Session::get('success') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-octagon me-1"></i>
                {!! \Session::get('error') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                Edit Role User
            </h5>

            <table class="table table-striped table-bordered">
                 <tr>
                    <th>Status</th>
                    <td>
                        <form action="{{ route('dashboard.user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="input-group mb-3">
                                <select class="form-select" name="roles" id="role">
                                    <option value="USER">
                                        USER</option>
                                    <option value="ADMIN">
                                        ADMIN</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </td>
                 </tr>
            </table>
        </div>
    </div>
</div>
@endsection