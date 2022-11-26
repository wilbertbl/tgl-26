@extends('layouts.app')
@section('title', 'Replacement Class')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">replacement-class {{ $replacementclass->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/replacement-class') }}" title="Back"><button
                                class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Back</button></a>
                        <a href="{{ url('/admin/replacement-class/' . $replacementclass->id . '/edit') }}"
                            title="Edit replacement-class"><button class="btn btn-primary btn-sm"><i
                                    class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/replacement-class' . '/' . $replacementclass->id) }}"
                            accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete replacement-class"
                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                    aria-hidden="true"></i> Delete</button>
                        </form>

                        <a href="{{ url('/admin/laporan/replacement/pdf') }}" target="_blank"><button
                                class="btn btn-secondary btn-sm"> Print</button></a>

                        <br />
                        <br />

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $replacementclass->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nama Lengkap </th>
                                        <td> {{ $replacementclass->nama_lengkap }} </td>
                                    </tr>
                                    <tr>
                                        <th> Mata Kuliah </th>
                                        <td> {{ $replacementclass->mata_kuliah }} </td>
                                    </tr>
                                    <tr>
                                        <th> Kelas </th>
                                        <td> {{ $replacementclass->kelas }} </td>
                                    </tr>
                                    <tr>
                                        <th> Jadwal Kuliah </th>
                                        <td> {{ $replacementclass->jadwal_kuliah }} </td>
                                    </tr>
                                    <tr>
                                        <th> Jam Kuliah </th>
                                        <td> {{ $replacementclass->jam_kuliah }} </td>
                                    </tr>
                                    <tr>
                                        <th> Jadwal Replacement </th>
                                        <td> {{ $replacementclass->tanggal_replacement }} </td>
                                    </tr>
                                    <tr>
                                        <th> Jam Replacement</th>
                                        <td> {{ $replacementclass->jam_replacement }} </td>
                                    </tr>
                                    <tr>
                                        <th> Alasan </th>
                                        <td> {{ $replacementclass->alasan }} </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
