@if (strlen($item->title) >= 47 && strlen($item->title) <= 67) <h2 class="widget-user-desc text-center"
    style="margin-top: 6rem; font-size:13px;">{!!wordwrap($item->title, 22,'<br />')!!}</h2>
    @elseif(strlen($item->title) > 67)
    <h2 class="widget-user-desc text-center" style="margin-top: 6rem; font-size:13px;">{!!wordwrap($item->title,
        22,'<br />')!!}</h2>
    @else
    <h2 class="widget-user-desc text-center" style="margin-top: 6rem; font-size:13px;">{!!wordwrap($item->title,
        18,'<br />')!!}</h2>
    @endif