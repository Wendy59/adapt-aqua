<!doctype html>
@extends('layouts.admin.base')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                </div>
            </div>

            @include('admin.index_resume')
        </section>
    </section>
@endsection


@push('script')
<!--ici les script js-->
@endpush