@props(['value'])
<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <textarea id="myeditorinstance" name="body">{{ $value ?? $slot }}</textarea>
</div>