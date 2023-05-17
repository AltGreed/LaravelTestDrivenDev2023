<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar Repositorios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-4">
                <form action="{{route('repositories.store')}}" method="POST" cñass"max-w-mg>
                    @csrf 

                    <label class="block font-medium text-sm text -gray-700">URL * </label>
                    <input class="form-input w-full rounded-md shadow-sm" type="text" name="url" ">

                    <label class="block font-medium text-sm text -gray-700">Description * </label>
                    <textarea class="form-input w-full rounded-md shadow-sm" type="text" name="description"> </textarea>

                    <input type="submit" value="Guardar" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md">

                    <hr class="my-4">

                </form>
            </div>
        </div>
    </div>
</x-app-layout>