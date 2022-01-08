<div class="relative" x-data="{show: false}" @click.away="show = false">
    <div @click="show = !show">
        {{ $trigger }}
    </div>
    <div class="py-2 absolute bg-gray-100 w-full mt-2 rounded z-50 overflow-auto max-h-52" x-show="show" style="display: none">
        {{ $slot }}
    </div>
</div>
