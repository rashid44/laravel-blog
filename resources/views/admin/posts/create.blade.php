<x-layout>
    <x-settings heading="Create a new post">
        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thumbnail" type="file" />
            <x-form.textarea name="excerpt" rows="2" />
            <x-form.textarea name="body" />

            <x-form.field>
                <x-form.label name="category_id" />
                <select name="category_id" id="category_id">

                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}
                        </option>
                    @endforeach
                </select>

                <x-form.error name="category_id" />
            </x-form.field>

            <div class="mb-6">
                <x-submit-button>Publish</x-submit-button>
            </div>
        </form>
    </x-settings>
</x-layout>
