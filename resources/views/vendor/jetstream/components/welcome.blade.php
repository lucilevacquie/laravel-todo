<div class="grid grid-cols-3 gap-6 px-4">
    <div>
        <h3>To do</h3>
        <div class=" grid grid-rows-4 border bg-white h-96">
            <div class="row-span-3">
                List of todos
                <ul>
                    @foreach($todos as $todo)
                        <li>{{$todo->todo}}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                Add
                <form method="post" action="" class="grid grid-cols-4">
                    @csrf
                    <input id="task" name="task" type="text"  placeholder="Add a task" class="col-span-3"/>
                    <button type="submit" @click="{{ route('store-todo') }}" class="border bg-red-600 text-white">+</button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <h3>Doing</h3>
        <div class="border bg-white h-96"></div>
    </div>
    <div>
        <h3>Done</h3>
        <div class=" grid grid-rows-4 border bg-white h-96">
            <div class="row-span-3">
                Job done
                <ul></ul>
            </div>
            <div>
                <button type="submit" @click="" class="border bg-red-600 text-white">Clear</button>
            </div>
        </div>
    </div>
</div>
