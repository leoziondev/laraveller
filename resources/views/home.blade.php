<x-main-layout>

    <div class="container mx-auto bg-white p-8 rounded shadow-sm mt-8">
        <h1>Home Page</h1>

        @role('admin')
            <p class="text-green-700 text-md font-semibold">I am Admin!</p>
        @else
            <p class="text-red-700 text-md font-semibold">I am User!</p>
        @endrole
    </div>
</x-main-layout>
