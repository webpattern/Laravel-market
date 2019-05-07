@extends('admin.layouts.app_admin')

@section('content')

<div class="conteiner">
    @component('admin.components.breadcrumbs')
        @slot('title') Создание категорий @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent
</div>

<hr/>

<form class="form-horizontal" action="{{route('admin.category.store')}}" method="post">
    {{ csrf_field() }}

    @include('admin.categories.partials.form')

</form>

@endsection