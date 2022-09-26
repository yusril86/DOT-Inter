@extends('layouts.admin.dashboard')



    @section('content')
        <section class="section">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('profile.create') }}" class="btn btn-primary btn-sm shadow-sm ">
                    <i class="fas fa-plus"></i>
                    <span>Tambah</span>
                </a>
            </div>     
            
            {{-- Jika Tidak ada data akan menampilkan sebuah Text belum ada data --}}
            @if ($users->isEmpty())
                <p style="text-align: center; margin-top: 10%">Belum ada data</p>
            @else
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List Admin profile</h5>
                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table
                            class="table table-hover align-middle table-nowrap mb-4 rounded  table-borderless">
                            <thead>
                                <tr class="bg-secondary bg-opacity-25">                                   
                                                                        
                                    <th>Nama</th>
                                    <th>email</th>                                    
                                                                     
                                   {{--  <th style="border-top-right-radius: 10px; border-bottom-right-radius: 10px">
                                        Aksi
                                    </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>                                        
                                                                                                                    
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                       
                                        {{-- <td>
                                            <a href="{{route('profile.edit',$user->id)}}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{route('profile.destroy', $user->id)}}" method="POST"
                                                class="d-inline" >
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" onclick="return confirm('Yakin Hapus Data')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>        
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table with stripped rows -->
                </div>                
            </div>
            @endif
        </section>
    @endsection
