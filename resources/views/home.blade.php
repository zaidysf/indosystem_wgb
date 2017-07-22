@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">LIST OF GUESTS!</div>

                <div class="panel-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ( Session::has ('success') ) 
                        <div class="alert alert-success alert-fill alert-close alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <b>SUCCESS: </b>{!! Session::get ( 'success' ) !!}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Note</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach($data as $key)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $key->guest_name }}</td>
                                        <td>{{ $key->guest_note }}</td>
                                        <td>
                                            <form action="{{ route('guest.delete', ['id' => $key->guest_id]) }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE" >
                                                <input type="submit" value="delete " >
                                            </form>
                                        </td>
                                    </tr>
                                    @php $i++ @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
