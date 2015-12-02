@extends('admin.layouts.main')
@section('content')
<section id="main" role="main">
    @include('admin.layouts.partials.left-sidebar')
    @include('admin.layouts.partials.right-sidebar')
    <!-- Content -->
    <section id="content" class="container">
        <header class="p-header">
            <h2 class="p-title">View Expenditures</h2>
        </header>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="example">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th width="1%">Edit</th>
                        <th width="1%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ e($category->category_name) }}</td>
                            <td>{{ e($category->category_description) }}</td>
                            <td>{!! link_to_route('admin.categories.edit', 'Edit', $category->id) !!}</td>
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