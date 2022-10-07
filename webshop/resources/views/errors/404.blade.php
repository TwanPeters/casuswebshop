@extends('errors.layout')

@php
  $error_number = 404;
@endphp

@section('title')
  Oeps! Deze pagina is niet gevonden!
@endsection

@section('description')
  @php
    $default_error_message = "Please <a href='javascript:history.back()''>Ga terug</a> of ga naar <a href='".url('')."'>onze homepagina.</a>.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?e($exception->getMessage()):$default_error_message): $default_error_message !!}
@endsection
