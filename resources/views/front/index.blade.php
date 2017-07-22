@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">WELCOME GUEST!</div>

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
                    <form method="POST" action="{{ route('guest.post') }}">
                        {{ csrf_field () }}
                        <div class="form-group">
                            <label for="guest_name">Name:</label>
                            <input name="guest_name" type="text" class="form-control" id="guest_name">
                        </div>
                        <div class="form-group">
                            <label for="guest_address">Address:</label>
                            <input name="guest_address" type="text" class="form-control" id="guest_address">
                        </div>
                        <div class="form-group">
                            <label for="guest_phone">Phone:</label>
                            <input name="guest_phone" type="text" class="form-control" id="guest_phone">
                        </div>
                        <div class="form-group">
                            <label for="guest_note">Note:</label>
                            <textarea name="guest_note" class="form-control" id="guest_note"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">LIST OF GUESTS!</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach($data as $key)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $key->guest_name }}</td>
                                        <td>{{ $key->guest_note }}</td>
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
