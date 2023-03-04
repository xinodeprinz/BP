@extends('layouts.account')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Available Ads</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($ads as $id => $ad)
                                <tr>
                                    <td>{{ ++$id }}</td>
                                    <td>{{ $ad->title }}</td>
                                    <td>{{ Carbon\Carbon::parse($ad->created_at)->format('d/m/Y') }}</td>
                                    <td>
                                        <form action="{{ route('ad.delete', ['id' => $ad->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
