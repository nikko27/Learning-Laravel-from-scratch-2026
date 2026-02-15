<x-layout>
    <form method="POST" action="/ideas">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">New Idea</legend>
                <p class="mt-3 text-sm/6 text-gray-400">Have an idea you want to save for later.</p>

                        <textarea placeholder="Description"
                            id="description"
                            name="description"
                            rows="3"
                            class="textarea w-full @error('description') textarea-error @enderror"
                        ></textarea>

                        <x-forms.error name="description" />

                <button type="submit" class="btn btn-neutral mt-4">Save</button>

        </fieldset>
    </form>
</x-layout>
