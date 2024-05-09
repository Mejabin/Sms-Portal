@extends("Backend.app")
@section('title')
Add Message
@endsection
@section('dashboard')
@include('message.message')
<div>
    <h4 class="mx-5 mt-4">Add Messages</h4>
</div>
<div class="mx-5 mt-10 border border-dashed p-5">
    <form action="{{ route('post.message') }}" method="post">
        @csrf
        <div>
            <label class="">Message Type:</label>
            <input name="message_type" class="input input-bordered p-3 w-full bg-[#09605A1A] text-black mt-3" type="text">
        </div>

        <div class="mt-5 relative">
            <label class="">Message:</label>
            <textarea id="message" name="message" class="textarea textarea-bordered w-full bg-[#09605A1A] text-black mt-3 lg:h-[500px]" oninput="countWords()"></textarea>
            <span id="wordCount" class="absolute bottom-5 right-5 text-sm text-gray-500">Word count: 0</span>
        </div>

        <div class="flex justify-end mt-5">
            <button type="submit" class="btn w-72 bg-[#09605A] hover:bg-[#09605A]  text-white text-xl">
                Add Messages +
            </button>

        </div>
    </form>

</div>
<script>
    function countWords() {
        const messageTextarea = document.getElementById('message');
        const message = messageTextarea.value;
        const trimmedMessage = message.trim();
        const words = trimmedMessage.split(/\s+/);
        const wordCount = words.length;
        const numMessages = wordCount > 130 ? 2 : 1;
        document.getElementById('wordCount').innerText = `${numMessages} message${numMessages > 1 ? 's' : ''}`;

    }
</script>
@endsection