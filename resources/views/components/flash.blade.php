@if (session()->has('success'))

{{-- FLASH MESSAGING WHEN USER CREATES ACCOUNT --}}
<div x-data="{show:true}"
x-init="setTimeout(() =>show=false,4000)"
x-show="show"
 class="fixed bg-gray-500 text-sm text-white py-2 px-4 rounded-xl bottom-3 right-3">
    <p>{{session('success')}}</p>
</div>
    
@endif