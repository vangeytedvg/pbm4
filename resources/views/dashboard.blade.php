<!-- 
    Dashboard after login
 -->
@extends('layouts.app')
@section('content')
<x-pbm-title class="text-gray-500 flex justify-center">Dashboard</x-pbm-title>

<div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex justify-center flex-wrap -mx-1 lg:-mx-4 lg:mr-2">
        <x-own.pbm-card title="Invoices" img="/assets/images/finance.jpg">Current amount of open invoices
        </x-own.pbm-card>
        <x-own.pbm-card title="Payment Plans" img="/assets/images/payment.jpg">Running payment plans</x-own.pbm-card>
        <x-own.pbm-card title="Administration" img="/assets/images/security.jpg">Configuration settings</x-own.pbm-card>
    </div>
</div>

@endsection