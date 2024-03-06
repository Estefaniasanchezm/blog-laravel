<x-app-layout>
    <div class="bg-white py-10 sm:py-10">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-gray-900">Nuevo post</h2>
            <form method="post" action="{{ route('posts.store')}}">
                @csrf
                <input type="hidden" value="{{ auth()->user()->id }}" name="user_id" id="user_id">

                <div class="sm:col-span-4 border-t border-gray-100 mt-10 pt">
                    <label for="name" class="block text-gray-900 font-bold">Nombre</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                            <input type="text" name="name" id="name" autocomplete="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="{{ old('name') }}">

                        </div>
                        @error('name')
                        <div class="font-bold text-sm ">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="slug" class="block text-gray-900 font-bold">Slug</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                            <input type="text" name="slug" id="slug" autocomplete="slug" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="{{ old('slug') }}">
                            @error('slug')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="extract" class="block text-gray-900 font-bold">Extract</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <textarea name="extract" id="extract" autocomplete="slug" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">{{ old('extract') }}</textarea>

                        </div>
                        @error('extract')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="sm:col-span-4">
                    <label for="body" class="block text-gray-900 font-bold">Body</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <textarea name="body" id="body" autocomplete="body" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">{{ old('body') }}</textarea>

                        </div>
                        @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="body" class="block text-gray-900 font-bold">Categoria</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <select name="categoria_id" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre}} </option>
                                @endforeach
                            </select>


                        </div>
                    </div>
                </div>
                <div class="sm:col-span-4 mt-5">
                    <button type="submit" class="flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
                </div>
            </form>


        </div>
    </div>
</x-app-layout>