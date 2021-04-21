<div class="grid grid-cols-8 gap-6 px-4 m-6">
    <div class="col-span-2">
        <div class="text-center font-bold">To do</div>
        <div class="grid grid-rows-6 border bg-white h-96">
            <div class="row-span-5">
                @if(count($todos) === 0)
                    <div>Add a new task to your list!</div>
                @else
                    <ul id="todo">
                        <form action="{{route("todo.todoToDoing")}}" method="POST" id="todoForm">
                        @csrf
                        @foreach($todos->where("status" , 1) as $todo)
                            <livewire:list-item :todo="$todo"/>
                        @endforeach
                        </form>
                    </ul>
                @endif
            </div>
            <form method="POST" class="grid grid-cols-4">
                @csrf
                <input id="todo" name="todo" type="text"  placeholder="Add a task" class="col-span-3 focus:border-red-600"/>
                <button type="submit" class="border bg-red-600 text-white">+</button>
            </form>
        </div>
    </div>

{{--    <livewire:next-button/>--}}
    <div class="flex flex-col justify-center">
        <div class="flex justify-center">
            <button class="border m-auto p-4 hover:bg-gray-100" onclick="document.getElementById('todoForm').submit()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <div class="flex justify-center">
            <button class="border m-auto p-4 hover:bg-gray-100" onclick="document.getElementById('todoForm').submit()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </button>
        </div>
    </div>

    <div class="col-span-2">
        <div class="text-center font-bold">Doing</div>
        <div class="border bg-white h-96">
            <ul id="doing">
                <form action="{{route("todo.doingToDone")}}" method="POST" id="doingForm">
                    @csrf
                    @foreach($todos->where("status" , 2) as $todo)
                        <livewire:list-item :todo="$todo"/>
                    @endforeach
                </form>
            </ul>
        </div>
    </div>

{{--    <livewire:next-button/>--}}
    <div class="flex flex-col justify-center">
        <div class="flex justify-center">
            <button class="border m-auto p-4 hover:bg-gray-100" onclick="document.getElementById('doingForm').submit()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
            </button>
        </div>
        <div class="flex justify-center">
            <button class="border m-auto p-4 hover:bg-gray-100" onclick="document.getElementById('doingForm').submit()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </button>
        </div>
    </div>

    <div class="col-span-2">
        <div class="text-center font-bold">Done</div>
        <div class=" grid grid-rows-6 border bg-white h-96">
            <div class="row-span-5">
                <ul id="done">
                    <form action="{{route("destroy.todo")}}" method="POST" id="doneForm">
                        @csrf
                        @foreach($todos->where("status" , 3) as $todo)
                            <livewire:list-item :todo="$todo"/>
                        @endforeach
                    </form>
                </ul>
            </div>

            <form method="GET" action="{{route("destroy.todo")}}" class="grid grid-cols-4">
                @csrf
                <button type="submit" class="col-span-full border bg-red-600 text-white">Clear</button>
            </form>
        </div>
    </div>
</div>
