@extends('layouts.app_sneat')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Data User</h5>
            <div class="card-body">
                <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Akses</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->nohp }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->akses }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="#" onclick="deleteUser()" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                        <form id="deleteUser" action="{{ route('user.destroy', $user->id) }}" method="POST">
                                            @method("DELETE")
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Data Tidak ada</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    function deleteUser() {
        if(confirm('Yakin ingin dihapus?')) {
            document.querySelector('#deleteUser').submit();
        }
    }
</script>
@endpush
