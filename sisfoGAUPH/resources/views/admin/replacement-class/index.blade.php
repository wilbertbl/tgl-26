@extends('layouts.app')
@section('title', 'Replacement Class')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="">
                <div class="card">
                    <div class="card-header">Replacement-class</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/replacement-class/create') }}" class="btn btn-success btn-sm" title="Add New replacement-class">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/replacement-class') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Lengkap</th>
                                        <th>Mata Kuliah</th>
                                        <th>Kelas</th>
                                        <th>Jadwal Kuliah</th>
                                        <th>Jam Kuliah</th>
                                        <th>Jadwal Replacement</th>
                                        <th>Jam Replacement</th>
                                        <th>Alasan</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($replacementclass as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>{{ $item->mata_kuliah }}</td>
                                        <td>{{ $item->kelas }}</td>
                                        <td>{{ $item->jadwal_kuliah }}</td>
                                        <td>{{ $item->jam_kuliah }}</td>
                                        <td>{{ $item->tanggal_replacement }}</td>
                                        <td>{{ $item->jam_replacement }}</td>
                                        <td>{{ $item->alasan }}</td>
                                        <td>
                                            <a href="{{ url('/admin/replacement-class/' . $item->id) }}" title="View replacement-class"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/replacement-class/' . $item->id . '/edit') }}" title="Edit replacement-class"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/replacement-class' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete replacement-class" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $replacementclass->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
