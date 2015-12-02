@extends('admin.layouts.main')
@section('content')
<section id="main" role="main">
    @include('admin.layouts.partials.left-sidebar')
    @include('admin.layouts.partials.right-sidebar')
    <!-- Content -->
    <section id="content" class="container">
        <header class="p-header">
            <h2 class="p-title">View Expenditures</h2>
            <h2 class="p-title pull-right">Total Income:: {{ $totalIncome }}</h2><br>
            <h2 class="p-title pull-right">Total Expenditures:: {{ $totalExpenditure }}</h2><br>
            <h2 class="p-title pull-right">Remaining Balance:: {{ $remainingBalance }}</h2>
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