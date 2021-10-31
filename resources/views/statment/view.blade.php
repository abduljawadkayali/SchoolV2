@extends('layout.Muhasib')

@section('header')

@endsection
@section('content')
    <div >
        <a href="{{ URL::previous() }}" class="btn btn-default">@lang("Back")</a>
    </div>
    <div class="container-fluid">
        <br>
        <br>
        <table class="table table-bordered table-striped">
            <tr>
                <th>@lang("المبلغ الكامل")</th>
                <th>@lang("الدفعات")</th>
                <th>@lang("الباقي")</th>
            </tr>
            <tr>
                <td>{{ $feeSum }}</td>
                <td>{{ $PaymentSum }}</td>
                <td>{{ $feeSum - $PaymentSum }}</td>
            </tr>

        </table>
        <br>
        <hr>
        <div class="row">
        <div class="col-6">

        <table class="table table-bordered table-striped">
            <tr>
                <th>@lang("fee")</th>
                <th>@lang("paymentDate")</th>
            </tr>
            @foreach($fee as $row)
                <tr>
                    <td>{{ $row->fee }}</td>
                    <td>{{ $row->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach

        </table>
    </div>
            <div class="col-6">

                <table class="table table-bordered table-striped">
                    <tr>
                        <th>@lang("payment")</th>
                        <th>@lang("paymentDate")</th>
                    </tr>
                    @foreach($payment as $row)
                        <tr>
                            <td>{{ $row->payment }}</td>
                            <td>{{ $row->created_at->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach

                </table>
            </div>

    </div>

@endsection

