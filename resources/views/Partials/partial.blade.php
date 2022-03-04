@if($loop->even)
<div style="background-color:#022658">
<h1 style="color:pink">{{ $key . '. ' . $post['BlogTitle'] }}</h1>
<sub style="background-color:#c25256">>{{ $post['Subtitle'] }}</sub><br>
<hr />
<p><b>Content: {{ $post['Content'] }}</b></p><br>
<p style="background-color:#c34624">Date: {{ $post['Date'] }}</p><br>
</div>
@else
<div style="background-color:#291749">
<h1 style="color:lavender">{{ $key . '. ' . $post['BlogTitle'] }}</h1>
<sub style="background-color:#b41454">>{{ $post['Subtitle'] }}</sub><br>
<hr />
<p><u>Content: {{ $post['Content'] }}</u></p><br>
<p style="background-color:#d43664">Date: {{ $post['Date'] }}</p><br>
</div>
@endif


    