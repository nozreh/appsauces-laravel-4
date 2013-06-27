@extends('emails/layouts/default')

@section('content')
<p>Hello {{ $data['name'] }},</p>

<p>Welcome to Appsauces! Thank you for your interest we will get back to you soon:</p>


<p>Best regards,</p>

<p>Appsauces Team</p>
@stop
