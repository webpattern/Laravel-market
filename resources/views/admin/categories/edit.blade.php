@extends('admin.layouts.app_admin')

@section('content')

<div class="conteiner">
    @component('admin.components.breadcrumbs')
        @slot('title') Редактирование категорий @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent
</div>

<hr/>

<form class="form-horizontal" action="{{route('admin.category.update', $category)}}" method="post">
    <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}

    @include('admin.categories.partials.form')

</form>

@endsection