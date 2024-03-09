<div x-show="showModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-20" x-cloak>
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg p-5 mx-4 text-left shadow-lg max-w-xl w-full">
            <div class="mb-4">
                <h2 class="text-lg font-bold text-gray-900">Enter Your Email</h2>
            </div>
            <form @submit.prevent="submitForm" action="{{ route('join-newsletter') }}" method="POST">
                <input type="email" name="email" value="" required="" placeholder="Email address"
                       class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                       x-ref="emailInput">
                <div class="mt-5 sm:flex sm:flex-row-reverse">
            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
              <button type="submit"
                      class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-everglade-600 border border-transparent rounded-md hover:bg-everglade-500 focus:outline-none focus:border-everglade-700 focus:shadow-outline-everglade sm:text-sm sm:leading-5">
                Submit
              </button>
            </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
              <button @click="showModal = false" type="button"
                      class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                Cancel
              </button>
            </span>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function submitForm() {
        // Get the email input value
        var email = this.$refs.emailInput.value;

        // call join-newsletter route
        fetch('{{ route('join-newsletter') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                email: email,
                _token: '{{ csrf_token() }}'
            }),
            
        })

        .then(function (response) {
            // Redirect to the desired page upon successful submission
            window.location.href = '{{ $listing->external_url }}';
        })
        .catch(function (error) {
            console.error(error);
            // Handle errors if needed
        });
    }
</script>
