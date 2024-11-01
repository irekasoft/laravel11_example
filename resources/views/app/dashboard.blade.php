<x-app-layout>

<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Dashboard') }}
  </h2>
</x-slot>


<div id="Dashboard" data-message="123" data-data="ABC"></div>
@vite(['resources/react/app/Dashboard.jsx'])


</x-app-layout>
