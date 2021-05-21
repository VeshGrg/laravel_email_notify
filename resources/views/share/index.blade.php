@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row text-center">
            <span class="col-md-12 text-right"><a href="{{ route('landing') }}">Go Back</a></span>
            <div class="col-md-12"><h3>Share Details</h3></div>
            <div class="col-md-12">
                <table class="text-center">
                    <thead class="table table-striped">
                        <th>S.No.</th>
                        <th>Company Type</th>
                        <th>Name of Company</th>
                        <th>No. Of Share</th>
                        <th>Amount of Share</th>
                        <th>Shareholder</th>
                        <th>Action</th>
                    </thead>

                    @php
                        $i = 0;
                    @endphp

                    @foreach($shares as $share_detail )
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $share_detail->company_type}}</td>
                            <td>{{ $share_detail->name_of_company }}</td>
                            <td>{{ $share_detail->share_no }}</td>
                            <td>{{ $share_detail->amt }}</td>
                            <td>{{ $share_detail->user_id }}</td>
                            <td><a href="{{ route('shares.show', $share_detail) }}">View</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
