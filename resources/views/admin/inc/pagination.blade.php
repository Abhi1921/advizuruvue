<div class="pagination pull-right" style="float:right">
    {{-- {!!$result->links()!!} --}}
    @if(count($result))
    {!!$result->links('admin.inc.paginator')!!}
    @endif
</div>