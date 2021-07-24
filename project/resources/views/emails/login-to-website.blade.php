@component('mail::message')
    <h2>hello !</h2>
    <h3>You Are Logged In Website</h3>
    @component('mail::button' , ['url' => url('/') , 'color' => 'success'])
        Go To Website
    @endcomponent

@endcomponent
