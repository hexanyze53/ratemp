<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <script src="//unpkg.com/alpinejs" defer></script>

  @vite('resources/css/app.css')
</head>

<body>
  <div x-data="{ open: false }">
    <div class="flex flex-row justify-around items-center h-screen w-screen bg-indigo-400">
      <button @click="open = ! open">Expand</button>
      <div class="bg-indigo-100 p-4 rounded-sm">
        a
      </div>
      <div class="bg-indigo-100 p-4 rounded-sm" x-show="open">
        b
      </div>
      <div x-data="{pre: true}">
        <div class="bg-indigo-100 p-4 rounded-sm"
          x-show="pre"
          x-transition:enter="transition duration-1000"
          x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition duration-200"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
        >
          c
        </div>
        <button @click="pre = ! pre">Toggle</button>
      </div>
    </div>
  </div>

  <!-- <div x-data="{ open: false }" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-amber-300 p-4">
    <button @click="open = ! open" class="pr-1.5">Expand</button>

    <span x-show="open" class="bg-indigo-200 p-2">
      Content...
    </span>
    <span x-show="!open" class="bg-violet-400 p-2">
      Not Content...
    </span>
  </div> -->
</body>

</html>