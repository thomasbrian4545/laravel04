@props([
    "label",
    "field"
])

<div>
<span style="color: red">{{ $label }}</span> =
<input name={{ $field }} type="text"  /> <br>
</div>
