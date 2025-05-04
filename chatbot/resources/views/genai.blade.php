<!DOCTYPE html>
<html>
<head>
    <title>GenAI Response</title>
</head>
<body>
    <h1>Chatbot AI</h1>
    
    <form method="GET" action="/genai">
        <input type="text" name="prompt" placeholder="Tanya sesuatu...">
        <button type="submit">Kirim</button>
    </form>
    @if (isset($result))
        <p>{{ $result }}</p>
    @else
        <p style="color: grey">jawaban akan tampil disini</p>
    @endif
</body>
</html>
