@if (strlen($item->title) >= 47 && strlen($item->title) <= 67)
<h2 class="widget-user-desc text-center" style="margin-top: 175px; font-size:14px;">{!!wordwrap($item->title, 22,'<br/>')!!}</h2>
@elseif(strlen($item->title) > 67)
<h2 class="widget-user-desc text-center" style="margin-top: 160px; font-size:14px;">{!!wordwrap($item->title, 22,'<br/>')!!}</h2>
@else
<h2 class="widget-user-desc text-center" style="margin-top: 190px; font-size:14px;">{!!wordwrap($item->title, 25,'<br/>')!!}</h2>
@endif