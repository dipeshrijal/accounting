@extends('admin.layouts.main')
@section('content')
<section id="main" role="main">
    @include('admin.layouts.partials.left-sidebar')
    @include('admin.layouts.partials.right-sidebar')
    <!-- Content -->
    <section id="content" class="container">
        <header class="p-header">
            <h2 class="p-title">View Expenditures</h2>
            <div style="width:100%" class="pull-right">
                <h3 class="p-title">Total Income:: {{ $totalIncome }}</h3>
            </div>
            <div style="width:100%" class="pull-right">
                <h3 class="p-title">Total Expenditures:: {{ $totalExpenditure }}</h3>
            </div>
            <div style="width:100%" class="pull-right">
                <h3 class="p-title">Remaining Balance:: {{ $remainingBalance }}</h3>
            </div>         
        </header>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="example">
                <thead>
                    <tr>
                        <th>Expenditure Name</th>
                        <th>Expenditure Amount</th>
                        <th>Expenditure Description</th>
                        <th width="1%">Edit</th>
                        <th width="1%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($expenditures as $expenditure)
                        <tr>
                            <td>{{ e($expenditure->expenditure_source) }}</td>
                            <td>{{ e($expenditure->expenditure_amount) }}</td>
                            <td>{{ e($expenditure->expenditure_description) }}</td>
                            <td>{!! link_to_route('admin.expenditures.edit', 'Edit', $expenditure->id) !!}</td>
                            <td>Delete</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @include('admin.layouts.partials.delete_partials')
        </div>
    </section>
</section>
@stop
@section('footer')
@stop