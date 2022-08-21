<!DOCTYPE html>
<div id='main'>

<title> Welcome to the Andersen-test project </title>
<link rel="stylesheet" href="/andersen.css">
<body id="body">
    <h1>  Welcome to the Andersen-test project  </h1>


<form action="{{route('contact-submit')}}" method = "POST">
    @csrf
    <input type="text" name="name" id='name' class="form-input" placeholder="Enter your name" required></br>
    <input type="text" name="email" id='email' class="form-input" placeholder="Enter your email" required></br>
    <input type="text" name="message" id='message' class="form-input" placeholder="Enter your message" required></br>
    <button>Submit</button>
</form>
@if($posts->count() > 0)   
<div>
<table>
  <tr>
    <th>Name</th>
    <th>Email</th> 
    <th>Messages</th>
  </tr>
  @foreach($posts as $post)
  <tr>
    <td>{{ $post->name }}</td>
    <td>{{ $post->email }}</td> 
    <td>{{ $post->message }}</td>
  </tr>
  @endforeach
</table>
</div>
@endif
</body>
</div>