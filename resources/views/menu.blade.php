<li>
    @foreach($items as $menu_item)
        @if($loop->first)
            <span class="opener">{{ $menu_item->title }}</span>
            <ul>   
        @else
            @if(!$menu_item->parent_id)
                </ul>
            @endif 
            <li><a href="{{ url($menu_item->url) }}">{{ $menu_item->title }}</a></li>
        @endif
    @endforeach

