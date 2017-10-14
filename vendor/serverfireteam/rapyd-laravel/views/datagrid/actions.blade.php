@if (in_array("show", $actions))
    <a class="btn btn-success btn-sm" title="@lang('rapyd::rapyd.show')" href="{!! url('panel/'.$current_entity.'/'.$uri) !!}?show={!! $id !!}"><span class="glyphicon glyphicon-list"> </span></a>
@endif
@if (in_array("modify", $actions))
    <a class="btn btn-default btn-sm" title="@lang('rapyd::rapyd.modify')" href="{!! url('panel/'.$current_entity.'/'.$uri) !!}?modify={!! $id !!}"><span class="fa fa-edit"> </span></a>
@endif
@if (in_array("delete", $actions))
    <a class="text-danger btn btn-danger btn-sm" title="@lang('rapyd::rapyd.delete')" href="{!! url('panel/'.$current_entity.'/'.$uri) !!}?delete={!! $id !!}"><span class="glyphicon glyphicon-trash"> </span></a>
@endif
