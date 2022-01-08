<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl py-10">Register!</h1>

                <form action="/register" method="POST">
                    @csrf

                    <x-form.input type="text" name="name" />
                    <x-form.input type="text" name="username" />
                    <x-form.input type="email" name="email" />
                    <x-form.input type="password" name="password" />

                    <x-form.button>Register</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
