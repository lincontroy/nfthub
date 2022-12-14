@extends('layouts.main')

@section('content')


<div class="rn-upcoming-area rn-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- start Table Title -->
                <div class="table-title-area d-flex">
                    <i data-feather="briefcase"></i>
                    <h3>User withdrawals</h3>
                </div>
                <!-- End Table Title -->

                <!-- table area Start -->
                <div class="box-table table-responsive">
                    <table class="table upcoming-projects">
                        <thead>
                            <tr>
                                <th>
                                    <span>SL</span>
                                </th>

                                <th>
                                    <span>amount</span>
                                </th>
                                <th>
                                    <span>Status</span>
                                </th>
                                <th>
                                    <span>Created At</span>
                                </th>
                                <th>
                                    <span>Updated At</span>
                                </th>



                            </tr>
                        </thead>
                        <tbody class="ranking">

                            @foreach($withdrawals as $withdrawal)
                            <tr class="color-light">
                                <td><span>{{$withdrawal->id}}</span></td>


                                <td><span>{{$withdrawal->amount}}</span></td>



                                @if(($withdrawal->status)==0)

                                <td><span class="color-danger">Pending</span></td>
                                @elseif(($withdrawal->status)==1)
                                <td><span class="color-green">Credited</span></td>
                                @else
                                <td><span class="color-danger">Canceled</span></td>
                                @endif
                                <td><span>{{$withdrawal->created_at}}</span></td>
                                <td><span>{{$withdrawal->updated_at}}</span></td>



                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection