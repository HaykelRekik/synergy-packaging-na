@extends('layouts.app')

@section('title')

    Modifier la référence

@endsection

@section('content')

    <section class="section">

        <div class="section-header">

            <h3 class="page__heading m-0">Modifier la référence</h3>

            <div class="filter-container section-header-breadcrumb row justify-content-md-end">

                <a href="{{ route('admin.references.index') }}" class="btn btn-primary">Retour</a>

            </div>

        </div>

        <div class="content">

            @include('coreui-templates::common.errors')

            <div class="section-body">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="card">

                            <div class="card-body ">

                                {!! Form::model($reference, ['route' => ['admin.references.update', $reference->id], 'method' => 'patch', 'files' => true]) !!}

                                <div class="row">

                                    @include('admin.references.fields')

                                </div>



                                {!! Form::close() !!}

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection

