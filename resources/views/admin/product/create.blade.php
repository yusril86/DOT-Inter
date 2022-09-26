@extends('layouts.admin.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card border shadow">
                <div class="card-body pt-5">
                        <form id="form-create" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-8 col-lg-6 offset-lg-3 offset-md-2">

                               


                                 <!-- Form -->
                        <div class=" row mb-3">
                            <label class="col-xl-4 col-form-label" for="nama_pemilik">Nama Produk</label>
                            <div class="col-xl-8">
                                <div class="input-group is-invalid">
                                    <input type="text"
                                        class="form-control @error('nama_produk') border-danger @enderror"
                                        id="nama_produk" placeholder="Nama Produk" aria-label="nama_produk"
                                        name="nama_produk" value="{{ old('nama_produk') }}" required>
                                    @error('nama_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- End of Form -->

                        

                        <!-- Form -->
                        @if (Auth::user()->roles == 'Admin')
                            
                        <div class=" row mb-3">
                        
                                <label class="col-xl-4 col-form-label" for="user_id">{{ __('User') }}</label>
                                <div class="col-xl-8">
                                    <select class="form-select" name="user_id" id="user_id">
                                        @foreach($users as $user => $id  )
                                            <option value="{{ $id }}">{{ $user }}</option>
                                        @endforeach                                    
                                    </select>
                                </div>
                            
                        </div>
                        @endif
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class=" row mb-3">
                            <label class="col-xl-4 col-form-label" for="tanggal">Tanggal</label>
                            <div class="col-xl-8">
                                <div class=" is-invalid">
                                    <input class="form-control" type="date" name="tanggal" id="tanggal"
                                        value="{{ old('tanggal',date('Y-m-d')) }}">
                                    @error('tanggal')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- End of Form -->

                        

                        


                        <!-- Form -->
                        <div class=" row mb-3">
                            <label class="col-xl-4 col-form-label" for="harga">harga</label>
                            <div class="col-xl-8">
                                <div class="input-group is-invalid">
                                    <input type="text" class="form-control @error('harga') border-danger @enderror"
                                        id="harga" placeholder="harga" aria-label="harga" name="harga"
                                        value="{{ old('harga') }}" required>
                                    @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- End of Form -->
                                                               

                                <div class="form-group row">
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    
    
@endsection