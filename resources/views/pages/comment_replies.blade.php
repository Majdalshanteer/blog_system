@foreach($children as $subcategory)
 <ul>
    <li>{{$subcategory->name}}</li> 
    @if ($subcategory->subcategory)

    @include('comment_replies',['subcategories' => $subcategory->subcategory])
  @endif
 </ul> 
@endforeach