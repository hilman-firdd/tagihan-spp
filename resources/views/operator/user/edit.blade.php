@extends('layouts.app_sneat')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Edit User</h5>
            <div class="card-body">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" autofocus>
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" autofocus>
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="nohp">No HP</label>
                        <input type="text" name="nohp" class="form-control" value="{{ $user->nohp }}" autofocus>
                        <span class="text-danger">{{ $errors->first('nohp') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="akses">Hak Akses</label>
                        <select name="akses" id="" class="form-control">
                            <option value="operator" {{  ($user->akses == 'operator' ? 'selected' : '')  }}">Operator</option>
                            <option value="admin" {{  ($user->akses == 'admin' ? 'selected' : '') }}>Admin</option>
                        </select>
                        <span class="text-danger">{{ $errors->first('akses') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" autofocus>
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
