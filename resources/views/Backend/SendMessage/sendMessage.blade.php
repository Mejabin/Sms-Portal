@extends("Backend.app")
@section('title')
Add Message
@endsection
@section('dashboard')
@include('message.message')
<div>
    <h4 class="mx-5 mt-4">Send Messages</h4>
</div>
<div class="mx-5 mt-10 border border-dashed p-5">
   Send Message

</div>
<script>
    function countWords() {
        const messageTextarea = document.getElementById('message');
        const message = messageTextarea.value;
        const trimmedMessage = message.trim();
        const words = trimmedMessage.split(/\s+/);
        const wordCount = words.length;
        const numMessages = wordCount > 170 ? 2 : 1;
        document.getElementById('wordCount').innerText = `${numMessages} message${numMessages > 1 ? 's' : ''}`;

    }
</script>
@endsection