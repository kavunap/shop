@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
<h2>{{ $exception->getMessage() }}</h2>
hj,gkbkh
@section('message', __('Not Found'))

