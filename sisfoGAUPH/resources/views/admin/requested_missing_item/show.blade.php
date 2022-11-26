@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">requested_missing_item {{ $requested_missing_item->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/requested_missing_item') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/requested_missing_item/' . $requested_missing_item->id . '/edit') }}" title="Edit requested_missing_item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/requested_missing_item' . '/' . $requested_missing_item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete requested_missing_item" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $requested_missing_item->id }}</td>
                                    </tr>
                                    <tr><th> Missing Item Id </th><td> {{ $requested_missing_item->missing_item_id }} </td></tr><tr><th> User Id </th><td> {{ $requested_missing_item->user_id }} </td></tr><tr><th> Missing Item Status Id </th><td> {{ $requested_missing_item->missing_item_status_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
