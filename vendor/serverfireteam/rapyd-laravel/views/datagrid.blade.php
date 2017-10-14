<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript">
    $(function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    });
</script>
<div class="pull-right">
    @if ($current_entity != 'Page')
        <a href="{!! url('panel/'.$current_entity.'/edit') !!}" class="btn btn-primary">{{ trans('rapyd::rapyd.add') }}</a>
    @endif
</div>

<div class="rpd-datagrid">
    @include('rapyd::toolbar', array('label'=>$label, 'buttons_right'=>$buttons['TR']))


    <table{!! $dg->buildAttributes() !!}>
        <thead>
        <tr>
            @foreach ($dg->columns as $column)
                <th{!! $column->buildAttributes() !!}>
                    @if ($column->orderby)
                        @if ($dg->onOrderby($column->orderby_field, 'asc'))
                            <span class="glyphicon glyphicon-chevron-up"></span>
                        @else
                            <a href="{{ $dg->orderbyLink($column->orderby_field,'asc') }}">
                                <span class="glyphicon glyphicon-chevron-up"></span>
                            </a>
                        @endif
                        @if ($dg->onOrderby($column->orderby_field, 'desc'))
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        @else
                            <a href="{{ $dg->orderbyLink($column->orderby_field,'desc') }}">
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                        @endif
                    @endif
                    {!! $column->label !!}
                </th>
            @endforeach
        </tr>
        </thead>
        @if ($dg->isDragDrop())
            <tbody id="sortable">
        @else
            <tbody>
        @endif
        @if (count($dg->rows) == 0)
            <tr><td colspan="{!! count($dg->columns) !!}">{!! trans('rapyd::rapyd.no_records') !!}</td></tr>
        @endif
        <?php $count = (!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page']==1))?0:10;?>
        @foreach ($dg->rows as $row)
            <tr{!! $row->buildAttributes() !!} data-value="{{$count}}">
                @foreach ($row->cells as $cell)
                    <td{!! $cell->buildAttributes() !!}>{!! $cell->value !!}</td>
                @endforeach
            </tr>
        <?php $count++;?>
        @endforeach
        </tbody>
    </table>

    <div class="btn-toolbar" role="toolbar">
        @if ($dg->havePagination())
            <div class="pull-left">
                {!! $dg->links() !!}
            </div>
            <div class="badge pull-right">
                {!! $dg->totalRows() !!}
            </div>
        @endif
    </div>
</div>
<script type="text/javascript">
    $('#sortable tr').on('mouseup', function() {
        var URL_ROOT = window.location.origin;
        var old_index = $('.ui-sortable-handle').index($(this));
        var new_index = "";
        var model = '{{$current_entity}}';
        var arr = [];
        var el = $(this);

        setTimeout( function() {
            new_index = $('.ui-sortable-handle').index(el);
            if (new_index != old_index && (old_index - new_index != 1)) {
                $('#sortable tr').each(function() {
                    arr.push($(this).data('value'));
                });
                $.post(
                URL_ROOT + '/order',
                {
                    old_index: old_index,
                    new_index: new_index,
                    arr: arr,
                    model: model,
                    paginateCount: {{$count}},
                    _token: "<?php echo csrf_token(); ?>",
                }
                )
                .done(function(data) {
                    location.reload();
                });
            }
        }, 0);
    });
</script>

