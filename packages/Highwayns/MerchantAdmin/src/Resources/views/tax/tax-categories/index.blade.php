@extends('agentadmin::layouts.content')

@section('page_title')
    {{ __('admin::app.settings.tax-categories.title') }}
@stop

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('admin::app.settings.tax-categories.title') }}</h1>
            </div>

            <div class="page-action">
                <a href="{{ route('agentadmin.tax-categories.show') }}" class="btn btn-lg btn-primary">
                    {{ __('admin::app.settings.tax-categories.add-title') }}
                </a>
            </div>
        </div>

        <div class="page-content">
            @inject('taxCategories','Highwayns\AgentAdmin\DataGrids\TaxCategoryDataGrid')
            {!! $taxCategories->render() !!}
        </div>
    </div>
@stop