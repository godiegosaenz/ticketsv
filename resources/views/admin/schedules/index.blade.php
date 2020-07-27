@extends('layouts.admin')
@section('content')
@can('schedule_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.schedules.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.schedule.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.schedule.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Schedule">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.schedule.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.schedule.fields.date') }}
                    </th>
                    <th>
                        {{ trans('cruds.schedule.fields.start_time') }}
                    </th>
                    <th>
                        {{ trans('cruds.schedule.fields.end_time') }}
                    </th>
                    <th>
                        {{ trans('cruds.schedule.fields.status') }}
                    </th>
                    <th>
                        {{ trans('cruds.schedule.fields.observation') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>

</script>
@endsection