<h1>Hi {{ $name }} Please reset your password!</h1>
<p>We received a request to change your password.
    If you are not initiator of this request, please let us know for the security of your account.
    <br>If your are the initiator, click to the link below to reset your password<br>
    <a href="{{ route('app_change_password', ['token'=> $activation_token]) }}" target="_blank">Reset your password</a>
</p>

<p>
    Manadjim team.
</p>
