<h2>Hey !</h2> <br><br>

You received an email from : {{ $first_name }} <br><br>

User details: <br><br>

Name:  {{ $first_name }} {{$last_name }}<br>
Email:  {{ $email }}<br>
Subject:  {{ $subject }}<br>
Message: {{ $message_content }}<br><br>
Types: @isset ($ctype) @foreach ($ctype as $type) {{ $type }}@endforeach @endisset<br><br>
Thanks