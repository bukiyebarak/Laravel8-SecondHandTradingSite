@foreach($children as $subcategory)
    <ul class="">
        @if(count($subcategory->children))
            <li >{{ $subcategory->title}} </li>
                @include('home.categorytree',['children' => $subcategory->children])
            <hr>
        @else
            <li><a href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}"> {{$subcategory->title}} </a></li>
        @endif
    </ul>
@endforeach
