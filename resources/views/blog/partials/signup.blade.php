<div class="lg:sticky lg:float-left relative lg:top-10 flex w-full items-end overflow-hidden lg:rounded-3xl border border-white/10 group">
    <div class="bg-zinc-200 shadow sm:rounded-lg w-full">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg font-semibold leading-6 text-zinc-800">Sign up to our newsletter</h3>
            <div class="mt-2 max-w-xl text-sm text-zinc-600">
                <p>Get notified when we add new articles to our blog.</p>
            </div>
            <form id="joinNewsletter" class="" method="POST">
                @csrf
                <div class="mt-5 sm:flex sm:items-center gap-2">
                    <div class="w-full sm:max-w-xs">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email"
                               class="block w-full rounded-md border-0 py-1.5 px-2 text-zinc-400 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-zinc-600 focus:ring-2 focus:ring-inset focus:ring-everglade-600 sm:text-sm sm:leading-6"
                               placeholder="you@example.com">
                    </div>
                    <button type="submit"
                            class="mt-3 inline-flex w-full items-center justify-center rounded-md bg-everglade-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-everglade-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-everglade-600 sm:ml-3 sm:mt-0 sm:w-auto">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#joinNewsletter').on('submit', function (e) {
            e.preventDefault(); // Prevent the form from submitting the traditional way

            $.ajax({
                type: 'POST',
                url: '{{ route('join-newsletter') }}',
                data: $(this).serialize(), // Serialize form data
                success: function (response) {
                    // Handle success
                    $('#joinNewsletter').append('<div class="text-sm text-everglade-300 mt-3">Thank you for subscribing!</div>');
                    // Empty the input fields
                    $('#joinNewsletter').find('input[type="text"], input[type="email"]').val('');
                },
                error: function (response) {
                    // Handle error
                    $('#joinNewsletter').append('<div class="text-sm text-red-300 mt-3">There was a problem with your subscription. Please try again.</div>');
                }
            });
        });
    });
</script>

@endpush
