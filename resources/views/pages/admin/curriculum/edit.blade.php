@extends('layouts.admin.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Kurikulum</strong>
            <small>{{ $kurikulum->title }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('kurikulums.update', $kurikulum->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="information" class="form-control-label">Isi</label>
                    <textarea name="information"
                            required
                            class="ckeditor form-control @error('information') is-invalid @enderror">{{ old('information') ? old('information') : $kurikulum->information }}</textarea>
                    @error('information') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Kurikulum
                    </button>
                    <a href="{{ route('kurikulums.index') }}" class="btn btn-danger btn-block">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection