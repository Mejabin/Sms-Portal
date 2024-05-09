@extends("Backend.app")
@section('title')
Add Contact
@endsection
@section('dashboard')

@include('message.message')
<div>
    <h4 class="mx-4 mt-5">Add Contact</h4>
</div>
<div class="mx-5 mt-10 border border-dashed p-5">
    <form action="{{route('post.contact')}}" method="post">
        @csrf
        <div>
            <label class="">Name:</label>
            <input name="name" class="input input-bordered p-3 w-full bg-[#09605A1A] text-black mt-3" type="text">
        </div>
        <div class="mt-5">
            <label class="">Address:</label>
            <input name="address" class="input input-bordered p-3 w-full bg-[#09605A1A] text-black mt-3" type="text">
        </div>
        <div class="mt-5">
            <label class="">Mobile No:</label>
            <input name="mobile" class="input input-bordered p-3 w-full bg-[#09605A1A] text-black mt-3" type="text">
        </div>
        <div class="mt-5">
            <button type="submit" class="btn w-full bg-[#09605A] hover:bg-[#09605A]  text-white text-xl">
                Add Contact +
            </button>
        </div>
    </form>
    <div class="divider">OR</div>
    <form action="">
        <div class="mt-5">
            <label class="">Upload Excel:</label>
            <input type="file" class="file-input file-input-bordered file-input-[#09605A1A] w-full mt-3" />
        </div>
        <div class="mt-5">
            <button class="btn w-full bg-[#09605A] hover:bg-[#09605A]  text-white text-xl">
                Upload Excel +
            </button>
        </div>
    </form>
</div>
@endsection