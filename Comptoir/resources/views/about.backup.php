




<label class="grid_16">
    <span class="label grid_5">Type de prestations recherchées pour du matériel</span>
    <ul class="grid_8">
        @foreach($accessoires as $value => $front)
        <li>
            <label>
                {!! Form::checkbox('accessoires[]', $value) !!}
                {{ $front }}
            </label>
        </li>
        @endforeach
    </ul>
</label>