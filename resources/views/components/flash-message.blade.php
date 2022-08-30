@if (session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"class="fixed top-8 left-1/2 transform -translate-x-1/2 bg-blue-500 text-white px-20 py-3 rounded">
    <p>
      {{session('message')}}
    </p>
</div>
@endif