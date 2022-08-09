<div>
    <input wire:model="search" name="search" type="text" list="mylist" class="form-control w-100" placeholder="Search for Products">

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}} </option>
            @endforeach
        </datalist>
    @endif
</div>
