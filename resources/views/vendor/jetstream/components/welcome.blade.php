<div class="grid grid-cols-8 gap-6 px-4 m-6">
    <div class="col-span-2">
        <div class="text-center font-bold">To do</div>
        <div class="grid grid-rows-6 border bg-white h-96">
            <div class="row-span-5">
                @if(count($todos) === 0)
                    <div>Add a new task to your list!</div>
                @else
                    <ul>
                        @foreach($todos as $todo)
                            <div class="flex items-center [checkbox === '1' ? 'bg-gray-900' : 'bg-gray-400']" x-data="{ checkbox: '0' }">
                                <input id="checkbox" type="checkbox" @click="checkbox === '0' ? checkbox = '1' : checkbox = '0'" class="m-2 [checkbox === '1' ? 'bg-gray-900' : 'bg-gray-400']"/>
                                <li class="">{{$todo->todo}}</li>
                            </div>
                        @endforeach
                    </ul>
                @endif
            </div>
            <form method="POST" class="grid grid-cols-4">
                @csrf
                <input id="todo" name="todo" type="text"  placeholder="Add a task" class="col-span-3"/>
                <button type="submit" class="border bg-red-600 text-white">+</button>
            </form>
        </div>
    </div>

    <div class="flex justify-center">
        <button class="border m-auto p-4 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <div class="col-span-2">
        <div class="text-center font-bold">Doing</div>
        <div class="border bg-white h-96"></div>
    </div>

    <div class="flex justify-center ">
        <button class="border m-auto p-4 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <div class="col-span-2">
        <div class="text-center font-bold">Done</div>
        <div class=" grid grid-rows-6 border bg-white h-96">
            <div class="row-span-5">
                Job done
                <ul></ul>
            </div>
            <button type="submit" @click="" class="border bg-red-600 text-white">Clear</button>
        </div>
    </div>
</div>
