@component('mail::message')
# رسالة جديدة من الموقع

**الاسم:** {{ $data['name'] }}
**البريد الإلكتروني:** {{ $data['email'] }}
@if(!empty($data['phone'])) **الهاتف:** {{ $data['phone'] }} @endif

**الرسالة:**
{{ $data['message'] }}

@endcomponent
