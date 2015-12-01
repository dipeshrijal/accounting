@extends('admin.layouts.main')

@section('content')

<section id="main" role="main">

    @include('admin.layouts.partials.left-sidebar')

    @include('admin.layouts.partials.right-sidebar')

    <!-- Content -->
    <section id="content" class="container">
        <header class="p-header">
            <h2 class="p-title">Add Expenditure</h2>

        </header>
        <!-- Required Feilds -->
        <div class="c-block" id="required">
            <h3 class="block-title">Required Feilds *</h3>
            {!! Form::open(['route' => 'admin.expenditures.store' , 'class' => 'form-validation-1-1', 'role' => 'form', 'files' => true]) !!}
                @include('admin.expenditures.partials.forms', ['value' => 'Submit'])
                {{-- <button class="btn btn-info btn-xs validation-clear">CLOSE PROMPTS</button> --}}
            {!! Form::close() !!}
        </div>

        <div class="divider"></div>

    </section>
</section>


@stop
