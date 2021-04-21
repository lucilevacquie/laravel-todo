<div class="flex items-center" :class="[checked === true ? 'bg-red-400' : 'bg-transparent']" x-data="{checked : false}">
    <input type="checkbox" id="checked" name="todo[]" @click="checked === true ? checked = false : checked = true" value="{{$todo->id}}" class="m-2"/>
    <li class="">{{$todo->todo}}</li>
</div>

