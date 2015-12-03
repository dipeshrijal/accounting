@extends('admin.layouts.main')
@section('content')
<section id="main" role="main">
    @include('admin.layouts.partials.left-sidebar')
    @include('admin.layouts.partials.right-sidebar')
    <!-- Content -->
    <section id="content" class="container">
        <header class="p-header">
            <h2 class="p-title">View Income</h2> 
            <h2 class="pull-right">Total Income:: {{ $totalIncome }} </h2>
        </header>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="example">
                <thead>
                    <tr>
                        <th>Income Source</th>
                        <th>Income Amount</th>
                        <th>Income Description</th>
                        <th width="1%">Edit</th>
                        <th width="1%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($incomes as $income)
                        <tr>
                        <td>{{ e($income->category->category_name) }}</td>
                        <td>{{ e($income->income_amount) }}</td>
                        <td>{{ e($income->income_description) }}</td>
                        <td>{!! link_to_route('admin.incomes.edit', 'Edit', $income->id) !!}</td>
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